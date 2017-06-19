<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

	protected $fillable =
	[
	    'kd_kamar',
	    'nama_kamar',
	    'fasilitas',
	    'kelaskamar'
	];

	public function rawatinap()
    {
    	return $this->hasMany('App\RawatInap','id_kamar');
    }
}
