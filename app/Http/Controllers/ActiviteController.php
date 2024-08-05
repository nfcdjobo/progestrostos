<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Providers\UtilServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\DB;

class ActiviteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activites = DB::table('activites')->orderBy('created_at', 'asc')->get();
        return view("activities.activity", ["activites" => $activites]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            "name" => ["required", "between:3,100"]
        ]);

        if($validatedData){
            $chaine = "abcdefghijklmnopqrstuvwxyz";
            do {
                $random = UtilServiceProvider::generateRandomString($chaine, 15);
                $idExists = UtilServiceProvider::fetchTable('users', $random);
            } while ($idExists);
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
    public function show(Activite $activite)
    {
        $fetchAllActivityById = DB::table('activites')->where('id', $activite)->first();
        return view('activities.detail', ["fetchAllActivityById" => $fetchAllActivityById]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(activite $activite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, activite $activite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(activite $activite)
    {
        //
    }
}
