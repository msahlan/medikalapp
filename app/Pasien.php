<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';

    protected $fillable = [
    	'no_mr',
    	'nama_pasien',
    	'jenis_kelamin',
    	'tempat_lahir',
    	'tanggal_lahir',
    	'alamat',
    	'no_telp',
    	'umur'
        
    ];

    public function rawatinap()
    {
        return $this->hasMany('App\RawatInap','id_pasien');
    }
}
