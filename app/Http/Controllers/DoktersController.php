<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DoktersRequest;
use App\Dokters;
use Session;
use Validator;
use PDF;

class DoktersController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {   
        
        $halaman = 'dokters';
        $dokters = Dokters::all();
        $dokters_list = Dokters::orderBy('created_at','asc')->paginate(6);
        $jumlah_dokters = $dokters->count();
        return view('rs.dokters.index', compact('halaman','dokters_list','jumlah_dokters'));
    }

    public function getPdf()
    {
        
        $dokters = Dokters::all();
        $pdf = PDF::loadView('pdf.dokter', ['dokters'=>$dokters]);
        return $pdf->stream('dokter.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rs.dokters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoktersRequest $request)
    {
        Dokters::create($request->all());
        Session::flash('flash_message','Data dokters berhasil disimpan');
        return redirect('dokters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dokters $dokters)
    {
        return view('rs.dokters.show', compact('halaman','dokters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokters $dokters)
    {
        return view('rs.dokters.edit', compact('dokters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Dokters $dokters,Request $request)
    {
        $dokters->update($request->all());
        Session::flash('flash_message','Data dokters berhasil diupdate');
        return('dokters');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokters $dokters)
    {
        
        $dokters->delete();
        Session::flash('flash_message', 'Data dokters berhasil dihapus.');
        //Session::flash('penting','true');
        return redirect('dokters');
    }

}
