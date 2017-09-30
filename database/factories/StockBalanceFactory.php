<?php

use Faker\Generator as Faker;

$factory->define(App\Models\StockBalance::class, function (Faker $faker) {

    return [
        'year'          => $faker->numberBetween($min = 2014, $max = 2017),
        'first_quart'   => $faker->md5 .'.pdf',
        'half_quart'    => $faker->md5 .'.pdf',
        'third_quart'   => $faker->md5 .'.pdf',
        'yearly'        => $faker->md5 .'.pdf'

    ];

});
