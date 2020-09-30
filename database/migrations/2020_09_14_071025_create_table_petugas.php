<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increment('id_petugas');
            $table->string('nama_petugas');
            $table->date('TglLahir');
            $table->string('Alamat');
            $table->string('Jabatan');
            $table->string('NoTelp');
            $table->string('username');
            $table->string('Password');
            $table->integer('idLevel')->unsigned();
            $table->string('photo');
            $table->timestamps();
            $table->foreign('idLevel')->references('id')->on('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
