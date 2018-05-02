<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsadresyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usadresy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa_us');
            $table->string('ulica');
            $table->string('miejscowosc');
            $table->string('kodpocztowy');            
            $table->string('nr_domu')->nullable();;
            $table->string('kod')->nullable();;
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
        Schema::dropIfExists('usadresy');
    }
}
