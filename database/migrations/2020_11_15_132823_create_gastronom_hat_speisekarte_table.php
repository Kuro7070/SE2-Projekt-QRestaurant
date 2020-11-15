<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastronomHatSpeisekarteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastronom_hat_speisekarte', function (Blueprint $table) {
            $table->primary(['speise_id', 'gastro_id']);
            $table-> foreign('speise_id')-> references('id')->on('speisekarte');
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
        Schema::dropIfExists('gastronom_hat_speisekarte');
    }
}
