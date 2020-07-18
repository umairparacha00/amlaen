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
		public function points()
		{
			return $this->hasOne(Point::class);
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

	}
