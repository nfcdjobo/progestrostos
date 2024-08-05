<?php

namespace Database\Seeders;

use App\Models\Activite;
use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departements = ["Restaurant", "Kiosque", "Boisson", "Événement"];

        foreach ($departements as $departement) {
            if($departement === "Restaurant" || $departement === "Kiosque"){
                $activite = Activite::where('id', 1)->first();
            }elseif($departement === "Boisson"){
                $activite = Activite::where('id', 2)->first();
            }else{
                $activite = Activite::where('id', 3)->first();
            }

            if($activite){
                Departement::create([
                    "name" => $departement,
                    "activite_id" => $activite->id  // Fix here: use $activite->id instead of $activite
                ]);
            }

        }
    }
}
