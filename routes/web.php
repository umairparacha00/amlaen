<?php

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

	Auth::routes(['verify' => true]);
	Route::middleware('guest')->group(function (){
		Route::get('/', 'IndexController@index');
		Route::get('/about', 'IndexController@index_us');
		Route::get('/contact', 'IndexController@contact_us');
		Route::get('/terms_and_conditions', 'IndexController@terms_and_conditions');
	});
	Route::middleware(['auth', 'verified'])->group(function (){
		Route::get('/dashboard', 'HomeController@index')->name('home');
		Route::get('/profile', 'ProfileController@show')->name('profile');
		Route::get('/profile/edit', 'ProfileController@create')->name('profile.edit');
		Route::get('/profile/documents', 'ProfileController@DocumentsShow')->name('profile.documents');
		Route::get('/pin/create', 'PinsController@create');
		Route::get('/transactions', 'TransactionsController@index')->name('transactions');
		Route::get('/send-balance', 'BalanceController@create')->name('transactions');
		Route::get('/transfer-balance', 'BalanceController@transfer_create')->name('transactions');
		Route::get('/withdraw-balance', 'TransactionsController@withdrawBalanceShow')->name('transactions');
		Route::get('/payment-gateways', 'TransactionsController@paymentGatewaysShow')->name('transactions');
		Route::get('/purchase/ad-pack', 'PurchaseController@ad_create');
		Route::get('/purchase/membership', 'PurchaseController@membership_create');
		Route::get('/network/direct-referrals', 'NetworkController@directReferralsIndex');
		Route::get('/network/referral-link', 'NetworkController@referralLinkShow');
		Route::get('summary', function () {
			return view('summary');
		});
		Route::patch('/profile/{user}', 'ProfileController@update');
		Route::patch('/profile/{user}/files', 'ProfileController@filesupdate');
		Route::any('{query}',
			function () {
				return redirect('/dashboard');
			})
			->where('query', '.*');
	});
	Route::get('/404', function () {
		return view('404');
	});