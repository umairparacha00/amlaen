<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AdPack;
	use Carbon\Carbon;
	use Faker\Generator as Faker;


	$factory->define(AdPack::class, function (Faker $faker) {
    return [
        'name' => 'basic',
		'number_of_ad_packs' => 100,
		'price' => 50,
		'amount' => 5000,
		'status' => true,
		'expires_at' => Carbon::now()->addYear(),
    ];
});
