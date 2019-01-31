<?php

use Illuminate\Database\Seeder;
use App\Presidencia;
class presidenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Presidencia::class, 4)->create();
    }
}
