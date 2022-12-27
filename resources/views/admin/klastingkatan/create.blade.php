@extends('backend.index')
@section('judul','Tambah Klasifikasi Tingkatan Gangguan')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="{{ route('klasifikasiT.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="card-body">


                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{ route('klasifikasiT.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                

                                <div class="form-group">
                                    <label>Tingkatan Gangguan</label>
                                    <textarea class="form-control" name="tingkatan" id="tingkatan"></textarea>
                                    @error('tingkatan')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                
                    </div>
                        <button type="submit" class="btn btn-info btn-sm btn-block">Simpan</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
