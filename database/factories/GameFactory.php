<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->word,
        'price' => $faker->randomDigitNotNull,
        'console_for' => $faker->word,
        'condition' => $faker->word,
    ];
});
