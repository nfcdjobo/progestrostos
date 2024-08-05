<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RepasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repas')->insert([
            [
                'id' => 1,
                'name' => 'PETIT DEJEUNER AFRICAIN',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'PETIT DEJEUNER OCCIDENTAL',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'DEJEUNER',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'GOUTER',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'DINER',
                'etat' => 'ACTIF',
                'status' => 'ACTIF',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
