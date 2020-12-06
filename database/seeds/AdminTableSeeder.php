<?php

	use App\Admin;
	use Illuminate\Database\Seeder;

	class AdminTableSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			factory(Admin::class)->create();
		}
	}
