<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
    	'account_id' => mt_rand(100000000000000, 9999999999999999),
		'username' => $faker->userName,
		'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
		'sponsor' => 1000000000000,
		'status' => 0,
        'password' => '$2y$10$cP.51kpwRZiMfjwfhpqV/ufxNCN7V57uXnL8cRORmfzwti7N7WaKG', // password
        'remember_token' => Str::random(10),
    ];
});
