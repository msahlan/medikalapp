<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
	protected $table = 'ruangan';

	protected $fillable =
	[
	    'kd_kamar',
	    'nama_kamar',
	    'fasilitas',
	    'id_kelaskamar',
	    'harga',
	    'foto'
	];

	public function kelaskamar(){

        return $this->belongsTo('App\KelasKamar','id_kelaskamar');
        
    }
}
