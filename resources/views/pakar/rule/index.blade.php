@extends('pakar.index')
@section('judul','Rule')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            

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
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rl => $result)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$result->kode_rule}}</td>
                            <td>{{$result->nama_gejala}}</td>
                            <td>{{$result->jenis_gangguan}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
