<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_packs', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id');
			$table->string('name');
			$table->integer('number_of_ad_packs');
			$table->integer('price');
			$table->integer('amount');
			$table->date('created_at_day');
			$table->date('expires_at');
			$table->boolean('status')->default(true);
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
        Schema::dropIfExists('ad_packs');
    }
}
