@extends('layout/main')

@section('title', 'List Golongan Darah')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-10">
              <h1 class="mt-3">List Golongan Darah</h1>
              
              
              <a href="/golongandarah/create" class="btn btn btn-success mb-1">Tambah Data</a>
              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif
              <table class="table">
                <thead class="thead-dark">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">Golongan Darah</th> 
                   <th scope="col">Rhesus</th>
                   <th scope="col">Action</th> 
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $goldar as $gdar)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $gdar-> golongandarah }}</td>
                    <td>{{ $gdar-> rhesus }}</td>
                    <td>
                    
                    <a href="/golongandarah/{{ $gdar->id }}/edit" class="btn btn-primary">Edit</a>

                    <form action="/golongandarah/{{ $gdar->id }}" method="post" class="d-inline">
                      
                      @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <!-- <a href="" class="badge badge-success ">edit</a>
                    <a href="" class="badge badge-danger">delete</a> -->
                    </td>
                 </tr>
                 @endforeach
                </tbody>
              </table>


          </div>
      </div>
  </div>
@endsection
