<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Transaction extends Model
	{
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
			'user_id',
			'balance_field',
			'credit_debit',
			'transaction_amount',
			'old_balance',
			'new_balance',
			'transactions_details',
			'trans_date_time'
		];

		/**
		 * The attributes that should be cast to native types.
		 *
		 * @var array
		 */
		protected $casts = [
			'id' => 'integer',
			'user_account_id' => 'integer',
		];


		public function user()
		{
			return $this->belongsTo(User::class);
		}

		public function createTransaction($actionedBy, $creditOrDebit, $amount, $newBalance, $oldBalance, $transactionsDetails, $balanceField )
		{
			Transaction::create([
				'user_id' => $actionedBy,
				'balance_field' => $balanceField,
				'credit_debit' => $creditOrDebit,
				'transaction_amount' => $amount,
				'old_balance' => $oldBalance,
				'new_balance' => $newBalance,
				'transactions_details' => $transactionsDetails,
				'trans_date_time' => now(),
			]);
		}
	}
