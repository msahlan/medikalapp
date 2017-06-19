<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKelasKamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelaskamar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kelaskamar', 20);
            $table->timestamps();
        });

        //set FK
        Schema::table('ruangan', function(Blueprint $table){
            $table->foreign('id_kelaskamar')
            ->references('id')
            ->on('kelaskamar')
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
        

        Schema::drop('kelaskamar');
    }
}
