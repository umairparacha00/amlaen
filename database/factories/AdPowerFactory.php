<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AdPower;
use Faker\Generator as Faker;

$factory->define(AdPower::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'name' => $faker->name,
        'expires_at' => $faker->dateTime(),
        'amount' => $faker->numberBetween(-10000, 10000),
    ];
});
