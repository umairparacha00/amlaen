<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
	use App\User;
	use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'balance_type' => $faker->word('main_balance'),
        'credit_debit' => $faker->word('main_balance'),
        'amount' => $faker->numberBetween(1, 10000),
        'old_balance' => $faker->numberBetween(1, 10000),
        'new_balance' => $faker->numberBetween(1, 10000),
        'transactions_details' => $faker->text,
    ];
});
