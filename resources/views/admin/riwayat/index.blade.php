@extends('backend.index')
@section('judul','Data Riwayat Deteksi User')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    
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
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            
                            <th width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $nl)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$nl->name}}</td>
                                <td>{{$nl->email}}</td>
                                <td>{{$nl->created_at}}</td>
                                
                                <td>
                                    <a href="{{route('riwayat.detail',$nl->id)}}" class="btn btn-primary btn-sm" ><i class="fa fa-info-circle" ></i></a>
                                    
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





