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
        'items_ordered' => 'a|b|c|d',
        'items_ordered_prices' => '2.99|29.99|33.50|4.99',
        'tax_amount' => $faker->randomDigitNotNull,
        'ship_amount' => $faker->randomDigitNotNull,
        'status' => $faker->randomElement($array = array ('waiting for shipment','shipped','out for delivery','delivered')),
        'ship_date' => $faker->dateTimeBetween('-2 years', 'now'),
    ];
});
