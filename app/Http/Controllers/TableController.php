<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Models\Activite;
use App\Models\Table;
use App\Models\VIP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetchAllVIP = DB::table('vip')->get();
        $fetchAllTables = Table::with(['vip', 'activite'])->get();
        return view('restauration.tables', ['fetchAllVIP' => $fetchAllVIP, 'fetchAllTables' => $fetchAllTables]);
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

        $validatedData = $request->validate([
            "vip1" => ["required"],
            "prefix_vip1" => ["required"],
            "number_vip1" => ["required", "integer"],
        ]);

        if($validatedData){


            //$fetchAllTable = count(Table::orderBy('numero', 'asc')->get());
            $fetchActivite = Activite::where('name', '=','RESTAURANT')->first();


            if($request['number_vip2'] && $request['prefix_vip2']){
                $validatedData['vip2'] = (int)$request['vip2'];
                $validatedData['number_vip2'] = (int)$request['number_vip2'];
                $validatedData['prefix_vip2'] = $request['prefix_vip2'];
            }

            if($request['number_vip3'] && $request['prefix_vip3']){
                $validatedData['vip3'] = (int)$request['vip3'];
                $validatedData['number_vip3'] = (int)$request['number_vip3'];
                $validatedData['prefix_vip3'] = $request['prefix_vip3'];
            }

            $validatedData['number_vip1'] = (int)$request['number_vip1'];
            $validatedData['vip1'] = (int)$request['vip1'];

            $countTablesVIP1 = count(Table::where('numero', 'LIKE', $validatedData['prefix_vip1'].'%')->where('name', '=','VIP1')->get());
            $countTablesVIP2 = count(Table::where('numero', 'LIKE', $validatedData['prefix_vip2'].'%')->where('name', '=','VIP2')->get());
            $countTablesVIP3 = count(Table::where('numero', 'LIKE', $validatedData['prefix_vip3'].'%')->where('name', '=','VIP3')->get());

            for ($i=1; $i <= $validatedData['number_vip1']; $i++) {
                $newTable = new Table();
                $newTable->numero = $validatedData['prefix_vip1'].($countTablesVIP1+$i);
                $newTable->name = 'VIP1';
                $newTable->activite_id = $fetchActivite->id;
                $newTable->vip_id = $validatedData['vip1'];
                $newTable->save();
            }

            for ($i=1; $i <= $validatedData['number_vip2']; $i++) {
                $newTable = new Table();
                $newTable->numero = $validatedData['prefix_vip2'].($countTablesVIP2+$i);
                $newTable->name = 'VIP2';
                $newTable->activite_id = $fetchActivite->id;
                $newTable->vip_id = $validatedData['vip2'];
                $newTable->save();
            }

            for ($i=1; $i <= $validatedData['number_vip3']; $i++) {
                $newTable = new Table();
                $newTable->numero = $validatedData['prefix_vip3'].($countTablesVIP3+$i);
                $newTable->name = 'VIP3';
                $newTable->activite_id = $fetchActivite->id;
                $newTable->vip_id = $validatedData['vip3'];
                $newTable->save();
            }

            return redirect()->route("table")->with("success", "Tables créées avec succès !");
        }else{
            return redirect()->back()->withInput()->withErrors($validatedData);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $table = Table::find($id);

        if($table){
            $vip = VIP::all();
            return view('restauration.detail_table', ['table' => $table, 'vip' => $vip]);
        }else{
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => 'Table '.Messages::NOT_FOUND
            ]);
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Table $table)
    {
        $request = $request->all();
        if($table->etat == "ACTIF"){
            $table->etat = "INACTIF";
        }else{
            $table->etat = "ACTIF";
        }

        $table->save();

        session()->flash('notification', [
            'type' => Messages::TYPE_SUCCES,
            'title' => 'Succès',
            'message' => 'Table '.Messages::SUCCESS_UPDATE
        ]);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $table = Table::find($id);
        if ($table) {
            $vip = VIP::find($request->vip_id);
            // Vérifiez si les informations sont identiques
            if ($table->name === $vip->name && $table->numero === $request->numero && (int)$table->vip_id === (int)$request->vip_id && (int)$table->activite_id === 1) {
                // Les informations sont identiques, pas besoin de mise à jour
                session()->flash('notification', [
                    'type' => Messages::TYPE_ERROR,
                    'title' => 'Érreur',
                    'message' => Messages::NOT_CHANGE
                ]);
                return redirect()->back();
            }

            // Procédez à la mise à jour
            $table->name = $vip->name;
            $table->numero = $request->numero;
            $table->vip_id = $request->vip_id;
            $table->activite_id = 1;
            $table->save();

            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'title' => 'Succès',
                'message' => Messages::SUCCESS_UPDATE
            ]);
            return redirect()->back();
        } else {
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => Messages::ERROR_UPDATE
            ]);
            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        //
    }
}
