<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_kamar',5)->unique();
            $table->string('nama_kamar',20);
            $table->string('fasilitas',50);
            $table->string('kelaskamar',20);
            $table->timestamps();
        });

        Schema::table('rawatinap', function(Blueprint $table){
            $table->foreign('id_kamar')
            ->references('id')
            ->on('kamar')
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
        Schema::table('rawatinap',function(Blueprint $table){
            $table->dropForeign('rawatinap_id_kamar_foreign');
        });

        Schema::drop('kamar');
    }
}
