<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastronomHatKundeCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastronom_hat_kunde_corona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('corona_id')->nullable();
            $table->unsignedBigInteger('gastro_id')->nullable();
            $table-> foreign('corona_id')-> references('id')->on('kunde_corona')->onDelete('cascade');
            $table-> foreign('gastro_id')-> references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastronom_hat_kunde_corona');
    }
}
