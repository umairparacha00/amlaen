<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('account_id')->unique();
			$table->string('username')->unique();
			$table->string('name');
			$table->string('email')->unique();
			$table->string('pl_pin');
			$table->boolean('status')->default(false);
			$table->string('password');
			$table->string('cnic')->unique()->nullable();
			$table->date('date_of_birth')->nullable();
			$table->bigInteger('phone')->nullable();
			$table->bigInteger('postalcode')->nullable();
			$table->string('country')->nullable();
			$table->string('state')->nullable();
			$table->string('city')->nullable();
			$table->string('address')->nullable();
			$table->string('gender')->nullable();
			$table->string('user_file')->nullable();
			$table->string('cnic_file')->nullable();
			$table->string('bank_file')->nullable();
			$table->string('cnic_file_status')->nullable();
			$table->string('bank_file_status')->nullable();
			$table->rememberToken();
			$table->timestamp('email_verified_at')->nullable();
			$table->timestamp('last_logged_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
