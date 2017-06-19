<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRuanganRawatInap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_kamar',5)->unique();
            $table->string('nama_kamar',20);
            $table->string('fasilitas',50);
            $table->integer('id_kelaskamar')->unsigned();
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
        
        Schema::drop('ruangan');
    }
}
