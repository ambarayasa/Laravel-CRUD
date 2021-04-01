@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Tambah Data</h1>

<form method="post" action="/hobby">
    @csrf
    <div class="form-group">
        <label for="hobby">Hobby</label>
        <input type="text" class="form-control" id="hobby" placeholder="Masukkan Hobby" name="hobby" required>
    </div>
    <button type="submit" class="btn btn-success mb-1">Simpan</button>
    <button type="button" class="btn btn-primary" onclick="location.href='/hobby'">Kembali</button>


</form>


          </div>
      </div>
  </div>
@endsection
