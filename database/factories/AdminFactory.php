<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
		'account_id' => 1320321323021,
		'username' => 'paracha',
		'name' => 'Muhammad Umair Raza',
		'email' => 'umairparacha0047@gmail.com',
		'password' => '$2y$10$MzVmlnfp9BWBKmHreNrX6ObdD6CY11sFnTnkTiFyAFxwSuNYhTrE.',
		'cnic' => '33100-9284956-5',
		'pl_pin' => 19822001,
		'phone' => 3068497074,
		'date_of_birth' => '1985-10-25',
		'gender' => 'male',
		'address' => 'Haidri Mohala',
		'postalcode' => 38000,
		'country' => 'Pakistan',
		'state' => 'Punjab',
		'city' => 'Faisalabad',
		'user_file' => '',
		'cnic_file' => '',
		'bank_file' => '',
		'cnic_file_status' => 1,
		'bank_file_status' => 1,
	];
});
