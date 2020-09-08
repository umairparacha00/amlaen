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
	}
