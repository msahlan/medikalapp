<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DokterRequest;
use App\Dokter;
use Session;
use Validator;


class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman = 'dokter';
        $dokter = Dokter::all();
        $dokter_list = Dokter::orderBy('created_at','asc')->paginate(6);
        $jumlah_dokter = $dokter->count();
        return view('rs.dokter.index', compact('halaman','dokter_list','jumlah_dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rs.dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DokterRequest $request)
    {
        Dokter::create($request->all());
        Session::flash('flash_message','Data dokter berhasil disimpan');
        return redirect('dokter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        return view('rs.dokter.show', compact('halaman','dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
    {
        return view('rs.dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Dokter $dokter,Request $request)
    {
        $dokter->update($request->all());
        Session::flash('flash_message','Data dokter berhasil diupdate');
        return('dokter');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        
        $dokter->delete();
        Session::flash('flash_message', 'Data dokter berhasil dihapus.');
        //Session::flash('penting','true');
        return redirect('dokter');
    }
}
