<?php

use Illuminate\Database\Seeder;
use App\Vicepresidencia;
class VicePresidenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vicepresidencia::class, 4)->create();
    }
}
