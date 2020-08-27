<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdPowerBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_power_balances', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id');
			$table->bigInteger('gold_pack')->default(0);
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
        Schema::dropIfExists('ad_power_balances');
    }
}
