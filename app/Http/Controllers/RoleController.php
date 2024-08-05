<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allRoles = DB::table('roles')->get();
        $fetchServers = User::where('etat', 'ACTIF')->where('status', 'ACTIF')->whereHas('role', function($query) {$query->where('name', 'SERVEUR')->where('etat', 'ACTIF')->where('status', 'ACTIF');})->whereHas('role', function($query) {$query->where('name', 'SERVEUR')->where('etat', 'ACTIF')->where('status', 'ACTIF');})->get();


        return view('roles.roles', compact('allRoles', 'fetchServers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
