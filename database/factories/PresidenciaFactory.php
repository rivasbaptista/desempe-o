<?php

use Faker\Generator as Faker;

$factory->define(App\Presidencia::class, function (Faker $faker) {
    return [
        
        'name' => $faker->name,

       
    ];
});
