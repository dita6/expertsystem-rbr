@extends('backend.index')
@section('judul','Solusi')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{route('solusi.create')}}" class="btn btn-primary btn-sm">Tambah Data</a>
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
                            <th>Jenis Gangguan</th>
                            <th>Tingkatan Gangguan</th>
                            <th>Solusi </th>
                            <th width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dl)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dl->jenis_gangguan}}</td>
                                <td>{{$dl->tingkatan}}</td>
                                <td>{{$dl->solusi}}</td>
                                <td>
                                    <a href="{{ url('admin/solusi/edit', $dl->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    
                                    <a class="btn btn-danger btn-sm" href="{{route('solusi.destroy',$dl->id)}}"
                      title="Delete Data"onclick="return confirm('Anda yakin ingin hapus?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
