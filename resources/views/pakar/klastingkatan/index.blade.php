@extends('pakar.index')
@section('judul','Tingkatan Gangguan Kesehatan Mental')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
        

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
                            <th>Tingkatan Gangguan</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $klt)

                            <tr>
                                <td>{{$klt->id}}</td>
                                <td>{{$klt->tingkatan}}</td>
                                
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
