<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AdPack extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id',
		'name',
		'number_of_ad_packs',
		'price',
		'amount',
		'created_at_day',
		'expires_at',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'id' => 'integer',
		'user_id' => 'integer',
		'amount' => 'integer',
		'price' => 'integer',
		'number_of_ad_packs' => 'integer',
	];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = [
		'created_at_day',
		'expires_at',
	];


	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function totalAdPacksBalance($user = null)
	{
		$mainBalance = AdPack::where('user_id', $user ? $user->account_id : current_user()->id)->get();
		return $mainBalance->sum('amount');
	}

	public function totalInvestmentToday()
	{
		$adPackBalance = AdPack::where('created_at_day', Carbon::today())->get();
		return $adPackBalance->sum('amount');
	}
}
