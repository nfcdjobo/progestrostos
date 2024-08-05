<?php

namespace App\Http\Controllers;

use App\Models\caisse;
use Illuminate\Http\Request;

class CaisseController extends Controller
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
    public function show(caisse $caisse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(caisse $caisse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, caisse $caisse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(caisse $caisse)
    {
        //
    }
}
