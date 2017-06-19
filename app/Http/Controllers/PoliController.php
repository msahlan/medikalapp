<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Input;
use App\Poliklinik;
use Session;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman = 'poliklinik';
        $poliklinik = Poliklinik::all();
        $poliklinik_list = Poliklinik::orderBy('created_at','asc')->paginate(6);
        $jumlah_poliklinik = $poliklinik->count();
        return view('rs.poliklinik.index', compact('halaman','poliklinik_list','jumlah_poliklinik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rs.poliklinik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        poliklinik::create($request->all());
        Session::flash('flash_message','Data poliklinik berhasil disimpan');
        return redirect('poliklinik');
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
    public function edit(Poliklinik $poliklinik)
    {
        return view('rs.poliklinik.edit', compact('poliklinik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Poliklinik $poliklinik,Request $request)
    {
        $poliklinik->update($request->all());
        Session::flash('flash_message','Data poliklinik berhasil diupdate');
        return('poliklinik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($poliklinik)
    {
        $poliklinik->delete();
        Session::flash('flash_message', 'Data poliklinik berhasil dihapus.');
        //Session::flash('penting','true');
        return redirect('poliklinik');
    }
}
