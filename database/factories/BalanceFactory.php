<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Balance;
use Faker\Generator as Faker;

$factory->define(Balance::class, function (Faker $faker) {
    return [
        'user_account_id' => factory(\App\User::class),
        'main_balance' => $faker->numberBetween(-10000, 10000),
        'group_balance' => $faker->numberBetween(-10000, 10000),
        'mall_balance' => $faker->numberBetween(-10000, 10000),
        'ad_power_balance' => $faker->numberBetween(-10000, 10000),
    ];
});
