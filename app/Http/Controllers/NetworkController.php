<?php

	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Http\Request;

	class NetworkController extends Controller
	{
		public function directReferralsIndex()
		{
			$directReferrals = User::where('sponsor', current_user()->account_id)->get();
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
