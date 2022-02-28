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
        Schema::create('pharma_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pharmaid');
            $table->string('username')->unique();
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->string('pharma_last_login')->nullable();
            $table->string('pharma_last_logout')->nullable();
            $table->timestamps();
            $table->foreign('pharmaid')->references('pharmaid')->on('pharma_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharma_accounts');
    }
};
