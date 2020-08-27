<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupBalance extends Model
{
	protected $fillable = [
		'user_id',
	];
	public function user()
	{
		$this->belongsTo(User::class);
	}
}
