<?php

namespace App\Http\Controllers\Auth;

use App\AdPowerBalance;
use App\GroupBalance;
use App\Http\Controllers\Controller;
use App\MainBalance;
use App\MallBalance;
use App\Point;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserMembership;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
		return Validator::make($data, [
			'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
			'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9\s]+$/'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'sponsor' => ['required', 'numeric', 'regex:/^[a-zA-Z0-9\s]+$/'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		$user = User::create([
			'account_id' => mt_rand(100000000000001, 9999999999999999),
			'username' => $data['username'],
			'name' => $data['name'],
			'email' => $data['email'],
			'sponsor' => $data['sponsor'],
			'password' => Hash::make($data['password']),
		]);
		Point::create([
			'user_id' => $user->id,
			'silver_pack' => 0,
		]);
		AdPowerBalance::create([
			'user_id' => $user->id,
			'gold_pack' => 0
		]);
		MainBalance::create([
			'user_id' => $user->id,
			'main_points' => 0
		]);
		GroupBalance::create([
			'user_id' => $user->id,
			'group_points' => 0
		]);
		MallBalance::create([
			'user_id' => $user->id,
			'mall_points' => 0
		]);
		UserMembership::create([
			'user_id' => $user->id,
			'membership_id' => 1,
		]);
		return $user;
    }
}
