<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\KamarRequest;
use Validator;
use Input;
use App\Kamar;
use Session;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman = 'kamar';
        $kamar_list = Kamar::orderBy('nama_kamar', 'asc')->paginate(10);
        $jumlah_kamar = $kamar_list->count();
        return view('rs.kamar.index', compact('halaman','kamar_list','jumlah_kamar','list_kelaskamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rs.kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KamarRequest $request)
    {
        Kamar::create($request->all());
        Session::flash('flash_message','Data Kamar berhasil disimpan');
        return redirect('kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        return view('rs.kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        $kamar->update($request->all());
        Session::flash('flash_message','Data kamar berhasil diupdate');
        return('kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        Session::flash('flash_message', 'Data kamar berhasil dihapus.');
        //Session::flash('penting','true');
        return redirect('kamar');
    }
}
