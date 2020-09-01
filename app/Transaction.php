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
			'balance_type',
			'credit_debit',
			'amount',
			'old_balance',
			'new_balance',
			'transactions_details',
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


		public function userAccount()
		{
			return $this->belongsTo(\App\UserAccount::class);
		}
	}
