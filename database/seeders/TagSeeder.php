<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['nom' => 'PHP'],
            ['nom' => 'JAVA'],
            ['nom' => 'C++'],
            ['nom' => 'C#'],
            ['nom' => 'LARAVEL'],

        ];
        DB::table('tags')->insert($tags);
    }
}
