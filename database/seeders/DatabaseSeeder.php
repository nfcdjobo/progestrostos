<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(EspacesTableSeeder::class);

        $this->call(ActivitesTableSeeder::class);

        $this->call(RepasTableSeeder::class);

        $this->call(RolesTableSeeder::class);

        $this->call(VIPTableSeeder::class);

        $this->call(DepartementsTableSeeder::class);


    }
}
