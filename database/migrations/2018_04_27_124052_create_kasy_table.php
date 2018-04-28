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
            $table->string('nr_fabryczny');
            $table->string('nr_unikatowy');
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
