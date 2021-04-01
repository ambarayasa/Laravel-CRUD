@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Tambah Data</h1>

<form method="post" action="/golongandarah">
    @csrf
    <div class="form-group">
        <label for="golongandarah">Golongan Darah</label>
        <input type="text" class="form-control" id="golongandarah" placeholder="Masukkan Golongan Darah" name="golongandarah" required>
    </div>
   
    <div class="form-group">
        <label for="rhesus">Rhesus</label>
        <input type="text" class="form-control" id="rhesus" placeholder="Masukkan Rhesus" name="rhesus" required>
    </div>
   
    <button type="submit" class="btn btn-success mb-1">Simpan</button>
    <button type="button" class="btn btn-primary" onclick="location.href='/golongandarah'">Kembali</button>
</form>


          </div>
      </div>
  </div>
@endsection
