<?php

	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Http\Request;
	use RealRashid\SweetAlert\Facades\Alert;

	class NetworkController extends Controller
	{
		public function directReferralsIndex(User $user)
		{
			return view('network.direct-referrals', compact('user'));
		}
		public function referralLinkShow(User $user)
		{
			return view('network.referral-link', compact('user'));
		}
	}
