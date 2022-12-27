@extends('pakar.index')
@section('judul','User')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{route('user.create')}}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">Tambah Data</a>
                </div>
            </div>

            @if (session('sukses'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-sm alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> {{ session('sukses') }}!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dl)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dl->name}}</td>
                                <td>{{$dl->email}}</td>
                                <td>{{$dl->password}}</td>
                                <td>
                                    <a href="{{ url('pakar/user/edit', $dl->id) }}" class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></a>
                                    
                                    <a class="btn btn-danger btn-sm" href="{{route('user.destroy',$dl->id)}}" title="Delete Data"onclick="return confirm('Anda yakin ingin hapus?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah data -->
<div class="modal" id="tambah">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="card-body">

               
        <div class="modal-header">
          <h4 class="modal-title">Input data user</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">

        <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{ route('user.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama</label>

                                    <input type="text" class="form-control" name="name" id="name" >
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email</label>

                                    <input type="email" class="form-control" name="email" id="email" >
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password</label>

                                    <input type="password" class="form-control fs-4 mb-3 @error('password') is-invalid @enderror" name="password" id="password" >
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

            </div>
        </div>
                        <button type="submit" class="btn btn-info btn-sm btn-block">Simpan</button>
                        </form>

                    </div>
      </div>
    </div>
</div>



@endsection
