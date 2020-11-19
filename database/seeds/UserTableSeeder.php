<?php

	use App\Balance;
	use App\User;
	use App\UserMembership;
	use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user){

        	// User Membership Seeder

        	$membership = factory(UserMembership::class)->make();
        	$user->membershipId()->save($membership);

        	//User Balance Seeder

			$balance = factory(Balance::class)->make();
			$user->Balance()->save($balance);
		});
    }
}
