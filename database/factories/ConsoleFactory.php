<?php

use Faker\Generator as Faker;

$factory->define(App\Console::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraph($nbSentences = 8, $variableNbSentences = true),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
        'condition' => $faker->randomElement($array = array ('New','Used - Like New','Used - Very Good','Used - Good','Used - Acceptable')),
    ];
});
