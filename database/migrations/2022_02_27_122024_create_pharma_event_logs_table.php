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
        Schema::create('pharma_event_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pharmaid');
            $table->string('pharma_event_action');
            $table->string('pharma_event_detail');
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
        Schema::dropIfExists('pharma_event_logs');
    }
};
