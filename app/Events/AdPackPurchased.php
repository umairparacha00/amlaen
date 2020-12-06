<?php

	namespace App\Events;

	use App\Balance;
	use App\Rate;
	use App\Transaction;
	use App\User;
	use Illuminate\Foundation\Events\Dispatchable;
	use Illuminate\Queue\SerializesModels;

	class AdPackPurchased
	{
		use Dispatchable, SerializesModels;

		public $account_id;
		public $totalAmount;
		public $user;
		public $rate;
		public $balance;
		public $transaction;

		/**
		 * Create a new event instance.
		 *
		 * @param $account_id
		 * @param $totalAmount
		 * @param User $user
		 * @param Rate $rate
		 * @param Balance $balance
		 * @param Transaction $transaction
		 */
		public function __construct($account_id, $totalAmount, User $user, Rate $rate, Balance $balance, Transaction $transaction)
		{
			$this->account_id = $account_id;
			$this->totalAmount = $totalAmount;
			$this->user = $user;
			$this->rate = $rate;
			$this->balance = $balance;
			$this->transaction = $transaction;
		}

//    /**
//     * Get the channels the event should broadcast on.
//     *
//     * @return \Illuminate\Broadcasting\Channel|array
//     */
//    public function broadcastOn()
//    {
//        return new PrivateChannel('channel-name');
//    }
	}
