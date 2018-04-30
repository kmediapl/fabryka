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
            $table->integer('nip')->nullable();
            $table->string('miejscowosc')->nullable();
            $table->string('kod_pocztowy')->nullable();
            $table->string('wojewodztwo')->nullable();
            $table->string('poczta')->nullable();
            $table->string('ulica')->nullable();   
            $table->string('nr_domu')->nullable();
            $table->string('nr_lokalu')->nullable();
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
