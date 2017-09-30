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

$factory->define(App\Models\Stock::class, function (Faker $faker) {
    return [
        'name'      => $faker->company .' '. $faker->companySuffix,
        'ticker'    => $faker->company,
        'number'    => $faker->numberBetween($min = 100, $max = 200),
        'website'   => $faker->domainName,
    ];
});
