@extends('layout/main')

@section('title', 'Daftar Kontak Hobby')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-10">
              <h1 class="mt-3">List Kontak Hobby</h1>

              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif

              <table class="table">
                <thead class="thead-dark">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">ID Kontak</th> 
                   <th scope="col">ID Hobby</th>
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $mahasiswa as $mhs)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mhs-> nama }}</td>
                    <td>
                    <ul>
                        @foreach ($mhs->hobby as $hoby)
                            @if ($hoby)
                                <li> {{ $hoby->hobby }} </li>
                            @else
                                None
                            @endif
                        @endforeach
                    </ul></td>
                    <td>

                

                 
                    
                   
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
