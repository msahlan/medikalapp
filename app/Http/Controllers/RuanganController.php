<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RuanganRequest;
use Validator;
use Input;
use App\Ruangan;
use App\KelasKamar;
use Session;
use Storage;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman = 'ruangan';
        $list_kelaskamar = KelasKamar::lists('nama_kelaskamar','id');
        $ruangan_list = Ruangan::orderBy('nama_kamar', 'asc')->paginate(10);
        $jumlah_ruangan = $ruangan_list->count();
        return view('rs.ruangan.index', compact('halaman','ruangan_list','jumlah_ruangan','list_kelaskamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_kelaskamar = KelasKamar::lists('nama_kelaskamar','id');
        return view('rs.ruangan.create',compact('list_kelaskamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuanganRequest $request)
    {
        $input = $request->all();

        if($request->hasFile('foto')){
            $input['foto'] = $this->uploadFoto($request);
        }

        $ruangan = Ruangan::create($input);

       

        Session::flash('flash_message','Data Kamar berhasil disimpan');
        return redirect('ruangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruangan $ruangan)
    {
        return view('rs.ruangan.edit', compact('ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        $ruangan->update($request->all());
        Session::flash('flash_message','Data ruangan berhasil diupdate');
        return('ruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruangan $ruangan)
    {
        $ruangan->delete();
        Session::flash('flash_message', 'Data ruangan berhasil dihapus.');
        //Session::flash('penting','true');
        return redirect('ruangan');
    }

     public function uploadFoto(RuanganRequest $request)
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
}
