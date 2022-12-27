@extends('backend.index')
@section('judul','Rule')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{route('rule.create')}}" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>

            <div class="card-body table-responsive">

                @if (session('sukses'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-sm alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> {{ session('sukses') }}!</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th>Kode Rule</th>
                            <th>IF</th>
                            <th>THEN</th>
                            <th width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rl => $result)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$result->kode_rule}}</td>
                            <td>{{$result->nama_gejala}}</td>
                            <td>{{$result->jenis_gangguan}}</td>
                            <td>
                                <a href="{{ url('admin/rule/edit', $result->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{route('rule.destroy',$result->id)}}" title="Delete Data" onclick="return confirm('Anda yakin ingin hapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
