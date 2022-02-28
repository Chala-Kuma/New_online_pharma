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
        Schema::create('drug_info_pharma_infos', function (Blueprint $table) {
            $table->id('drph_id');
            $table->unsignedBigInteger('drugid');
            $table->unsignedBigInteger('pharmaid');
            $table->timestamps();
            $table->foreign('drugid')->references('drugid')->on('drug_infos')->onDelete('cascade');
            $table->foreign('pharmaid')->references('pharmaid')->on('drug_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_info_pharma_infos');
    }
};
