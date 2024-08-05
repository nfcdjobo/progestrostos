<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RestaurationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $countAllTables = count(DB::table('tables')->get());
        $countFreeTables = count(DB::table('tables')->where('etat', '=', 'ACTIF')->get());

        $countAllRepas = count(DB::table('repas')->get());
        $countFreeRepas = count(DB::table('repas')->where('etat', '=', 'ACTIF')->get());

        $countAllPlats = count(DB::table('plats')->get());
        $countFreePlats = count(DB::table('plats')->where('etat', '=', 'ACTIF')->get());

        $countAllServeurs = count(User::where('etat', 'ACTIF')->where('status', 'ACTIF')->with('role')->whereHas('role', function($query) {$query->where('name', '=', 'SERVEUR');})->get());
        $countFreeServeurs = count(User::with('role')->whereHas('role', function($query) {$query->where('name', '=', 'SERVEUR');})->get());

        $article = Article::where('status', '=', 'ACTIF')->where('etat', '=', 'ACTIF')->orderBy('name', 'asc')->get();

        return view('restauration.index', [
            'countAllTables' => $countAllTables, 'countFreeTables' => $countFreeTables,
            'countAllRepas' => $countAllRepas, 'countFreeRepas' => $countFreeRepas,
            'countAllPlats' => $countAllPlats, 'countFreePlats' => $countFreePlats,
            'countAllServeurs' => $countAllServeurs, 'countFreeServeurs' => $countFreeServeurs,
            'article' => $article,
        ]);
    }
}
