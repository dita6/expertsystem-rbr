@extends('backend.index')
@section('judul','Tambah Gejala')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="{{ route('gejala.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="card-body">


                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{ route('gejala.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Kode Gejala</label>

                                    <input type="text" class="form-control" name="kode_gejala" id="kode_gejala"  value="{{ isset($kode_gejala) ? $kode_gejala : '' }}">
                                    @error('kode_gejala')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Nama Gejala</label>
                                    <textarea class="form-control" name="nama_gejala" id="nama_gejala"></textarea>
                                    @error('nama_gejala')
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
