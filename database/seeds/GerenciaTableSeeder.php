<?php

use Illuminate\Database\Seeder;
use App\Gerencia;

class GerenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Gerencia::class, 4)->create();
    }
}
