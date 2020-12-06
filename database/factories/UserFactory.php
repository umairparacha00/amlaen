<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
	use Illuminate\Support\Str;
	use Faker\Generator as Faker;
	/*
	|----------------------------------------------------------------------u----
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
		'status' => 1,
		'pl_pin' => 123456,
		'postalcode' => 321405,
		'city' => $faker->city,
		'phone' => 304 . $faker->unique()->randomNumber(7),
		'state' =>$faker->state,
		'country' =>$faker->country,
		'address' => $faker->address,
		'gender' => 'male',
		'last_logged_at' => now(),
		'cnic' => 33100 . '-' . $faker->unique()->randomNumber(7) .'-'. 7,
		'date_of_birth' => $faker->numberBetween(1982, 2025) . '-' . $faker->numberBetween(10, 12) .  '-' .  $faker->numberBetween(10, 28),
        'password' => '$2y$10$MzVmlnfp9BWBKmHreNrX6ObdD6CY11sFnTnkTiFyAFxwSuNYhTrE.', // password
        'remember_token' => Str::random(60),
    ];
});
