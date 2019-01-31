<?php

use Illuminate\Database\Seeder;
use App\Subgerencia;

class SubgerenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subgerencia::class, 4)->create();
    }
}
