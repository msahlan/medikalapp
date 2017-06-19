<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect; 

use App\Http\Requests;
use App\Http\Requests\PasienRequest;
use Validator;
use Input;
use App\Pasien;
use Session;
use PDF;


class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getKartu()
    {
        $pdf = PDF::loadView('pdf.kartupasien');
        return $pdf->stream('kartupasien.pdf');
    }

    public function getPdf()
    {
        
        $pasien = Pasien::all();
        $pdf = PDF::loadView('pdf.pasien', ['pasien'=>$pasien]);
        return $pdf->stream('pasien.pdf');
    }

    public function index()
    {
        $halaman = 'pasien';
        $pasien = Pasien::all();
        $pasien_list = Pasien::orderBy('created_at','asc')->paginate(6);
        $jumlah_pasien = $pasien->count();
        return view('rs.pasien.index', compact('halaman','pasien_list','jumlah_pasien'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rs.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasienRequest $request)
    {
        Pasien::create($request->all());
        Session::flash('flash_message','Data pasien berhasil disimpan');
        return redirect('pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        
        return view('rs.pasien.show', compact('halaman','pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('rs.pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Pasien $pasien,Request $request)
    {
        $pasien->update($request->all());
        Session::flash('flash_message','Data pasien berhasil diupdate');
        return redirect('pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        
        $pasien->delete();
        Session::flash('flash_message', 'Data pasien berhasil dihapus.');
        //Session::flash('penting','true');
        return redirect('pasien');
    }
}
