<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\RawatInapRequest;
use Validator;
use Input;
use App\RawatInap;
use App\Kamar;
use App\Pasien;
use Session;
use App\Dokters;
use PDF;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPdf()
    {
        
        $dokters = Dokters::all();
        $pdf = PDF::loadView('pdf.pemesanan', ['dokters'=>$dokters]);
        return $pdf->stream('pemesanan.pdf');
    }

    public function index()
    {
        $halaman = 'pemesanan';
        $list_kamar = Kamar::lists('nama_kamar','id');
        $list_pasien = Pasien::lists('nama_pasien','id');
        $rawatinap_list = RawatInap::orderBy('no_trans', 'asc')->paginate(10);
        $jumlah_rawatinap = $rawatinap_list->count();
        return view('rs.pemesanan.index', compact('halaman','rawatinap_list','jumlah_rawatinap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_pasien = Pasien::lists('nama_pasien','id');
        $list_kamar = Kamar::lists('nama_kamar','id');
        return view('rs.pemesanan.create', compact('list_kamar','list_pasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RawatInapRequest $request)
    {
        RawatInap::create($request->all());
        Session::flash('flash_message','Data rawatinap berhasil disimpan');
        return redirect('rawatinap');
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
    public function edit(RawatInap $rawatinap)
    {
        return view('rs.rawatinap.edit', compact('rawatinap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RawatInap $rawatinap, Request $request)
    {
        $rawatinap->update($request->all());
        Session::flash('flash_message','Data rawatinap berhasil diupdate');
        return redirect('rawatinap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RawatInap $rawatinap)
    {
        $rawatinap->delete();
        Session::flash('flash_message', 'Data rawatinap berhasil dihapus.');
        //Session::flash('penting','true');
        return redirect('rawatinap');
    }
}
