<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHobiSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobi_siswa', function (Blueprint $table) {
            //Create Table hobi siswa
            $table->integer('id_siswa')->unsigned()->index();
            $table->integer('id_hobi')->unsigned()->index();
            $table->timestamps();

            //Set PK
            $table->primary(['id_siswa','id_hobi']);

            //Set Fk hobi_siswa ---siswa
            $table->foreign('id_siswa')
            ->references('id')
            ->on('siswa')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //Set hobi_siswa ---hobi

            $table->foreign('id_hobi')
            ->references('id')
            ->on('hobi')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hobi_siswa');
    }
}
