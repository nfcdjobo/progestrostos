<?php

namespace App\Http\Controllers;

use App\Models\VIP;
use Illuminate\Http\Request;

class VIPController extends Controller
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
    public function show(VIP $vIP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VIP $vIP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VIP $vIP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VIP $vIP)
    {
        //
    }
}
