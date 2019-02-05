<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'slug' => 'rrhh',
            'name' => 'Recursos Humanos'
        ]);


        Role::create([
            'slug' => 'evaluador',
            'name' => 'Personal Supervisorio'
        ]);


        


    }
}
