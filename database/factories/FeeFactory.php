<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fee;
use Faker\Generator as Faker;

$factory->define(Fee::class, function (Faker $faker) {
    return [
        'fee_name' => 'pin_creation',
		'fee' => 0.26
    ];
});
