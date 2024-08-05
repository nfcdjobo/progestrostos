<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Models\Banniere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BanniereController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banniere = Banniere::find(1);
        return view('setting.index', ["banniere" => $banniere]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            "raison_sociale" => ["required", "between:2,255"],
            "email" => ["required", "email", "unique:users"],
            "telephone" => ["required", "string", "min:10"]
        ]);

        $banniere = Banniere::find(1);
        if($banniere){
//
        }
    }


    public function saveOrUpdate(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'raison_sociale' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            "telephone" => ["required", "string", "min:10", "max:20"]
        ]);

        // Récupérer la première bannière ou en créer une nouvelle instance
        $banniere = Banniere::first() ?? new Banniere;

        $path_string = 'images/bannieres/';

        // Mettre à jour uniquement si les données ont changé
        $dataToUpdate = [];

        if ($banniere->raison_sociale !== $request->raison_sociale) {
            $dataToUpdate['raison_sociale'] = $request->raison_sociale;
        }
        if ($banniere->email !== $request->email) {
            $dataToUpdate['email'] = $request->email;
        }
        if ($banniere->telephone !== $request->telephone) {
            $dataToUpdate['telephone'] = $request->telephone;
        }

        if ($banniere->slogan !== $request->slogan) {
            $dataToUpdate['slogan'] = $request->slogan;
        }


        $genererChaineAleatoire = function($longueur) {
            $caracteres = '0123456789abcdefghijklmnopqrstuvwxyz';
            $chaineAleatoire = '';
            for ($i = 0; $i < $longueur; $i++) {
                $indexAleatoire = rand(0, strlen($caracteres) - 1);
                $chaineAleatoire .= $caracteres[$indexAleatoire];
            }
            return $chaineAleatoire;
        };

        if ($request->hasFile('logo')) {

            // Extraire le nom du fichier à partir du chemin complet
            $oldFilename = basename($banniere->logo);

            // Chemin complet vers l'ancien fichier
            $filePath = public_path($path_string . $oldFilename);

            // Vérifier si le fichier existe avant de le supprimer
            if (File::exists($filePath)) {
                // Supprimer l'ancien fichier
                File::delete($filePath);
            }

            $filename = preg_replace('/\s+/', '', time() .$genererChaineAleatoire(30). '.' . $request->file('logo')->extension());
            $request->file('logo')->move('images/bannieres', $filename, 'public');
            $fileUrl = asset($path_string . $filename);
            $dataToUpdate['logo']  = $fileUrl;

        }

        if ($request->hasFile('signature')) {

            // Extraire le nom du fichier à partir du chemin complet
            $oldFilename = basename($banniere->signature);

            // Chemin complet vers l'ancien fichier
            $filePath = public_path($path_string . $oldFilename);

            // Vérifier si le fichier existe avant de le supprimer
            if (File::exists($filePath)) {
                // Supprimer l'ancien fichier
                File::delete($filePath);
            }

            $filename = preg_replace('/\s+/', '', time() .$genererChaineAleatoire(30). '.' . $request->file('signature')->extension());
            $request->file('signature')->move('images/bannieres', $filename, 'public');
            $fileUrl = asset($path_string . $filename);
            $dataToUpdate['signature']  = $fileUrl;
        }



        // Si des données ont changé, les mettre à jour
        if (!empty($dataToUpdate)) {
            $banniere->fill($dataToUpdate);
            $banniere->save();
            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'title' => 'Succès',
                'message' => Messages::SUCCES_SAVE,
            ]);
        }else{
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => Messages::ERROR_SAVE,
            ]);
        }
        return redirect()->back()->withInput();
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
    public function show()
    {
        return Banniere::first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banniere $banniere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banniere $banniere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banniere $banniere)
    {
        //
    }
}
