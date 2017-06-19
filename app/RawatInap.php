<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model
{
    protected $table = 'rawatinap';

    protected $fillable = ['no_trans', 'tanggal_masuk', 'id_kamar', 'id_pasien']; 


    public function kamar(){
        return $this->belongsTo('App\Kamar','id_kamar');
    }

    public function pasien(){
        return $this->belongsTo('App\Pasien','id_pasien');
    }
}
