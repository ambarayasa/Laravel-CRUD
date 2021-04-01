@extends('layout/main')

@section('title', 'Edit Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Edit Hobby</h1>

<form method="post" action="/hobby/{{$hby->id}}">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="hobby">Hobby</label>
        <input type="text" class="form-control" id="hobby" name="hobby" value="{{$hby->hobby}}">
    </div>

    <button type="submit" class="btn btn-success mb-1">Simpan</button>
    <button type="button" class="btn btn-primary" onclick="location.href='/hobby'">Kembali</button>



</form>


          </div>
      </div>
  </div>
@endsection
