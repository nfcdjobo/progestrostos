<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Constants\Status;
use App\Models\Activite;
use App\Models\Consommation;
use App\Models\Menu;
use App\Models\Plat;
use App\Models\Repas;
use App\Models\Table;
use App\Models\User;
use App\Models\Vente;
use App\Providers\DataFormattingServiceProvider;
use App\Providers\UtilServiceProvider;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Repas $repas = null)
    {
        $today = Carbon::today();
        $fetchAllRepas = Repas::all();

        if($repas){
            $fetchAllPlat = Plat::where('date', $today)->where('quantite','>', 0)->whereHas('menu', function($query){
                $today = Carbon::today();
                $query->where('date', $today);
            })->whereHas('repas', function($query) use ($repas) {
                $query->where('id', $repas->id);
            })->get();

            if($fetchAllPlat->isNotEmpty()){

                $serveurs = User::where('etat', 'ACTIF')->where('status', 'ACTIF')->whereHas('role', function($query) use ($repas) {
                    $query->where('name', 'SERVEUR');
                })->orderBy('fullname', 'asc')->get();

                $tables = Table::where('etat', 'ACTIF')->where('status', 'ACTIF')->orderBy('name', 'asc')->get();

                session()->flash('notification', [
                    'type' => Messages::TYPE_SUCCES,
                    'title' => 'Succès',
                    'message' => Messages::SUCCES_SAVE
                ]);

                return view('caisses.index', compact('fetchAllRepas', 'repas', 'fetchAllPlat', 'serveurs', 'tables'));

            }else{
                session()->flash('notification', [
                    'type' => Messages::TYPE_ERROR,
                    'title' => 'Érreur',
                    'message' => Messages::ERROR_NOT_FOUND
                ]);
            }
        }
        //dd($repas);
        return view('caisses.index', compact('fetchAllRepas', 'repas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //dd($request->input("client"));
        $formatRequest = DataFormattingServiceProvider::orderPropertyOfVente($request->all());

        $details = [];

        $chaine = "azertyuiopqsdfghjklmwxcvbn0123654789";

        $plat_id = null;
        $menu_id = null;
        $activite_id = null;

        $montant_total = 0;

        foreach ($formatRequest as $key => $value) {

            $plat_id = $value->plat->id;

            $menu_id = $value->plat->menu_id;

            $activite_id = $value->plat->activite_id;

            $detail = [

                "prix" => $value->prix,

                "quantite" => $value->quantite,

                "montant" =>  $value->prix * $value->quantite,

                "name" => $value->name,

            ];

            $montant_total += $detail["montant"];

            $details[] = $detail;
        }

        $user = Auth::user();

        $reference = UtilServiceProvider::generateRandomString($chaine, 20);

        $allDetails['detail'] = json_encode($details);

        $allDetails['plat_id'] = $plat_id;

        $allDetails['menu_id'] = $menu_id;

        $allDetails['activite_id'] = $activite_id;

        if($request->manager){
            $allDetails['manager'] = (int)$request->manager;
        }

        if($request->table){
            $allDetails['table_id'] = (int)$request->table;
        }

        $allDetails['caissier'] = $user->id;

        $allDetails['montant'] = $montant_total;

        $allDetails['reference'] = $reference;

        $vente = Vente::create($allDetails);

        //dd((boolean)$request->input("client"));

        if(!(boolean)$request->input("client")){
            $consommation = new Consommation();
            $consommation->user_id = $request->input("manager");
            $consommation->vente_id = $vente->id;

            $consommation->save();
        }

        foreach ($formatRequest as $key => $value) {
            $value->plat->save();
        }

        if($request->table){
            $tables = Table::where('id', $request->table)->first();

            $tables->etat = 'INACTIF';

            $tables->save();
        }

        return redirect()->back()->with('vente', $vente);
    }

    public function print_recu($id){

        $vente = Vente::with('table')->where('id', $id)->first();

        $data = [];

        $data['id'] = $vente->id;

        $data['activite'] = $vente->activite;

        if($vente->manager){
            $data['manager'] = User::where('id', (int)$vente->manager)->first();
        }

        if($vente->table_id){
            $data['table'] = $vente->table->numero;
        }

        $data['caissier'] = User::where('id', $vente->caissier)->first();

        $data['detail'] = json_decode($vente->detail);

        $data['montant'] = $vente->montant;

        $data['updated_at'] = $vente->updated_at;

        $data['created_at'] = $vente->created_at;

        $data['reference'] = $vente->reference;

        return DataFormattingServiceProvider::generated_pdf('templates.recu_restaurant', $data, 'réçu_payement');
    }

    public function showAll(Request $request) {
        $tody = Carbon::today();
        $yesterdayDate = Carbon::yesterday();

        // Récupérer les paramètres de la requête
        $startDate = $request->query('startDate');
        $endDate = $request->query('endDate');

        $startDate = $startDate ? Carbon::parse($startDate) : null;
        $endDate = $endDate ? Carbon::parse($endDate) : null;

        // Initialiser la requête de base avec les relations filtrées et chargées
        $query = Vente::with(['manager', 'caissier', 'activite', 'table'])
            ->whereHas('activite', function($query) {
                $query->where('status', 'ACTIF');
            })
            ->whereHas('table', function($query) {
                $query->where('status', 'ACTIF');
            });

            $query->where('created_at', '>=', $tody);
            $allVents = $query->get();




        $otherQuery = Vente::with(['manager', 'caissier', 'activite', 'table'])
            ->whereHas('manager', function($query) {
                $query->where('role_id', 8);
            })
            ->whereHas('caissier', function($query) {
                $query->whereIn('role_id', [1, 2]);
            })
            ->whereHas('activite', function($query) {
                $query->where('status', 'ACTIF');
            })
            ->whereHas('table', function($query) {
                $query->where('status', 'ACTIF');
            });

        // Appliquer les filtres de date
        if ($startDate && $endDate) {
            $otherQuery->whereBetween('created_at', [$startDate, $endDate]);
        } else {
            if ($startDate) {
                $otherQuery->where('created_at', '>=', $startDate);
            }else if ($endDate) {
                $otherQuery->where('created_at', '<=', $endDate);
            }else{

                $otherQuery->where('created_at', '<=', $yesterdayDate);
            }
        }

        // Exécuter la requête et récupérer les résultats
        $allVents = $query->get();
        $allOtherVente = $otherQuery->get();
        // dd($tody);
        //dd([count($allVents),count($allOtherVente)]);

        $PDFs = [];

        if(count($allVents)){
            foreach ($allVents as $key => $vente) {
                $data = [];

                $data['id'] = $vente->id;

                $data['activite'] = $vente->activite;

                if($vente->manager){
                    $data['manager'] = User::where('id', (int)$vente->manager)->first();
                }

                if($vente->table_id){
                    $data['table'] = $vente->table->numero;
                }

                $data['caissier'] = User::where('id', $vente->caissier)->first();

                $data['detail'] = json_decode($vente->detail);

                $data['montant'] = $vente->montant;

                $data['updated_at'] = $vente->updated_at;

                $data['created_at'] = $vente->created_at;

                $data['reference'] = $vente->reference;

                $filePDF = DataFormattingServiceProvider::generated_pdf('templates.recu_restaurant', $data, 'réçu_payement');

                $PDFs[] = $filePDF;
            }
        }

        // Retourner les résultats à la vue avec les données appropriées
        return view('ventes.index', compact('allVents', 'allOtherVente', 'PDFs'));
    }

    public function generatePDFs(Menu $menu)
    {
        if ($menu) {
            $menus = $menu;
            // Charger la vue et passer les options directement
            $pdf = Pdf::loadView('templates.menusPDF', ['menus' => $menus]);

            $menus_name = 'menus-'.$menu->reference.$menu->date.'.pdf';

            return $pdf->download($menus_name);
        } else {
            session()->flash('notification', [
                'type' => 'error',
                'title' => 'Érreur',
                'message' => 'Error printing the menu.'
            ]);
            return redirect()->back();
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vente $vente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vente $vente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vente $vente)
    {
        //
    }
}
