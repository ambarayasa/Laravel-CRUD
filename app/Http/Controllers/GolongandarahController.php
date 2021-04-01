<?php

namespace App\Http\Controllers;

use App\Blood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolongandarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mahasiswa = DB::table('students')->get();
        $gdar = \App\Blood::all();
        return view('golongandarah.index', ['goldar' => $gdar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongandarah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Blood;
        $mahasiswa->golongandarah = $request->golongandarah;
        $mahasiswa->rhesus = $request->rhesus;
        $mahasiswa->save();

        return redirect('/golongandarah')->with('status', 'Data Berhasil Ditambahkan!');
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
    public function edit($id)
    {
        $gdar = Blood::find($id);
        return view('golongandarah.edit', compact('gdar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $gdar = Blood::find($id);
        $gdar->golongandarah = $request->golongandarah;
        $gdar->rhesus = $request->rhesus;
        $gdar->update();
        return redirect('/golongandarah')->with('status', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontaks = Blood::find($id);
        $kontaks->delete();
        return redirect('/golongandarah')->with('status', 'Data Berhasil Dihapus!');
    }
}
