<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Balance extends Model
	{
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
			'user_id',
			'main_balance',
			'group_balance',
			'mall_balance',
			'ad_power_balance',
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

		public function currentMainBalance()
		{
			$freshBalance = current_user()->balance->fresh();
			return $freshBalance->main_balance;
		}

		public function currentGroupBalance()
		{
			$freshBalance = current_user()->balance->fresh();
			return $freshBalance->group_balance;
		}

		public function currentMallBalance()
		{
			$freshBalance = current_user()->balance->fresh();
			return $freshBalance->mall_balance;
		}

		public function updateGroupBalance($id, $amount)
		{
			Balance::where('user_id', $id)->update([
				'balance_balance' => $amount
			]);
		}

		public function updateMainBalance($id, $amount)
		{
			Balance::where('user_id', $id)->update([
				'main_balance' => $amount
			]);
		}

		public function user()
		{
			$this->belongsTo(User::class);
		}


	}
