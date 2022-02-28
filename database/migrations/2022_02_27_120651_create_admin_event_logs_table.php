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
        Schema::create('admin_event_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adminid');
            $table->string('admin_event_action');
            $table->string('admin_event_detail');
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
        Schema::dropIfExists('admin_event_logs');
    }
};
