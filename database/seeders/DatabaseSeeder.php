<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     \App\Models\Ville::factory(10)->create();
     \App\Models\Nationalité::factory(10)->create();
     \App\Models\Groupe::factory(10)->create();

    }
}