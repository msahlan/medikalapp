<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasKamar extends Model
{
    protected $table = 'kelaskamar';

    protected $fillable = [
    	'nama_kelaskamar'
    ];

    public function ruangan(){
    	return $this->hasMany('App\Ruangan', 'id_kelaskamar');
    }
}
