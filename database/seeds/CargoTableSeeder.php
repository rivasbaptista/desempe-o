<?php

use Illuminate\Database\Seeder;
use App\Cargo;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cargo::class, 10 )->create();
    }
}
