<?php

use Faker\Generator as Faker;

$factory->define(App\Unidad::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'departamento_id' => App\Departamento::all()->random()->id,
    ];
});
