<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMembership extends Model
{
    protected $fillable = ['user_id', 'membership_id'];

	public function upgradeMembership($user_id, $membershipId)
	{
		UserMembership::where('user_id', $user_id)->update([
			'membership_id' => $membershipId
		]);
	}
}
