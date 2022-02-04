<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usagers')->insert([

            [
                'nom' =>'Clain',
                'prenom' =>'Brice',
                'mail' =>'br.clain@gmail.com',
                'nom_util' =>'bclain',
                'mdp' => Hash::make('Furcy002$'),
            ],
            [
                'nom' =>'Grenier',
                'prenom' =>'Jean',
                'mail' =>'jean.grenier@gmail.com',
                'nom_util' =>'jgrenier',
                'mdp' => Hash::make('Furcy003$'),
            ],


        ]);
   }
  
}
