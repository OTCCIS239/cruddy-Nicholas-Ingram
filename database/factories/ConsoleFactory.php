<?php

use Faker\Generator as Faker;

$factory->define(App\Console::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->word,
        'price' => $faker->randomDigitNotNull,
        'condition' => $faker->word,
    ];
});
