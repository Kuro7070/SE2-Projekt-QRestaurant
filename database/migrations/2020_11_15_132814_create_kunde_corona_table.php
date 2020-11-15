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
        Schema::create('kunde_corona', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('email')->unique()->nullable();
            $table->string('passwort')->nullable();
            $table->string('nachname')->nullable();
            $table->string('vorname')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telefonnummer')->nullable();
            $table->timestamp('datum')->nullable();
            $table->string('verbleib')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kunde_corona');
    }
}
