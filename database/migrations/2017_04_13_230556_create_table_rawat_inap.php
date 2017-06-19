<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRawatInap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawatinap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_trans',5)->unique();
            $table->date('tanggal_masuk');
            $table->integer('id_kamar')->unsigned();
            $table->integer('id_pasien')->unsigned();
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
        Schema::drop('rawatinap');
    }
}
