<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_mr',5)->unique();
            $table->string('nama_pasien',30);
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('umur',20);
            $table->string('alamat',50);
            $table->string('no_telp',20);
            $table->timestamps();
        });

        Schema::table('rawatinap', function(Blueprint $table){
            $table->foreign('id_pasien')
            ->references('id')
            ->on('pasien')
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
        chema::table('rawatinap',function(Blueprint $table){
            $table->dropForeign('rawatinap_id_pasien_foreign');
        });

        Schema::drop('pasien');
    }
}
