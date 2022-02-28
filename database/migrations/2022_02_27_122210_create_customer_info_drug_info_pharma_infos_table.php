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
        Schema::create('customer_info_drug_info_pharma_infos', function (Blueprint $table) {
            $table->id('cudrph_id');
            $table->unsignedBigInteger('customerid');
            $table->unsignedBigInteger('drugid');
            $table->unsignedBigInteger('pharmaid');
            $table->timestamps();
            $table->foreign('customerid')->references('customerid')->on('customer_infos')->onDelete('cascade');
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
        Schema::dropIfExists('customer_info_drug_info_pharma_infos');
    }
};
