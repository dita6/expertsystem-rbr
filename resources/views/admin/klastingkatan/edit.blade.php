@extends('backend.index')
@section('judul','Edit Tingkatan Gangguan Kesehatan Mental')
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
                        <form action="{{ route('klasifikasiT.update', $data->id) }}" method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf

                    

                        <div class="form-group">
                            <label>Tingkatan Gangguan</label>
                            <input type="text" class="form-control" name="tingkatan" id="tingkatan" value="{{ $data->tingkatan }}">
                            @error('tingkatan')
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
