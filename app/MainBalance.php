<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainBalance extends Model
{
	protected $fillable = [
		'user_id',
	];
	public function user()
	{
		$this->belongsTo(User::class);
	}
}
