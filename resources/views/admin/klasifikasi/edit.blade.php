@extends('backend.index')
@section('judul','Edit Jenis Gangguan Kesehatan Mental')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{ route('klasifikasi.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="{{ route('klasifikasi.update', $data->id) }}" method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Kode Gangguan</label>
                            <input type="text" class="form-control" name="kode_gangguan" id="kode_gangguan" value="{{ $data->kode_gangguan }}">
                            @error('kode_gangguan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Gangguan Kesehatan Mental</label>
                            <input type="text" class="form-control" name="jenis_gangguan" id="jenis_gangguan" value="{{ $data->jenis_gangguan }}">
                            @error('jenis_gangguan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                      
                        
                        
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm btn-block">Simpan</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

@endsection
