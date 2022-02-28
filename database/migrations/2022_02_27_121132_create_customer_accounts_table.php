<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_accounts', function (Blueprint $table) {
            $table->unsignedBigInteger('customerid');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('customer_last_login')->nullable();
            $table->string('customer_last_logout')->nullable();
            $table->timestamps();
            $table->foreign('customerid')->references('customerid')->on('customer_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_accounts');
    }
};
