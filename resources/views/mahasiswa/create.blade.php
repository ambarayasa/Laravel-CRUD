@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Tambah Data</h1>

<form method="post" action="/mahasiswa">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
    </div>

    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" class="form-control" id="telepon" placeholder="Masukkan Telepon" name="telepon" required>
    </div>

    <div class="form-group">
        <label for="darahid">Golongan Darah</label>
        <select class="form-control" id="darahid" name="darahid">
        <option value="" selected disable>Pilih golongan darah</option>
        @foreach ($blood as $gd)
        <option value= "{{$gd->id}}">
        {{$gd->golongandarah}}
        </option>
        @endforeach
        </select>
    </div>

    <label for="hobby" class="form-label">Hobby</label>
    @foreach ($hobby as $item)
    <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{ $item->id }}" name="hobby[]"> 
            <label class="form-check-label" for="flexCheckDefault">
                {{ $item->hobby }}
            </label>
    </div>
     @endforeach

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
    </div>
    <button type="submit" class="btn btn-success mb-1">Simpan</button>
    <button type="button" class="btn btn-primary" onclick="location.href='/kontak'">Kembali</button>
</form>


          </div>
      </div>
  </div>
@endsection
