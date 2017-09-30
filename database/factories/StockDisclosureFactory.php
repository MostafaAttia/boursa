<?php

use Faker\Generator as Faker;

$factory->define(App\Models\StockDisclosure::class, function (Faker $faker) {

    return [
        'name'                  => $faker->name,
        'relation'              => $faker->randomElement($array = array ('Self','Wife','Children')),
        'company'               => $faker->company,
        'title'                 => $faker->randomElement($array = array ('مدير تنفيذي','مساعد مدير عام','مساعد مدير','مدير أول','رئيس مجلس الإدارة','عضو مجلس الإدارة','عضو مجلس الإدارة')),
        'security_buy_sell'     => $faker->numberBetween($min = 100, $max = 200),
        'security_name'         => $faker->company,
        'relation_with_company' => $faker->randomElement($array = array ('Issuer','Mother Company','Issuer','Issuer','Issuer','Issuer','Issuer','Issuer')),
        'trans_type'            => $faker->randomElement($array = array ('Sell','Rights','Transfer')),
        'quantity'              => $faker->numberBetween($min = 250, $max = 40000),
        'date'                  => $faker->date($format = 'Y-m-d', $max = 'now')

    ];

});
