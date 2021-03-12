<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->insert([ 
            'nombre' => 'No Definido', 
            'pais' => 'No Definido']);
        DB::table('directors')->insert([ 
            'nombre' => 'Brian De Palma', 
            'pais' => 'Estados Unidos']);
        DB::table('directors')->insert([ 
            'nombre' => 'John Woo', 
            'pais' => 'China']);
    }
}
