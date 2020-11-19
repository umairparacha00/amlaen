<?php

	use App\Fee;
	use Illuminate\Database\Seeder;

class FeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(Fee::class)->create();
		factory(Fee::class)->create(['fee_name' => 'balance_sharing', 'fee' => 2.6]);
		factory(Fee::class)->create(['fee_name' => 'group_balance_sharing', 'fee' => 0.50]);
    }
}
