<?php

use Faker\Generator as Faker;

$factory->define(App\Departamento::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'sub_gerencia_id' => App\Subgerencia::all()->random()->id,
    ];
});
