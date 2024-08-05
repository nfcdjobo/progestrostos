<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Constants\Status;
use App\Models\Activite;
use App\Models\Menu;
use App\Models\Plat;
use App\Models\Repas;
use App\Models\VIP;
use App\Providers\DataFormattingServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PlatController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();

        $fourDaysLater = $today->copy()->addDays(3); // Ajoute 3 jours à la date d'aujourd'hui pour couvrir une période de 4 jours au total

        $menus = Menu::with('repas')->whereIn('status', [Status::ETAT_EN_ATTENTE, Status::ETAT_OUVERT])->whereIn('etat', [Status::ETAT_EN_ATTENTE, Status::ETAT_OUVERT])->whereBetween('date', [$today, $fourDaysLater])->get();

        $passMenus = Menu::with('repas')->orderBy('date', 'asc')->get();

        //dd($passMenus);

        $vip = VIP::all();

        $repas = Repas::all();

        return view('recettes.index', compact('vip', 'repas', 'menus', 'passMenus'));
    }


    public function mesplats(){

        $today = Carbon::today();

        $menus = Menu::with('repas')->whereIn('status', [Status::ETAT_EN_ATTENTE, Status::ETAT_OUVERT])->whereIn('etat', [Status::ETAT_EN_ATTENTE, Status::ETAT_OUVERT])->where('date', $today)->get();

        $menusPass = Menu::with('repas')
        ->whereIn('status', [Status::ETAT_EN_ATTENTE, Status::ETAT_OUVERT])
        ->whereIn('etat', [Status::ETAT_EN_ATTENTE, Status::ETAT_OUVERT])
        ->where('date','!=', $today)->get();

        $plats = Plat::with('activite')->with('menu')->with('repas')->where('quantite', 0)->get();

        return view('recettes.plats', compact('menus', 'menusPass', 'plats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Menu $menu, Repas $repas)
    {
        $formProperties = DataFormattingServiceProvider::orderPropertiesOfPlats($request->all());

        $activite = Activite::where('name', 'RESTAURANT')->first();

        $isSave = false;

        $echoue = false;

        foreach ($formProperties as $key => $value) {

            if(!Plat::where('name', $value->name)->where('date', $menu->date)->where('menu_id', $menu->id)->first()){

                $newPlat = new Plat();

                $newPlat->name = $value->name;

                $newPlat->quantite = $value->quantite;

                $newPlat->prix = $value->prix;

                $newPlat->prix_total = $value->prix_total;

                $newPlat->activite_id = $activite->id;

                $newPlat->menu_id = $menu->id;

                $newPlat->repas_id = $repas->id;

                $newPlat->date = $menu->date;

                $newPlat->save();

                $isSave = true;
            }else{
                $echoue = true;
            }
        }

        if($isSave && !$echoue){
            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'title' => 'Succès',
                'message' => Messages::SUCCES_SAVE
            ]);
        }elseif(!$isSave && $echoue) {
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => Messages::ERROR_SAVE
            ]);

        }else{
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => "Certains plats existe déjà !"
            ]);
            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'title' => 'Succès',
                'message' => "Certains plats sont ajouté avec succès !"
            ]);
        }

        return redirect()->back();

    }


    public function listing($menu,  $repas){

        $menus = Menu::where('id', $menu)->first();
        $fetch_plats = Plat::where('menu_id', $menu)->where('repas_id', $repas)->where('date', $menus->date)->get();
        //dd($fetch_plats);
        if(count($fetch_plats) !== 0){
            return view('recettes.platlisting', compact('fetch_plats'));
        }else{
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => Messages::ERROR_NOT_FOUND
            ]);
            return redirect()->back();
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(plat $plat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plat $plat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plat $plat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plat $plat)
    {
        //
    }
}
