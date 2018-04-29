<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->streetAddress,
        'items_ordered' => $faker->word,
        'item_total_price' => $faker->randomDigitNotNull,
        'tax_amount' => $faker->randomDigitNotNull,
        'ship_amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'ship_date' => $faker->dateTimeBetween('-2 years', 'now'),
    ];
});
