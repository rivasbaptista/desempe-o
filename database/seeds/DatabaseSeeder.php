<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(presidenciaTableSeeder::class);
        $this->call(VicePresidenciaTableSeeder::class);
        $this->call(GerenciaTableSeeder::class);
        $this->call(SubgerenciaTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);
        $this->call(UnidadTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermisosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StatusEmpleadosSeeder::class);
        $this->call(CargoTableSeeder::class);
        $this->call(EmpleadosTableSeeder::class);
    }
}
