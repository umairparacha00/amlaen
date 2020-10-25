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

	Auth::routes();
	Route::middleware('guest')->group(function (){
		Route::get('/', 'IndexController@index');
		Route::get('/about', 'IndexController@about_us');
		Route::get('/contact', 'IndexController@contact_us');
		Route::get('/terms_and_conditions', 'IndexController@terms_and_conditions');
	});
	Route::middleware(['auth', 'verified'])->group(function (){
		Route::get('/dashboard', 'HomeController@index')->name('home');
		Route::get('/profile', 'ProfileController@show')->name('profile');
		Route::get('/profile/edit', 'ProfileController@create')->name('profile.edit');
		Route::get('/profile/documents', 'ProfileController@DocumentsShow')->name('profile.documents');
		Route::get('/pin/create', 'PinsController@show')->name('pin.create');
		Route::get('/transactions', 'TransactionsController@index')->name('transactions');
		Route::get('/share-balance', 'SendBalanceController@create')->name('transactions');
		Route::get('/transfer-balance', 'TransferGroupBalanceController@create')->name('transactions');
		Route::get('/withdraw-balance', 'TransactionsController@withdrawBalanceShow')->name('transactions');
		Route::get('/payment-gateways', 'TransactionsController@paymentGatewaysShow')->name('transactions');
		Route::get('/purchase/ad-pack', 'AdPowerPurchaseController@create');
		Route::get('/purchase/membership', 'MembershipPurchaseController@create');
		Route::get('/network/direct-referrals', 'NetworkController@directReferralsIndex');
		Route::get('/network/referral-link', 'NetworkController@referralLinkShow');
		Route::get('summary', function () {
			return view('summary');
		});
		Route::get('/settings', 'SettingsController@create');
		Route::post('/purchase/membership', 'MembershipPurchaseController@store');
		Route::post('/getMembershipPrice','MembershipPurchaseController@getMembershipPrice');
		Route::post('/getpinfee', 'PinsController@getpinfee');
		Route::post('/create-pin/{user}', 'PinsController@store');
		Route::post('/getShareBalanceFee', 'SendBalanceController@getShareBalanceFee');
		Route::post('/getGroupBalanceFee', 'TransferGroupBalanceController@getGroupBalanceFee');
		Route::post('/send-balance/{user}', 'SendBalanceController@store');
		Route::post('/transfer-group-balance/{user}', 'TransferGroupBalanceController@store');
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


