<?php

use Faker\Generator as Faker;

$factory->define(App\Gerencia::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'vice_presidencia_id' => App\Vicepresidencia::all()->random()->id,
    ];
});
