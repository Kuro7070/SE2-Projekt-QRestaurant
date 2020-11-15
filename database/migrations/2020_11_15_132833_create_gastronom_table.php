<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastronomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastronom', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('email')->unique()->nullable();
            $table->string('passwort')->nullable();
            $table->string('nachname')->nullable();
            $table->string('vorname')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telefonnummer')->nullable();
            $table->foreignId('speise_id')->references('id')->on('speisekarte');
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
