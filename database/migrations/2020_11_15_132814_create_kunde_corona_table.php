<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKundeCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable(false);
            $table->string('nachname')->nullable(false);
            $table->string('vorname')->nullable(false);
            $table->string('street')->nullable(false);
            $table->string('streetno')->nullable(false);
            $table->string('ort')->nullable(false);
            $table->string('zip')->nullable(false);
            $table->string('telefonnummer')->nullable(false);
            $table->string('ankunft')->nullable(false);
            $table->string('abreise')->nullable(false);
            $table->integer('verbleib')->nullable(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
