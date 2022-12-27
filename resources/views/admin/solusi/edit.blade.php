@extends('backend.index')
@section('judul','Edit Solusi')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{ route('solusi.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="{{ route('solusi.update', $data->id) }}" method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf

                        
                        
                        <div class="form-group">
                            <label>Jenis Gangguan</label>
                            <select class="form-control" name="gangguan" id="gangguan" disabled>
                                @foreach ( $klas as $item )
                                <option value="{{ $item->id }}" {{ $item->id == $data->jenis_gangguan ? 'selected' : '' }}>{{$item->jenis_gangguan}}</option>
                                @endforeach
                            </select>
                            @error('klas')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tingkatan Gangguan</label>
                            <select class="form-control" name="tingkatan" id="tingkatan" disabled>
                                @foreach ( $kt as $item )
                                <option value="{{ $item->id }}" {{ $item->id == $data->tingkatan ? 'selected' : '' }}>{{$item->tingkatan}}</option>
                                @endforeach
                            </select>
                            @error('kt')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Solusi</label>
                            <input type="text" class="form-control" name="solusi" id="solusi" value="{{ $data->solusi }}">
                            @error('solusi')
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
