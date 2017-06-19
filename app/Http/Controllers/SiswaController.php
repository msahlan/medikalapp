<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect; 

use App\Http\Requests;

use Validator;

use Illuminate\Support\Facades\Input;

use App\Siswa;

use App\Telepon;

use App\Kelas;

use App\Hobi;

use Session;

use Storage;

class SiswaController extends Controller
{
    //

    public function index()
    {
    	//$siswa_list = Siswa::all();
        //$siswa_list = Siswa::all()->sortByDesc('nama_siswa');
        $halaman = 'siswa';
        $list_class = Kelas::lists('nama_kelas','id');
    	$siswa_list = Siswa::orderBy('nama_siswa', 'asc')->paginate(10);
    	$jumlah_siswa = $siswa_list->count();
    	return view('siswa.index', compact('halaman','siswa_list','jumlah_siswa','list_class'));
    }

    public function show($id)
    {
    	$siswa = Siswa::findOrFail($id);
    	return view('siswa.show', compact('halaman','siswa'));
    }

    public function create()
    {
        $list_class = Kelas::lists('nama_kelas','id');
        $list_hoby = Hobi::lists('nama_hobi', 'id');
    	return view('siswa.create',compact('list_class','list_hoby'));
    }

    public function store(Request $request)
    {
    	//Siswa::create($request->all());
    	//return redirect('siswa');

    	$input = $request->all();

    	$validator = Validator::make($input, [
    			'nisn'           =>'required|string|size:4|unique:siswa,nisn',
    			'nama_siswa'     => 'required|string|max:30',
    			'tanggal_lahir'  => 'required|date',
    			'jenis_kelamin'  => 'required|in:L,P',
                'nomor_telepon'  => 'sometimes|numeric|
                digits_between:10,15|unique:telepon,nomor_telepon',
                'id_kelas'       => 'required',
                'foto'           => 'sometimes|image|max:500|mimes:jpg,png,bmp,jpeg,JPG',
    		]);

    	if ($validator->fails()) {
    		return redirect('siswa/create')
    		->withInput()
    		->withErrors($validator);
    	}

        if($request->hasFile('foto')){
            $input['foto'] = $this->uploadFoto($request);
        }

    	$siswa = Siswa::create($input);

        $telepon = new Telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $siswa->telepon()->save($telepon);
        $siswa->hobi()->attach($request->input('hobi_siswa'));

        Session::flash('flash_message', 'Data siswa berhasil disimpan.');

    	return redirect('siswa');

    }

    public function edit($id)
    {
    	$siswa = Siswa::findOrFail($id);
        $siswa->nomor_telepon = $siswa->telepon->nomor_telepon;
        $list_class = Kelas::lists('nama_kelas', 'id');
        $list_hoby = Hobi::lists('nama_hobi', 'id');
    	return view('siswa.edit',compact('siswa','list_class', 'list_hoby'));
    }

    public function update($id, Request $request)
    {
    	$siswa = Siswa::findOrFail($id);
    	$input = $request->all();

        $validator = Validator::make($input, [
                'nisn' =>'required|string|size:4|unique:siswa,nisn,' . $request->input('id'),
                'nama_siswa' => 'required|string|max:30',
                //'tanggal_lahir' => 'required|date',
                //'jenis_kelamin' => 'required|in:L,P',
                //'nomor_telepon' => 'sometimes|numeric|
               // digits_between:10,15|unique:telepon,nomor_telepon', 
            ]);

        if ($validator->fails()) {
            return redirect('siswa/' . $id . '/edit')->withInput()->withErrors($validator);
        }

        //Cek apakah ada foto di form?
        if($request->hasFile('foto')){
            //Hapus foto
            $this->hapusFoto($siswa);

            $input['foto'] = $this->uploadFoto($request);
        }

        $siswa->update($request->all());

        $telepon = $siswa->telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $siswa->telepon()->save($telepon);
        $siswa->hobi()->sync($request->input('hobi_siswa'));
        
        Session::flash('flash_message', ' Data siswa berhasil diupdate.');

    	return redirect('siswa');
    }

    public function destroy($id)
    {
        $this->hapusFoto($id);
    	$siswa = Siswa::findOrFail($id);
    	$siswa->delete();
        Session::flash('flash_message', 'Data siswa berhasil dihapus.');
        //Session::flash('penting','true');
    	return redirect('siswa');
    }

    public function dateMutator()
    {
    	$siswa = Siswa::findOrFail(1);
    	$str = 'Tanggal lahir : '.
    	$siswa->tanggal_lahir->format('d-M-Y') . '<br>' .
    	'Ulang Tahun ke-30 akan jatuh pada tanggal : ' . '<strong>' . 
    	$siswa->tanggal_lahir->addYears(30)->format('d-m-y') .'</strong>';
    	return $str;
    	//return 'Umur siswa ini adalah : '.$siswa->tanggal_lahir->age . ' tahun.';
    }

    public function uploadFoto(Request $request)
    {
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();

            if ($request->file('foto')->isValid()) {
                $foto_name = date('YmdHis') . ".$ext";
                $upload_path = 'fotoupload';
                $request->file('foto')->move($upload_path, $foto_name);

                return $foto_name;
            }

        return false;
    }

    public function hapusFoto($id)
    {
        $siswa = Siswa::findOrFail($id);
        $exist = Storage::disk('foto')->exists($siswa->foto);

        if(isset($siswa->foto) && $exist){
            $delete = Storage::disk('foto')->delete($siswa->foto);
            if ($delete){
                return true;
            }
            return false;
        }
    }

    public function getCari(Request $request)
    {

        $list_class = Kelas::lists('nama_kelas','id');
        $kata_kunci = trim($request->input('kata_kunci'));

        if(! empty($kata_kunci)){
            $jenis_kelamin = $request->input('jenis_kelamin');
            $id_kelas = $request->input('id_kelas');

            $query = Siswa::where('nama_siswa', 'LIKE', '%' . $kata_kunci . '%');
            //(! empty($jenis_kelamin)) ? $query->where('jenis_kelamin', $jenis_kelamin) : '';
            //(! empty($id_kelas)) ? $query->where('id_kelas', $id_kelas) : '';
            (! empty($jenis_kelamin)) ? $query->jenisKelamin($jenis_kelamin) : '';
            (! empty($id_kelas)) ? $query->Kelas($id_kelas) : '';
            $siswa_list = $query->paginate(4);

            //URL Pagination
            $pagination = (! empty($jenis_kelamin)) ? $siswa_list->appends(['jenis_kelamin', $jenis_kelamin]) : '';
            $pagination = (! empty($id_kelas)) ? $siswa_list->appends(['id_kelas', $id_kelas]) : '';
            $pagination = $siswa_list->appends(['kata_kunci', $kata_kunci]);


            $jumlah_siswa = $siswa_list->total();
            return view('siswa.index', compact('list_class','siswa_list', 'kata_kunci', 'pagination', 'jumlah_siswa','id_kelas', 'jenis_kelamin'));


        }
         return redirect('siswa');
        /*$list_class = Kelas::lists('nama_kelas','id');
        $kata_kunci = $request->input('kata_kunci');
        $query      = Siswa::where('nama_siswa', 'LIKE', '%' . $kata_kunci . '%');
        $siswa_list = $query->paginate(4);
        $pagination = $siswa_list->appends($request->except('page'));
        $jumlah_siswa = $siswa_list->total();*/

    }

}
