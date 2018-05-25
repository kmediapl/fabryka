<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKasyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa_kasy');
            $table->string('nr_fabryczny')->nullable();
            $table->string('nr_unikatowy')->nullable();
            $table->string('nazwa_lok')->nullable();
            $table->string('miejscowosc_lok')->nullable();
            $table->string('ulica_lok')->nullable();
            $table->string('numerdomu_lok')->nullable();
            $table->string('numerlokalu_lok')->nullable();
            $table->string('typ_kasy')->nullable();
            $table->string('serwisant')->nullable();
            $table->string('adres_producenta')->nullable();
            $table->string('kod_lok')->nullable();
            $table->string('poczta_lok')->nullable();
            $table->integer('us_id')->nullable();
            $table->boolean('czy_aktywna')->nullable(); //dodać upload plików
            $table->integer('firma_id');
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
        Schema::dropIfExists('kasy');
    }
}
