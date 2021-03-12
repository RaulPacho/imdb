<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([ 
            'nombre' => 'No Definido', 
            'opinion' => 'No Definido']);
            DB::table('actors')->insert([ 
                'nombre' => 'Tom Hardy', 
                'opinion' => 'De lo mejor actualmente']);
            DB::table('directors')->insert([ 
                'nombre' => 'Cillian Murphy', 
                'opinion' => 'No lo veo en una comedia']);
    }
}
