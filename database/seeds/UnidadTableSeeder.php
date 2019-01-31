<?php

use Illuminate\Database\Seeder;
use App\Unidad;

class UnidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Unidad::class, 4)->create();
    }
}
