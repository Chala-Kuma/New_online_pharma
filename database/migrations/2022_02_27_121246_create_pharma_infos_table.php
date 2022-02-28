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
        Schema::create('pharma_infos', function (Blueprint $table) {
            $table->id('pharmaid');
            $table->unsignedBigInteger('adminid');
            $table->string('name');
            $table->string('location');
            $table->string('phone');
            $table->timestamps();
            $table->foreign('adminid')->references('adminid')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharma_infos');
    }
};
