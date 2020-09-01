<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pin;
	use App\User;
	use Faker\Generator as Faker;

$factory->define(Pin::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'pin' => $faker->word,
        'pin_value' => $faker->numberBetween(10, 10000),
        'pin_remaining_value' => $faker->numberBetween(2, 10000),
    ];
});
