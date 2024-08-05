<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'GESTIONNAIRE',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'MANAGER',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'MAGAZINIER',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],


            [
                'id' => 4,
                'name' => 'CAISSIER',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'SUPERVISEUR',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'DIRECTEUR',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'HOTESSE',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'SERVEUR',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Ajoutez d'autres articles ici si nécessaire
        ]);
    }
}
