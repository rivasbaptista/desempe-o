<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\Permiso;

class PermisosTableSeeder extends Seeder
{
    
    public function run()
    {
        
        $rrhh_role = Role::where('slug', 'rrhh')->first();

        $evaluador = Role::where('slug', 'evaluador')->first();


        Permiso::create([
            'slug' => 'create-employee',
            'name' => 'Registrar Nuevo Empleado'
                        
        ])->roles()->attach($rrhh_role);

    }
}
