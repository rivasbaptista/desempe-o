<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rrhh = Role::where('titulo', 'rrhh')->first();
        $evaluador_operador = Role::where('titulo', 'evaluador-aprobador')->first();

        User::create([
            'name' => 'José Baptista',
            'email' => 'jbaptista@segurosaltamira.com',
            'password' => bcrypt('qwerty'),
            'unidad_id' => '2',
            
            
        ])->roles()->attach($rrhh);
        
        User::create([
            'name' => 'José Baptista',
            'email' => 'baptista@segurosaltamira.com',
            'password' => bcrypt('qwerty'),
            'unidad_id' => '2',
        ])->roles()->attach($evaluador_operador);
        



        ;
    }
}
