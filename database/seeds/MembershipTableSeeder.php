<?php

	use App\Membership;
	use Illuminate\Database\Seeder;

	class MembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Membership::class)->create();
		factory(Membership::class)->create(['name' => 'Basic', 'price' => 10]);
		factory(Membership::class)->create(['name' => 'Silver', 'price' => 25]);
		factory(Membership::class)->create(['name' => 'Gold', 'price' => 50]);
		factory(Membership::class)->create(['name' => 'Emerald', 'price' => 100]);
		factory(Membership::class)->create(['name' => 'Sapphire', 'price' => 250]);
		factory(Membership::class)->create(['name' => 'Platinum', 'price' => 500]);
		factory(Membership::class)->create(['name' => 'Diamond', 'price' => 1000]);
	}
}
