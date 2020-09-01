<?php

	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;

	class CreateAdPowersTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('ad_powers', function (Blueprint $table) {
				$table->id();
				$table->foreignId('user_id');
				$table->string('name');
				$table->timestamp('expires_at');
				$table->integer('amount');
				$table->timestamps();

				$table->foreign('user_id')
					->references('id')
					->on('users')
					->onDelete('cascade');
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists('ad_powers');
		}
	}
