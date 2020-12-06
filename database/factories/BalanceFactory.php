<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Balance;
use Faker\Generator as Faker;

$factory->define(Balance::class, function (Faker $faker) {
    return [
        'main_balance' => $faker->numberBetween(1000000, 10000000000),
        'group_balance' => 0,
        'mall_balance' => $faker->numberBetween(1000000, 10000000000),
        'ad_power_balance' => 0
    ];
});
