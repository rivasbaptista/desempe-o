<?php

use Faker\Generator as Faker;

$factory->define(App\Subgerencia::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'gerencia_id' => App\Gerencia::all()->random()->id,
    ];
});
