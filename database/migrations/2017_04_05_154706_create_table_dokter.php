<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_dokter',4)->unique();
            $table->string('nama_dokter',30);
            $table->string('alamat',50);
            $table->string('no_telp',20);
            $table->string('spesialis',20);
            $table->string('jadwal_dokter1',20);
            $table->string('jadwal_dokter2',20);
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
        Schema::drop('dokter');
    }
}
