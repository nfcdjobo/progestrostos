<?php

namespace App\Http\Controllers;

use App\Models\repas;
use Illuminate\Http\Request;

class RepasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(repas $repas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(repas $repas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, repas $repas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(repas $repas)
    {
        //
    }
}
