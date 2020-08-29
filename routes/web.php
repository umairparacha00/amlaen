<?php

	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Route;

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/
	Route::middleware('guest')->group(function (){
		Route::get('/', function () {
			return view('index');
		});
		Route::get('/about', function () {
			return view('about');
		});
		Route::get('/contact', function () {
			return view('contact');
		});
		Route::get('/terms_and_conditions', function () {
			return view('terms&conditions');
		});
	});
	Auth::routes();

	Route::middleware('auth')->group(function () {

		Route::get('/dashboard', 'HomeController@index')->name('home');
		Route::get('/profile', 'ProfileController@show')->name('profile');
		Route::livewire('/profile/edit', 'profile.edit')->section('content');
		Route::get('/pin/create', 'PinsController@create');
		Route::get('/transactions', 'TransactionsController@index')->name('transactions');
		Route::get('/send-balance', 'BalanceController@create')->name('transactions');
		Route::get('/transfer-balance', 'BalanceController@transfer_create')->name('transactions');
		Route::get('/withdraw-balance', 'TransactionsController@withdrawBalanceShow')->name('transactions');
		Route::get('/payment-gateways', 'TransactionsController@paymentGatewaysShow')->name('transactions');
		Route::get('/purchase/ad-pack', 'PurchaseController@ad_create')->name('purchase.adPackShow');
		Route::get('/purchase/membership', 'PurchaseController@membership_create');
		Route::post('/purchase/membership', 'PurchaseController@adPackStore')->name('purchase.adPack');
		Route::get('/network/direct-referrals', 'NetworkController@directReferralsIndex');
		Route::get('/network/referral-link', 'NetworkController@referralLinkShow');
		Route::patch('/profile/{user}', 'ProfileController@update');
		Route::patch('/profile/{user}/files', 'ProfileController@filesupdate');
//		Route::livewire('/pin/create', 'pins.create');
//		Route::livewire('/network/referral-link', 'network.referral-link');
//		Route::livewire('/network/direct-referrals', 'network.direct-referrals');
//		Route::livewire('setting/privacy', 'setting.privacy');
//		Route::livewire('settings', 'setting.settings');
//		Route::livewire('setting/change-password', 'setting.change-password');
//		Route::livewire('setting/change-pin', 'setting.change-pin');
		Route::any('{query}',
			function () {
				return redirect('/dashboard');
			})
			->where('query', '.*');
	});
