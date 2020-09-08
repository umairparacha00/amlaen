<?php

	namespace App;

	use Illuminate\Contracts\Auth\MustVerifyEmail;
	use Illuminate\Foundation\Auth\User as Authenticatable;
	use Illuminate\Notifications\Notifiable;

	class User extends Authenticatable
	{
		use Notifiable;

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
			'account_id', 'username', 'name', 'email', 'sponsor', 'password',
			'cnic', 'phone', 'date_of_birth', 'gender', 'address',
			'postalcode', 'country', 'state', 'city', 'user_file',
			'cnic_file', 'bank_file', 'cnic_file_status', 'bank_file_status',
		];

		/**
		 * The attributes that should be hidden for arrays.
		 *
		 * @var array
		 */
		protected $hidden = [
			'password', 'remember_token',
		];

		/**
		 * The attributes that should be cast to native types.
		 *
		 * @var array
		 */
		protected $casts = [
			'email_verified_at' => 'datetime',
		];
		/**
		 * @var mixed
		 */
		public function balance()
		{
			return $this->hasOne(Balance::class);
		}

		public function updateMainBalance($user = null, $balance)
		{
			$this->balance()->update([
				'user_id' => $user ?? current_user()->id,
				'main_balance' => $balance,
			]);
		}

		public function membershipId()
		{
			return $this->hasOne(UserMembership::class);
		}

		public function membership()
		{
			$membershipId = $this->membershipId->membership_id;
			return Membership::find($membershipId);
		}

		public function pins()
		{
			return $this->hasMany(Pin::class);
		}

		public function transactions()
		{
			return $this->hasMany(Transaction::class);
		}

		public function addTransaction($balanceField, $creditOrDebit, $amount, $oldBalance, $newBalance, $transactionsDetails, $actionedBy = null)
		{
			$this->transactions()->create([
				'user_id' => $actionedBy ?? current_user()->id,
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
