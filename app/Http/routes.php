<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/','PagesController@homepage');
*/

Route::get('/',function(){
	if(Auth::check()){
		return view('pages.homepage');
	}else{
		return view('member.index');
	}
});

Route::get('fasilitas', function(){
	return view('rs.pages.fasilitas');
});

Route::get('kontak', function(){
	return view('rs.pages.kontak');
});

Route::get('profil', function(){
	return view('pages.profil');
});

Route::get('about','PagesController@about');

Route::get('test',function(){
	return view('user');
});

//Admin
Route::group(['middlewaregroup' => ['web']], function(){
	Route::auth();
	Route::get('/home', 'HomeController@index');
	Route::get('siswa/cari','SiswaController@getCari');
	Route::resource('siswa','SiswaController');
	Route::resource('kelas', 'KelasController');
	Route::resource('hobi', 'HobiController');
	Route::resource('user', 'UserController');

	Route::resource('pasien', 'PasienController');
	Route::resource('ruangan', 'RuanganController');
	Route::resource('dokter', 'DokterController');
	Route::resource('poliklinik', 'PoliController');
	Route::resource('kamar', 'KamarController');
	Route::resource('dokters', 'DoktersController');
	Route::get('laporan-dokter', 'DoktersController@getPdf');
	Route::get('cetak-kartu', 'PasienController@getKartu');
	Route::get('laporan-pasien', 'PasienController@getPdf');
	Route::get('laporan-pemesanan', 'PemesananController@getPdf');
	Route::get('laporan/pembayaran', 'RawatInapController@getPdf');
// 	Route::get('laporan-dokter',[
//     'uses'  =&amp;gt; 'DoktersController@getPdf',
//     'as'    =&amp;gt; 'pdf.dokter',
// ]);

	Route::resource('rawatinap', 'RawatInapController');
	Route::resource('pemesanan', 'PemesananController');

	Route::get('laporan',function(){
		return view('rs.laporan.index');
	});
/*	Route::get('siswa','SiswaController@index');
	Route::get('siswa/create','SiswaController@create');
	Route::get('siswa/{siswa}', 'SiswaController@show');
	Route::post('siswa','SiswaController@store');
	Route::get('siswa/{siswa}/edit','SiswaController@edit');
	Route::patch('siswa/{siswa}','SiswaController@update');
	Route::delete('siswa/{siswa}', 'SiswaController@destroy');
	Route::get('date-mutator', 'SiswaController@dateMutator');*/
});
/*
Route::get('sampling',function(){
	DB::table('kamar')->insert([
		[
			'kd_kamar' => '10001',
		    'nama_kamar' => 'Melati',
		    'fasilitas' => 'Ac, TV, Kamar Mandi, Tempat tidur',
		    'kelaskamar' => 'Kelas I',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'kd_kamar' => '10002',
		    'nama_kamar' => 'Mawar',
		    'fasilitas' => 'Ac, TV, Kamar Mandi, Tempat tidur',
		    'kelaskamar' => 'Kelas II',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'kd_kamar' => '10003',
		    'nama_kamar' => 'Matahari',
		    'fasilitas' => 'Ac, TV, Kamar Mandi, Tempat tidur',
		    'kelaskamar' => 'Kelas III',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'kd_kamar' => '10004',
		    'nama_kamar' => 'Matahari',
		    'fasilitas' => 'Ac, TV, Kamar Mandi, Tempat tidur',
		    'kelaskamar' => 'VIP',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		]);
});

Route::get('sampling',function(){
	DB::table('poliklinik')->insert([
		[
			'nama_poli'=>'Poli Gigi',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'nama_poli'=>'Poli Anak',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'nama_poli'=>'Poli Umum',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		]);
});

Route::get('sampling',function(){
	DB::table('dokter')->insert([
		[
			'kd_dokter'=>'1004',
			'nama_dokter'=>'Widia Sari',
			'alamat'=>'Jalan Simpang',
			'no_telp' => '08127637322',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'kd_dokter'=>'1005',
			'nama_dokter'=>'bahraien',
			'alamat'=>'perum mutiara ',
			'no_telp' => '089643344564',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'kd_dokter'=>'1006',
			'nama_dokter'=>'Silvia wati',
			'alamat'=>'jalan diponegoro',
			'no_telp' => '08533257780',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		]);
});
/*
Route::get('sample',function(){
	DB::table('pasien')->insert([
		[
			'no_mr'=>'10004',
			'nama_pasien'=>'Widia Sari',
			'jenis_kelamin'=>'P',
			'tempat_lahir'=>'Bekasi',
			'tanggal_lahir'=>'1998-04-03',
			'alamat'=>'Jalan Simpang',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'no_mr'=>'10005',
			'nama_pasien'=>'bahraien',
			'jenis_kelamin'=>'L',
			'tempat_lahir'=>'cirebon',
			'tanggal_lahir'=>'2017-04-03',
			'alamat'=>'perum mutiara ',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'no_mr'=>'10006',
			'nama_pasien'=>'Silvia wati',
			'jenis_kelamin'=>'P',
			'tempat_lahir'=>'Bekasi',
			'tanggal_lahir'=>'2017-04-03',
			'alamat'=>'jalan diponegoro',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		]);
});
/*
Route::get('sample',function(){
	DB::table('hobi')->insert([
		[
			'nama_hobi'=>'Koding',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'nama_hobi'=>'Membaca',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'nama_hobi'=>'Mendaki',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'nama_hobi'=>'Gaming',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		]);
});

Route::get('sampledatas',function(){
	DB::table('kelaskamar')->insert([
		[
			'nama_kelaskamar'=>'Kelas I',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'nama_kelaskamar'=>'Kelas II',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'nama_kelaskamar'=>'Kelas III',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		[
			'nama_kelaskamar'=>'VIP',
			'created_at'=>'2017-03-10 09:42:15',
			'updated_at'=>'2017-03-10 09:42:15'
		],
		]);
});

*/
