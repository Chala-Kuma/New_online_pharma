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
        Schema::create('customer_event_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('customerid');
            $table->string('customer_event_action');
            $table->string('customer_event_detail');
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
        Schema::dropIfExists('customer_event_logs');
    }
};
