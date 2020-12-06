<?php

	use App\User;
	use App\AdPack;
	use App\Balance;
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

		factory(User::class, 40)->create()->each(function ($user){

        	// User Membership Seeder

        	$membership = factory(UserMembership::class)->make();
        	$user->membershipId()->save($membership);

        	//User Balance Seeder

			$balance = factory(Balance::class)->make();
			$user->balance()->save($balance);

			// User Ad Packs Seeder
//			$adPacks = factory(AdPack::class)->make();
//			$user->adPacks()->save($adPacks);

		});
    }
}
