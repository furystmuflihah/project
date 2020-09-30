<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increment('id_customer');
            $table->string('NIK');
            $table->string('Nama_customer');
            $table->string('Alamat');
            $table->date('TglLahirr');
            $table->string('Jenis_Kelamin');
            $table->string('Status');
            $table->string('NoTelp');
            $table->string('Username');
            $table->string('Password');
            $table->string('photo');
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
        Schema::dropIfExists('customers');
    }
}
