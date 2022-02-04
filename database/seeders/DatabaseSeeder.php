<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FilmsTableSeeder::class);
        $this->call(ActeursTableSeeder::class);
        $this->call(Acteur_filmTableSeeder::class);
        $this->call(UsagersTableSeeder::class);
    }
}
