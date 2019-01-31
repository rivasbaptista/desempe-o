<?php

use Faker\Generator as Faker;

$factory->define(App\Empleado::class, function (Faker $faker) {
    return [
        'cedula' => $faker->unique()->randomNumber($nbDigits = 8),
        'email' => $faker->lastName . '@segurosaltamira.com',
        'nombres' => $faker->firstName . ' ' . $faker->lastName,
        'fecha_nacimiento' =>  $faker->date(),
        'fecha_ingreso' =>  $faker->date(),
        'tlf_oficina' => $faker->randomNumber($nbDigits = 9),
        'tlf_movil' => $faker->randomNumber($nbDigits = 9),
        'status_id' => App\StatusEmpleado::all()->random()->id,
        'cargo_id' => App\Cargo::all()->random()->id,
        'unidad_id' => App\Unidad::all()->random()->id,
    ];
});



