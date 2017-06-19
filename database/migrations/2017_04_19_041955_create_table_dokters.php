<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDokters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_dokter',4)->unique();
            $table->string('nama_dokter',30);
            $table->string('alamat',50);
            $table->string('no_telp',20);
            $table->string('spesialis',20);
            $table->string('nama_poli',20);
            $table->string('nama_hari',20);
            $table->string('jam',20);
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
        Schema::drop('dokters');
    }
}
