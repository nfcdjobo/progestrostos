<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EspacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('espaces')->insert([
            [
                'id' => 1,
                'name' => 'Espace Restaurant',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => 2,
                'name' => 'Espace Buvette',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => 3,
                'name' => 'Espace Plein Aire',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Ajoutez d'autres articles ici si nécessaire
        ]);
    }
}
