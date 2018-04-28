<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa_firmy');
            $table->integer('nip');
            $table->string('miejscowosc');
            $table->string('kod_pocztowy');
            $table->string('wojewodztwo');
            $table->string('poczta');
            $table->string('ulica');    
            $table->string('nr_domu');
            $table->string('nr_lokalu');
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
        Schema::dropIfExists('firmy');
    }
}
