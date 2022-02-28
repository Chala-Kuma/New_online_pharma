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
        Schema::create('drug_infos', function (Blueprint $table) {
            $table->bigIncrements('drugid');
            $table->unsignedBigInteger('pharmaid');
            $table->string('drug_name');
            $table->dateTime('expr_date');
            $table->dateTime('manuf_date');
            $table->mediumText('description');
            $table->decimal('price');
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
        Schema::dropIfExists('drug_infos');
    }
};
