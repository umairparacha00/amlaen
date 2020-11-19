<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Balance;
use Faker\Generator as Faker;

$factory->define(Balance::class, function (Faker $faker) {
    return [
        'main_balance' => $faker->numberBetween(100, 10000),
        'group_balance' => $faker->numberBetween(100, 10000),
        'mall_balance' => $faker->numberBetween(100, 10000),
        'ad_power_balance' => 5000
    ];
});
