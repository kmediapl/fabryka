<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUslugiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uslugi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa_usługi');
            $table->date('data')->nullable();
            $table->boolean('czy_wykonane')->nullable();
            $table->string('serwisant')->nullable();
            $table->integer('kasa_id'); //doribić kto wykonał
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
        Schema::dropIfExists('uslugi');
    }
}
