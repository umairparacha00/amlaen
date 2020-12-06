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

	Route::middleware('guest')->group(function () {
		Route::get('/', 'IndexController@index');
		Route::get('/about', 'IndexController@about_us');
		Route::get('/contact', 'IndexController@contact_us');
		Route::get('/terms_and_conditions', 'IndexController@terms_and_conditions');
		Route::get('/admin/login', 'Admin\AdminController@showLoginForm');
	});
	Route::prefix('admin')->namespace('Admin')->group(function () {
		Route::post('/login', 'AdminController@login');
		Route::middleware('admin')->group(function () {
			Route::get('/dashboard', 'AdminController@showDashboard');
			Route::prefix('resources')->group(function () {
				Route::resource('admins', 'AdminController');

				Route::post('/getUserDetailsForDestroying', 'UserController@getUserDetailsForDestroying');
				Route::resource('users', 'UserController');
			});
			Route::get('/settings/change-password', 'SettingsController@showChangePassword');
			Route::get('/settings/change-pin', 'SettingsController@showChangePin');
			Route::get('/transactions', 'TransactionsController@index');
			Route::get('/create-points', 'TransactionsController@showPointsCreationForm');
			Route::post('/change-password', 'SettingsController@changePassword');
			Route::post('/change-pin', 'SettingsController@changePin');
			Route::get('/logout', 'AdminController@logout');
			Route::any('{query}', function () {
				return redirect('/admin/dashboard');
			})->where('query', '.*');
		});
	});
	Auth::routes(['verify' => true]);
	Route::middleware(['auth', 'verified'])->group(function () {
		Route::get('/profile', 'ProfileController@show')->name('profile');
		Route::get('/profile/edit', 'ProfileController@create')->name('profile.edit');
		Route::get('/profile/documents', 'ProfileController@DocumentsShow')->name('profile.documents');
		Route::get('/pin/create', 'PinsController@show')->name('pin.create');
		Route::get('/share-balance', 'SendBalanceController@create')->name('transactions');
		Route::get('/transfer-balance', 'TransferGroupBalanceController@create')->name('transactions');
		Route::get('/dashboard', 'HomeController@index')->name('home');
		Route::get('/transactions', 'TransactionsController@index')->name('transactions');
		Route::get('/withdraw-balance', 'TransactionsController@withdrawBalanceShow')->name('transactions');
		Route::get('/payment-gateways', 'TransactionsController@paymentGatewaysShow')->name('transactions');
		Route::prefix('purchase')->group(function () {
			Route::get('/ad-pack', 'AdPackPurchaseController@create')->name('ad_packs.create');
			Route::get('/membership', 'MembershipPurchaseController@create')->name('membership.create');
			Route::post('/getAdPackValidation', 'AdPackPurchaseController@getAdPackValidation');
			Route::post('/membership', 'MembershipPurchaseController@store')->name('membership.post');
			Route::post('/ad-pack', 'AdPackPurchaseController@store')->name('ad_packs.post');
		});

		Route::prefix('/network')->group(function () {
			Route::get('/direct-referrals', 'NetworkController@directReferralsIndex');
			Route::get('/referral-link', 'NetworkController@referralLinkShow');
			Route::get('/tree', 'NetworkController@treeShow');
			Route::get('/pending', 'DocumentsApprovingController@showPendingDocuments')->name('pending.index');
		});
		Route::prefix('/settings')->group(function () {
			Route::get('/', 'SettingsController@create');
			Route::get('/change-password', 'SettingsController@showChangePassword');
			Route::get('/change-pin', 'SettingsController@showChangePin');
			Route::post('/change-pin', 'SettingsController@changePin');
			Route::post('/change-password', 'SettingsController@changePassword');
		});
//		Route::get('/settings/change-password', 'changePinAndPasswordController@password_create');
//		Route::get('/settings/change-pin', 'changePinAndPasswordController@pin_create');
		Route::post('/getMembershipPrice', 'MembershipPurchaseController@getMembershipPrice');
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


