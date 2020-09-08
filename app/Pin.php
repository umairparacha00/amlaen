<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    /**
     * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id',
		'pin',
		'pin_value',
		'pin_remaining_value',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'id' => 'integer',
		'user_id' => 'integer',
	];

	public function createPin(array $data, $pin, $user = null)
	{
		Pin::create([
			'user_id' => $user ? $user->id : current_user()->id,
			'pin' => $pin,
			'pin_value' => $data['amount'],
			'pin_remaining_value' => $data['amount'],
		]);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
