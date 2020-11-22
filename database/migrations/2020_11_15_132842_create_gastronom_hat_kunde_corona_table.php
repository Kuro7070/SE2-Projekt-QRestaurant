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
            $table->primary(['corona_id', 'gastro_id']);
            $table->unsignedBigInteger('corona_id');
            $table->unsignedBigInteger('gastro_id');
            $table-> foreign('corona_id')-> references('id')->on('kunde_corona');
            $table-> foreign('gastro_id')-> references('id')->on('gastronom');

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
