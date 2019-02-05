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

        $rrhh = Role::where('slug', 'rrhh')->first();
        $evaluador = Role::where('slug', 'evaluador')->first();


        User::create([
            'name' => 'Recursos Humanos',
            'email' => 'rrhh@segurosaltamira.com',
            'password' => bcrypt('qwerty'),
            'unidad_id' => '2',

            
        ])->roles()->attach($rrhh);
        
        User::create([
            'name' => 'Evaluador',
            'email' => 'evaluador@segurosaltamira.com',
            'password' => bcrypt('qwerty'),
            'unidad_id' => '2',
        ])->roles()->attach($evaluador);
        



        ;
    }
}
