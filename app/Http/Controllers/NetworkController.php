<?php

	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Http\Request;

	class NetworkController extends Controller
	{
		public function directReferralsIndex(User $user)
		{
			$directReferrals = $user->directReferrals();
			return view('network.direct-referrals', compact('directReferrals'));
		}
		public function referralLinkShow(User $user)
		{
			return view('network.referral-link', compact('user'));
		}
		public function treeShow(User $user)
		{
			return view('network.tree', compact('user'));
		}
	}
