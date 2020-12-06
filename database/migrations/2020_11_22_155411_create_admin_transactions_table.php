<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_transactions', function (Blueprint $table) {
			$table->id();
			$table->foreignId('admin_id');
			$table->decimal('points', 25, 10);
			$table->longText('transactions_details');
			$table->timestamp('trans_date_time');
			$table->timestamps();

			$table->foreign('admin_id')
				->references('id')
				->on('admins')
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
        Schema::dropIfExists('admin_transactions');
    }
}
