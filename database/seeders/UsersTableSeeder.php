<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 
            'name' => 'raul', 
            'email' => 'raul@r.com', 
            'password' => bcrypt('12345678'),
            'rol'=>0]);
        DB::table('users')->insert([ 
            'name' => 'mila', 
            'email' => 'mila@r.com', 
            'password' => bcrypt('12345678'),
            'rol'=>1]);
            //No se le otorga permiso de admin a Mila porque fijo que prueba a quitar 
            //un director que está asignado a una película y es un comportamiento no
            //deseado por el administrador de la base de datos. 
    }
}
