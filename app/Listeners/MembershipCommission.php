<?php

namespace App\Listeners;

use App\Balance;
use App\Events\MembershipPurchased;
use App\Rate;
use App\Transaction;
use App\User;

class MembershipCommission
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
     * @param  MembershipPurchased  $event
     * @return void
     */
    public function handle(MembershipPurchased $event)
    {
		if ($event->sponsor_account_id !== 1000000000000) {
			$sponsor = User::where('account_id', $event->sponsor_account_id)->first();
			$rate = Rate::where('name', 'membership_commission')->first();
			$percentage = $rate->rate;
			$this->commissionProcesses($event, $sponsor->id, $percentage);
        }
    }

	protected function commissionProcesses(MembershipPurchased $event, $sponsor, $percentage)
	{
		$userBalance = Balance::where('user_id', $sponsor)->first();

		// Commission Calculation
		$totalDirectCommission = $event->totalAmount * $percentage / 100;

		$newGroupBalance = $userBalance->group_balance + $totalDirectCommission;
		// Transaction for Direct Commission

		(new Transaction)->createTransaction($sponsor,
			'Credit',
			$totalDirectCommission,
			$newGroupBalance,
			$userBalance->group_balance,
			'Commission received on purchase of Membership by ' . current_user()->username ,
			'group_balance'
		);

		// Update the Group Balance
		(new Balance)->updateGroupBalance($sponsor, $newGroupBalance);
	}
}
