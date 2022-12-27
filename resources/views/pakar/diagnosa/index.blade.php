@extends('backend.index')
@section('judul','Deteksi')
@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (session('sukses'))
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success alert-sm alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-check"></i> {{ session('sukses') }}!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (session('error'))
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-sm alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-times"></i> {{ session('error') }}!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <form action="{{url('simpan-deteksi')}}"  method="POST">
                            @csrf
                            <div class="card card-warning card-gejala" id="accordion">
                            <div class="alert alert-info fade show">
                                
                                <strong>Petunjuk : </strong>Pilih Pernyataan yang paling sesuai dengan pengalaman Anda selama satu minggu belakangan ini
                            </div>
                           
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Pernyataan yang paling sesuai dengan pengalaman Anda selama satu minggu belakangan ini</th>
                                                    <th>Tidak Pernah</th>
                                                    <th>Kadang Kadang</th>
                                                    <th>Lumayan Sering</th>
                                                    <th>Sering Sekali</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($gejala as $gj)
                                                <input type="hidden" name="id_pertanyaan[]" value="{{$gj['id']}}">
                                                <tr>
                                                    <td>{{ $gj['nama_gejala'] }}</td>
                                                    @foreach($bobot as $ng)
                                                    <td><input type="radio" name="jawaban[{{$gj['id']}}]" value="{{$ng['bobot']}}"></td>
                                                    @endforeach
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                         
                                        
                                    </div>
                                    <div class="text-center ">
                                            <button type="submit" class="btn btn-success">Deteksi</button>
                                    </div>
                                    <br>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
