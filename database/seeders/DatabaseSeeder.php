<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the database
        DB::table('teble1')->insert([
            "slug" => 'article1',
            "id" => 0,
            "name" => 'article name',
        ]);
    }
}
