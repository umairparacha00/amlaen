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


		public function user()
		{
			$this->belongsTo(User::class);
		}
	}
