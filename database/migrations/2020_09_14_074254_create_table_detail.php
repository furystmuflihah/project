<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->interger('NoDaftar')->unsigned();
            $table->interger('Jml_Orang');
            $table->interger('IdFasilitas')->unsigned();
            $table->timestamps();
            $table->foreign('NoDaftar')->references('id')->on('pemeriksaan');
            $table->foreign('IdFasilitas')->references('id')->on('fasilitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
