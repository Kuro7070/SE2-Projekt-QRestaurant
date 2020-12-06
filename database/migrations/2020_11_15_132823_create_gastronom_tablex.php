<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastronomTablex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastronom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique()->nullable(false);
            $table->string('passwort')->nullable(false);
            $table->string('nachname')->nullable(false);
            $table->string('vorname')->nullable(false);
            $table->string('adresse')->nullable(false);
            $table->string('telefonnummer')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastronom');
    }
}
