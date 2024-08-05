<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Models\Consommation;
use App\Models\Departement;
use App\Models\Espace;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Vente;
use App\Providers\UtilServiceProvider;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Carbon::setLocale('fr');


class UserManagementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index($id = null)
    {
        $user = $id ? User::find($id) : null;

        $fetchRoles = Role::whereNotIn('name', ['SERVEUR', 'GESTIONNAIRE'])->orderBy('name', 'asc')->get();

        $fetchRolesServeur = Role::where('name', 'SERVEUR')->orderBy('name', 'asc')->get();

        $fetchUsers = User::with('role')->whereHas('role', function($query) {
            $query->where('name', '!=', 'SERVEUR');
        })->orderBy('fullname', 'asc')->get();

        $fetchUsersHasServeur = User::with('role')->whereHas('role', function($query) {
            $query->where('name', '=', 'SERVEUR');
        })->orderBy('fullname', 'asc')->get();

        $espaces = Espace::all();

        $departements = Departement::all();

        return view('usermanagement.user', compact('fetchRoles', 'fetchUsers', 'fetchRolesServeur', 'user', 'fetchUsersHasServeur', 'espaces', 'departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            "fullname" => ["required", "between:3,100"],
            "email" => ["required", "email", "unique:users"],
            "role" => ["required"],
            "telephone" => ["required"],
            "residence" => ["required"],
            "date_prise_de_fonction" => ["required"]
        ]);

        if ($validatedData) {
            try {
                $newUser = new User();
                $newUser->fullname = $validatedData["fullname"];
                $newUser->password = Hash::make("gestion");
                $newUser->email = $validatedData["email"];
                $newUser->telephone = $validatedData["telephone"];
                $newUser->residence = $validatedData["residence"];
                $newUser->date_prise_de_fonction = $validatedData["date_prise_de_fonction"];
                $newUser->role_id = $request->role;
                $newUser->save();

                session()->flash('notification', [
                    'type' => Messages::TYPE_SUCCES,
                    'title' => 'Succès',
                    'message' => Messages::SUCCES_SAVE
                ]);

                return redirect()->route("getUser");
            } catch (\Exception $e) {
                session()->flash('notification', [
                    'type' => Messages::TYPE_ERROR,
                    'title' => 'Érreur',
                    'message' => Messages::ERROR_ACCOUNT_TRY
                ]);
                return redirect()->back()->withInput();
            }
        } else {
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => Messages::ERROR_ACCOUNT_TRY
            ]);
            return redirect()->back()->withInput()->withErrors($validatedData);
        }
    }

    public function getAll(){
        $fetchAll = DB::table('users')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    public function consommation(User $user){

        $ventes = Vente::where('manager', $user->id)->where('status', 'ACTIF')->get();

        $all_users = User::with('role')->whereHas('role', function($query) {
            $query->where('name', '=', 'SERVEUR')->where('status', '=', 'ACTIF');
        })->get();

        $consommationsNoSolde = Consommation::with(['user', 'vente'])
        ->whereHas('user', function($query) use ($user) {$query->where('id', $user->id);})->where('status', 0)->get();

        $consommationsSolde = Consommation::with(['user', 'vente'])
        ->whereHas('user', function($query) use ($user) {$query->where('id', $user->id);})->where('status', 1)->get();

        return view('consommation.index', compact('user', 'consommationsNoSolde', 'consommationsSolde'));
    }


    public function payer(Request $request, Consommation $consommation)
    {
        $request = $request->all();

        $isConsommation = Consommation::where('id', $request['consommation'])->first();
        if($isConsommation->id === $consommation->id){
            $consommation->status = 1;
        }

        if($consommation->save()){
            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'title'=> "FACTURE",
                'message' => "Paiement effectué avec succès !"
            ]);
        }else{
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title'=> "ERROR",
                'message' => "Paiement non effectué !"
            ]);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, User $id)
    {
        $user = $id;
        $request = $request->all();

        $user->status = $request['status'];
        $user->departement_id = $request['departement'];
        $user->espace_id = $request['espace'];

        $user->update();
        session()->flash('notification', [
            'type' => Messages::TYPE_SUCCES,
            'message' => Messages::SUCCESS_UPDATE
        ]);
        return redirect()->route('getUser');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "fullname" => ["required", "between:3,100"],
            "email" => ["required", "email"],
            "role" => ["required"],
            "telephone" => ["required"],
            "residence" => ["required"],
            "date_prise_de_fonction" => ["required"]
        ]);

        // Date à convertir
        $date = $request["date_prise_de_fonction"];

        // Conversion de la date en timestamp
        $timestamp = strtotime($date);

        // Formatage du timestamp en "YYYY-MM-DD HH:MM:SS"
        $formattedDate = date("Y-m-d H:i:s", $timestamp);
        $request['date_prise_de_fonction'] = $formattedDate;
        $request['role_id'] = $request['role'];

        $userData = $request->except(['role', '_token']);

        DB::table('users')
            ->where('id', $id)
            ->update($userData);

        session()->flash('notification', [
            'type' => Messages::TYPE_SUCCES,
            'message' => Messages::SUCCESS_UPDATE
        ]);
        // Rediriger avec un message de succès
        return redirect()->route('getUser');
    }

    public function edite(Request $request, User $user)
    {
        $request = $request->all();
        //dd(isset($request['departement']));
        if(!isset($request['departement']) || !$request['departement']){
            session()->flash('notification', [
                'title' => 'err',
                'type' => Messages::TYPE_ERROR,
                'message' => "Veuillez affecter un département !"
            ]);
        }elseif(!isset($request['espace']) || !$request['espace']){
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'message' => "Veuillez affecter un espace !"
            ]);
        }else{
            $user->departement_id = $request['departement'];

            $user->espace_id = $request['espace'];

            $user->status = $request['status'] ?? "INACTIF";

            if($user->save()){
                session()->flash('notification', [
                    'type' => Messages::TYPE_SUCCES,
                    'message' => Messages::SUCCESS_UPDATE
                ]);
            }else{
                session()->flash('notification', [
                    'type' => Messages::TYPE_SUCCES,
                    'message' => Messages::ERROR_UPDATE
                ]);
            }
        }

        return redirect()->route('getUser');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
