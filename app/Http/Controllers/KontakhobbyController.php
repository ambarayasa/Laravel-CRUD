<?php

namespace App\Http\Controllers;

use App\Contacthobby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use App\Hobby;

class KontakhobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mahasiswa = DB::table('students')->get();
        $khby = \App\Contacthobby::all();
        $mahasiswa = Contact::all();
        $hobby = Hobby::all();
        return view('kontakhobby.index', compact('khby','mahasiswa','hobby'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $mahasiswa = Mahasiswa::all();
        // $hobby = Hobby::all();
        return view('kontakhobby.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Contacthobby;
        $mahasiswa->idkontak = $request->idkontak;
        $mahasiswa->idhobby = $request->idhobby;
        $mahasiswa->save();

        return redirect('/kontakhobby')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $khby = Contacthobby::find($id);
        return view('kontakhobby.edit', compact('khby'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $khby = Contacthobby::find($id);
        $khby->idkontak = $request->idkontak;
        $khby->idhobby = $request->idhobby;
        $khby->update();
        return redirect('/kontakhobby')->with('status', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontaks = Contacthobby::find($id);
        $kontaks->delete();
        return redirect('/kontakhobby')->with('status', 'Data Berhasil Dihapus!');
    }
}
