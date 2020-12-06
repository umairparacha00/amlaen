<?php

	namespace App;

	use Illuminate\Support\Facades\DB;
	use Spatie\Permission\Traits\HasRoles;
	use Illuminate\Notifications\Notifiable;
	use Illuminate\Contracts\Auth\MustVerifyEmail;
	use Illuminate\Foundation\Auth\User as Authenticatable;

	class User extends Authenticatable implements MustVerifyEmail
	{
		use Notifiable, HasRoles;

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
			'account_id', 'username', 'name', 'email', 'sponsor', 'password',
			'cnic', 'pl_pin', 'status', 'phone', 'date_of_birth', 'gender', 'address',
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

		public function balance()
		{
			return $this->hasOne(Balance::class);
		}

		public function ad_power_balance()
		{
			return $this->balance->ad_power_balance;
		}

		public function updateMainBalance($user, $balance)
		{
			$this->balance()->where('user_id', $user)->update([
				'main_balance' => $balance
			]);
		}

		public function updateAdPackBalance($user, $balance)
		{
			$this->balance()->where('user_id', $user)->update([
				'ad_power_balance' => $balance
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

		public function addTransaction($balanceField, $creditOrDebit, $amount, $oldBalance, $newBalance, $transactionsDetails, $actionedBy)
		{
			$this->transactions()->create([
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

		public function updateGroupBalance($id, $balance)
		{
			$this->balance()->where('user_id', $id)->update([
				'group_balance' => $balance
			]);
		}

		public function updateMallBalance($id, $balance)
		{
			$this->balance()->where('user_id', $id)->update([
				'mall_balance' => $balance
			]);
		}

		public function usersForAdminDashboard()
		{
			return User::orderBy('id', 'desc')->paginate(5);
		}

		public function adPacks()
		{
			return $this->hasMany(AdPack::class);
		}
	}
