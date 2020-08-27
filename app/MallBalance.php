<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MallBalance extends Model
{
	protected $fillable = [
		'user_id',
	];
	public function user()
	{
		$this->belongsTo(User::class);
	}
}
