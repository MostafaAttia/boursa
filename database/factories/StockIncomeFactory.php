<?php

use Faker\Generator as Faker;

$factory->define(App\Models\StockIncome::class, function (Faker $faker) {

    return [
        'year'                                                      => $faker->unique()->dateTimeBetween($startDate = "-10 years", $endDate = "now")->format('Y'),
        'interest_income-bank'                                      => $faker->randomFloat($nbMaxDecimals = 3, $min = 500, $max = 900),
        'total_interest_expense'                                    => $faker->randomFloat($nbMaxDecimals = 3, $min = 100, $max = 250),
        'net_interest_income'                                       => $faker->randomFloat($nbMaxDecimals = 3, $min = 350, $max = 550),
        'loan_loss_provision'                                       => $faker->randomFloat($nbMaxDecimals = 3, $min = 120, $max = 150),
        'net_interest_income_after_loan_loss_provision'             => $faker->randomFloat($nbMaxDecimals = 3, $min = 270, $max = 450),
        'non_interest_income'                                       => $faker->randomFloat($nbMaxDecimals = 3, $min = 190, $max = 260),
        'non_interest_expense'                                      => $faker->randomFloat($nbMaxDecimals = 3, $min = -350, $max = -200),
        'net_income_before_taxes'                                   => $faker->randomFloat($nbMaxDecimals = 3, $min = 260, $max = 350),
        'provision_for_income_taxes'                                => $faker->randomFloat($nbMaxDecimals = 3, $min = 18, $max = 35),
        'net_income_after_taxes'                                    => $faker->randomFloat($nbMaxDecimals = 3, $min = 250, $max = 320),
        'minority_interest'                                         => $faker->randomFloat($nbMaxDecimals = 3, $min = -17, $max = -3),
        'net_income_before_extraordinary_items'                     => $faker->randomFloat($nbMaxDecimals = 3, $min = 230, $max = 310),
        'net_income'                                                => $faker->randomFloat($nbMaxDecimals = 3, $min = 230, $max = 310),
        'total_adjustments_to_net_income'                           => $faker->randomFloat($nbMaxDecimals = 3, $min = -17, $max = -3),
        'income_available_to_common_excluding_extraordinary_items'  => $faker->randomFloat($nbMaxDecimals = 3, $min = 230, $max = 310),
        'income_available_to_common_including_extraordinary_items'  => $faker->randomFloat($nbMaxDecimals = 3, $min = 230, $max = 310),
        'diluted_net_income'                                        => $faker->randomFloat($nbMaxDecimals = 3, $min = 230, $max = 310),
        'diluted_weighted_average_shares'                           => $faker->randomFloat($nbMaxDecimals = 3, $min = 5000, $max = 5800),
        'diluted_earnings_per_share'                                => $faker->randomFloat($nbMaxDecimals = 3, $min = 0.040, $max = 0.058),
        'dividends_per_share'                                       => $faker->randomFloat($nbMaxDecimals = 3, $min = 0.020, $max = 0.030),
        'diluted_normalized_earnings_per_share'                     => $faker->randomFloat($nbMaxDecimals = 3, $min = 0.040, $max = 0.060)
    ];

});
