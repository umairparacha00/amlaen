<?php

	use App\Membership;
	use App\UserMembership;

	if (!function_exists('current_user'))
	{
		function current_user(){
			return auth()->user();
		}
	}

	if (!function_exists('current_user_membership'))
	{
		function current_user_membership($id){

			$UserMembershipId = UserMembership::find($id);
			$membershipId = $UserMembershipId->membership_id;
			$membership = Membership::find($membershipId);
			return $membership->name;
		}
	}