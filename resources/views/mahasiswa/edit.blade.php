@extends('layout/main')

@section('title', 'Edit Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Edit Kontak</h1>

<form method="post" action="/mahasiswa/{{$mhs->id}}">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$mhs->nama}}">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$mhs->alamat}}">
    </div>

    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" class="form-control" id="telepon" name="telepon" value="{{$mhs->telepon}}">
    </div>

    <div class="form-group">
        <label for="darahid">Golongan Darah</label>
        <select selected="{{ $mhs->darahid }}" class="form-control" id="darahid" name="darahid">
        @foreach ($blood as $gd)
        <option value="{{$gd->id}}" @if($gd->id==$mhs->darahid)
        SELECTED
        @endif>
        {{$gd->golongandarah}}
        </option>
        @endforeach
        </select>
    </div>

    <label for="hobby" class="form-label">Hobby</label>
    @foreach ($hobby as $item)
    <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{ $item->id }}" name="hobby[]"
            @if(in_array($item->id, $khobby))
                CHECKED
            @endif
            >

            <label class="form-check-label" for="flexCheckDefault">
                {{ $item->hobby }}
            </label>
    </div>
     @endforeach

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$mhs->email}}">
    </div>
    <button type="submit" class="btn btn-success mb-1">Simpan</button>
    <button type="button" class="btn btn-primary" onclick="location.href='/mahasiswa'">Kembali</button>

</form>


          </div>
      </div>
  </div>
@endsection
