<?php

	namespace App\Listeners;

	use App\UserMembership;
	use App\Events\AdPackPurchased;

	class Commission
	{
		/**
		 * Create the event listener.
		 *
		 * @return void
		 */
		public function __construct()
		{
			//
		}

		/**
		 * Handle the event.
		 *
		 * @param AdPackPurchased $event
		 * @return void
		 */
		public function handle(AdPackPurchased $event)
		{
			$sponsor_account_id = $event->account_id;
			$directCommissionPercentage = $event->rate->where('name', 'direct_commission')->first();
			$percentage = $directCommissionPercentage->rate;
			// Get The User
			$sponsor = $event->user->where('account_id', $sponsor_account_id)->first();
			$this->commissionProcesses($event, $sponsor, $percentage, 1);

			// Action for Indirect Commission
			$inDirectSponsor = $event->user->where('account_id', $sponsor->sponsor)->first();
			$userMembership = UserMembership::where('user_id', $inDirectSponsor->id)->first();
			$userMembershipId = $userMembership->membership_id;
			$inDirectCommissionPercentage = $event->rate->where('name', 'indirect_commission')->first();

			$percentage = $inDirectCommissionPercentage->rate;
			$x = 2;
			while ($x <= 20) {

				if ($x > 1 && $x <= 5 ) {
					if ($inDirectSponsor->sponsor == 1000000000000) {
						break;
					} else {
						if ($userMembershipId > 1) {
							$this->commissionProcesses($event, $inDirectSponsor, $percentage, $x);
						}
						$inDirectSponsor = $event->user->where('account_id', $inDirectSponsor->sponsor)->first();
						$userMembership = UserMembership::where('user_id', $inDirectSponsor->id)->first();
						$userMembershipId = $userMembership->membership_id;
					}
				}
				if ($x > 5 && $x <= 10 ) {
					if ($inDirectSponsor->sponsor == 1000000000000) {
						break;
					} else {
						if ($userMembershipId > 2) {
							$this->commissionProcesses($event, $inDirectSponsor, $percentage, $x);
						}
						$inDirectSponsor = $event->user->where('account_id', $inDirectSponsor->sponsor)->first();
						$userMembership = UserMembership::where('user_id', $inDirectSponsor->id)->first();
						$userMembershipId = $userMembership->membership_id;
					}
				}
				if ($x > 10 && $x <= 15 ) {
					if ($inDirectSponsor->sponsor == 1000000000000) {
						break;
					} else {
						if ($userMembershipId > 3) {
							$this->commissionProcesses($event, $inDirectSponsor, $percentage, $x);
						}
						$inDirectSponsor = $event->user->where('account_id', $inDirectSponsor->sponsor)->first();
						$userMembership = UserMembership::where('user_id', $inDirectSponsor->id)->first();
						$userMembershipId = $userMembership->membership_id;
					}
				}
				if ($x > 15 && $x <= 20 ) {
					if ($inDirectSponsor->sponsor == 1000000000000) {
						break;
					} else {
						if ($userMembershipId > 4) {
							$this->commissionProcesses($event, $inDirectSponsor, $percentage, $x);
						}
						$inDirectSponsor = $event->user->where('account_id', $inDirectSponsor->sponsor)->first();
						$userMembership = UserMembership::where('user_id', $inDirectSponsor->id)->first();
						$userMembershipId = $userMembership->membership_id;
					}
				}
				$x++;
			}
		}

		protected function commissionProcesses(AdPackPurchased $event, $sponsor, $percentage, $level)
		{
			$userBalance = $event->balance->where('user_id', $sponsor->id)->first();

			// Commission Calculation
			$totalDirectCommission = $event->totalAmount * $percentage / 100;

			$newGroupBalance = $userBalance->group_balance + $totalDirectCommission;
			// Transaction for Direct Commission

			$event->transaction->createTransaction($sponsor->id,
				'Credit',
				$totalDirectCommission,
				$newGroupBalance,
				$userBalance->group_balance,
				'Commission received on purchase of AdPack by ' . current_user()->username . ' from level: ' . $level,
				'group_balance'
			);

			// Update the Group Balance
			$event->balance->updateGroupBalance($sponsor->id, $newGroupBalance);
		}
	}
