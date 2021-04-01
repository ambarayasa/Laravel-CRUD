@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')

      <div class="container">
      <div class="row">
      <div class="col-8">
              <h1 class="mt-3">Tambah Data</h1>

<form method="post" action="/kontakhobby">
    @csrf
    <div class="form-group">
        <label for="idkontak">ID Kontak</label>
        <input type="text" class="form-control" id="idkontak" placeholder="Masukkan ID Kontak" name="idkontak" required>
    </div>
    <div class="form-group">
        <label for="idhobby">ID Hobby</label>
        <input type="text" class="form-control" id="idhobby" placeholder="Masukkan ID Hobby" name="idhobby" required>
    </div>
    <button type="submit" class="btn btn-success mb-1">Simpan</button>
    <button type="button" class="btn btn-primary" onclick="location.href='/kontakhobby'">Kembali</button>

</form>


          </div>
      </div>
  </div>
@endsection
