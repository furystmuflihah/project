<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTempat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi', function (Blueprint $table) {
            $table->increment('id_lokasi');
            $table->string('Tempat_kesehatan');
            $table->string('id_fasilitas')->unsigned();
            $table->string('idJenis')->unsigned();
            $table->string('Alamat');
            $table->string('NoTelp');
            $table->string('lokasi');
            $table->timestamps();
            $table->foreign('id_Fasilitas')->references('id')->on('fasilitas');
            $table->foreign('id_Jenis')->references('id')->on('jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasi');
    }
}
