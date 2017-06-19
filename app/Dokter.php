<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';

    protected $fillable = [
    	'kd_dokter',
    	'nama_dokter',
    	'alamat',
    	'no_telp',
    	'spesialis',
    	'jadwal_dokter1',
    	'jadwal_dokter2'
    ];
}
