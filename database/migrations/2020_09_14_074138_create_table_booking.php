<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->incremeent('id_pendaftaran');
            $table->integer('NoDaftar');
            $table->date('TglDaftar');
            $table->integer('NIK')->unsigned();
            $table->integer('idLokasi')->unsigned();
            $table->date('tglPeriksa');
            $table->date('TotalBiaya');
            $table->integer('idPetugas');
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
        Schema::dropIfExists('pendaftaran');
    }
}
