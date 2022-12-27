@extends('backend.index')
@section('judul','Tambah Bobot Parameter Gejala')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="{{ route('nilai.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{ route('nilai.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Parameter Gejala</label>
                                    <input type="text" class="form-control" name="parameter" id="parameter">
                                    @error('parameter')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bobot Gejala</label>
                                    <input type="text" class="form-control" name="bobot" id="bobot">
                                    @error('bobot')
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
