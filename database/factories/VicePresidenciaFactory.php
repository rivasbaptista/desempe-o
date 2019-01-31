<?php

use Faker\Generator as Faker;

$factory->define(App\Vicepresidencia::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'presidencia_id' => App\Presidencia::all()->random()->id,
    ];
});
