<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ActivitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activites')->insert([
            [
                'id' => 1,
                'name' => 'RESTAURANT',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => 2,
                'name' => 'MAQUIS ET BAR',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => 3,
                'name' => 'ÉVÉNEMENT',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Ajoutez d'autres articles ici si nécessaire
        ]);
    }
}
