<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Role::create([
            'titulo' => 'rrhh',
            'descripcion' => 'Recursos Humanos - Administradores del sistema'
        ]);


        Role::create([
            'titulo' => 'empleado',
            'descripcion' => 'Acceso empleado'
        ]);


        Role::create([
            'titulo' => 'evaluador',
            'descripcion' => 'Personal Supervisorio encargado de la evaluación'
        ]);


        Role::create([
            'titulo' => 'evaluador-aprobador',
            'descripcion' => 'Personal encargado de aprobar las evaluaciones'
        ]);
  
    }
}
