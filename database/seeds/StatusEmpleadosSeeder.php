<?php

use Illuminate\Database\Seeder;
use App\StatusEmpleado;

class StatusEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusEmpleado::create([
            'nombre' => 'Período de Prueba'
        ]);
        
        
        StatusEmpleado::create([
            'nombre' => 'Contratado'
        ]);


        StatusEmpleado::create([
            'nombre' => 'Fijo'
        ]);


        StatusEmpleado::create([
            'nombre' => 'Despedido'
        ]);

        StatusEmpleado::create([
            'nombre' => 'No Renovado'
        ]);

        StatusEmpleado::create([
            'nombre' => 'Renuncio'
        ]);

        StatusEmpleado::create([
            'nombre' => 'Inactivo'
        ]);
    }
}
