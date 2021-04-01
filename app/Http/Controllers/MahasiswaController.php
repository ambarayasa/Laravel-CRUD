<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blood;
use App\Hobby;
use App\Contacthobby;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mahasiswa = DB::table('students')->get();
        $mahasiswa = \App\Contact::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = Contact::all();
        $blood = Blood::all();
        $hobby = Hobby::all();
        return view('mahasiswa.create',  compact('mahasiswa', 'blood', 'hobby'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Contact;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->telepon = $request->telepon;
        $mahasiswa->darahid = $request->darahid;
        $mahasiswa->email = $request->email;
        $mahasiswa->save();
        foreach ($request->hobby as $hobby){
            $h = new Contacthobby;
            $h->idkontak = $mahasiswa->id;
            $h->idhobby =$hobby;
            $h->save();
        }

        return redirect('/mahasiswa')->with('status', 'Data Berhasil Ditambahkan!');
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
        $mhs = Contact::find($id);
        $mahasiswa = Contact::all();
        $blood = Blood::all();
        $hobby = Hobby::all();
        $khobby = Contacthobby::where ('idkontak',$id)->pluck ('idhobby')->toArray();
        return view('mahasiswa.edit', compact('mhs', 'mahasiswa', 'blood', 'hobby', 'khobby'));
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
        $mhs = Contact::find($id);
        $mhs->nama = $request->nama;
        $mhs->alamat = $request->alamat;
        $mhs->telepon = $request->telepon;
        $mhs->darahid = $request->darahid;
        $mhs->email = $request->email;
        $mhs->update();

        Contacthobby::where('idkontak',$request->id)->delete();

        if(!empty($request->hobby)){
            foreach ($request->hobby as $hobby){
                $h = new Contacthobby;
                $h->idkontak = $mhs->id;
                $h->idhobby =$hobby;
                $h->save();
        }
        }
        return redirect('/mahasiswa')->with('status', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontaks = Contact::find($id);
        $kontaks->delete();
        return redirect('/mahasiswa')->with('status', 'Data Berhasil Dihapus!');
    }
}
