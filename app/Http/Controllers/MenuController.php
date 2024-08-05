<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Models\Menu;
use App\Providers\DataFormattingServiceProvider;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;



class MenuController extends Controller
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
    public function create(Request $request){

        $params = $request->all();
        
        $data_json = DataFormattingServiceProvider::generate_json_form($params);

        if(is_string($data_json)){
            return false;
        }

        Menu::create($data_json);

        session()->flash('notification', [
            'type' => Messages::TYPE_SUCCES,
            'title' => 'Succès',
            'message' => Messages::SUCCES_SAVE
        ]);

        return redirect()->back()->withInput();
    }

    public function generatePDF(Menu $menu)
    {
        if ($menu) {
            $menus = $menu;
            // Charger la vue et passer les options directement
            $pdf = Pdf::loadView('templates.menusPDF', ['menus' => $menus]);

            $menus_name = 'menus-'.$menu->reference.$menu->date.'.pdf';
            //dd($pdf->download($menus_name));
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
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
