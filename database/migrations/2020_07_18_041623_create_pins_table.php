<?php

	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;

	class CreatePinsTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('pins', function (Blueprint $table) {
				$table->id();
				$table->foreignId('user_id');
				$table->string('pin');
				$table->bigInteger('pin_value');
				$table->bigInteger('pin_remaining_value');
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
			Schema::dropIfExists('pins');
		}
	}
