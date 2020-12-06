<?php

	namespace App\Events;

	use Illuminate\Foundation\Events\Dispatchable;
	use Illuminate\Queue\SerializesModels;

	class MembershipPurchased
	{
		use Dispatchable, SerializesModels;

		public $sponsor_account_id;
		public $totalAmount;

		/**
		 * Create a new event instance.
		 *
		 * @param $sponsor_account_id
		 * @param $totalAmount
		 */
		public function __construct($sponsor_account_id, $totalAmount)
		{

			$this->sponsor_account_id = $sponsor_account_id;
			$this->totalAmount = $totalAmount;
		}

	}
