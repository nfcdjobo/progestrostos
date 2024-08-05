<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Providers\DataFormattingServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($periode = null){
        $ventes = DataFormattingServiceProvider::fetch_vent_to_show_dashboard($periode);
        $plats = DataFormattingServiceProvider::fetch_plat_to_show_dashboard($periode);
        $users = DataFormattingServiceProvider::fetch_user_to_show_on_dasboard();
        $recetteVentes = DataFormattingServiceProvider::calcul_vente_sommation($ventes);
        $recettePlats = DataFormattingServiceProvider::calcul_vente_sommation($plats);
        return view("index", compact('ventes', 'plats', 'users', 'recetteVentes', 'recettePlats'));
    }
}
