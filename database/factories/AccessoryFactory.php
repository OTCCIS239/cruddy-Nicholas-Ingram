<?php

use Faker\Generator as Faker;

$factory->define(App\Accessory::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->word,
        'price' => $faker->randomDigitNotNull,
        'console_for' => $faker->word,
        'condition' => $faker->word,
    ];
});
