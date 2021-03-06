<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdPowerBalance extends Model
{
	protected $fillable = [
		'user_id',
	];
	public function user()
	{
		$this->belongsTo(User::class);
	}
}
