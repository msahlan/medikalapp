<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokters extends Model
{
    protected $table = 'dokters';

    protected $fillable = [
    	'kd_dokter',
    	'nama_dokter',
    	'alamat',
    	'no_telp',
    	'spesialis',
    	'nama_poli',
    	'nama_hari',
    	'jam'
    ];
}
