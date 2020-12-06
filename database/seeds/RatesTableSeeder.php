<?php

	use App\Rate;
	use Illuminate\Database\Seeder;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(Rate::class)->create();
		factory(Rate::class)->create(['name' => 'balance_sharing', 'rate' => 2.6]);
		factory(Rate::class)->create(['name' => 'group_balance_sharing', 'rate' => 0.50]);
		factory(Rate::class)->create(['name' => 'group_balance_sharing', 'rate' => 0.50]);
		factory(Rate::class)->create(['name' => 'direct_commission', 'rate' => 5]);
		factory(Rate::class)->create(['name' => 'indirect_commission', 'rate' => 0.5]);
		factory(Rate::class)->create(['name' => 'membership_commission', 'rate' => 20]);
    }
}
