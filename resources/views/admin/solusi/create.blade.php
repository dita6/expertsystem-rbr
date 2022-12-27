@extends('backend.index')
@section('judul','Tambah Solusi')
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
                        <form action="{{ route('solusi.store') }}" method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf

                        
                        
                        <div class="form-group">
                            <label>Jenis Gangguan</label>
                            <select class="form-control" name="gangguan" id="gangguan">
                                @foreach ( $klas as $item )
                                <option value="{{ $item->id }}">{{$item->jenis_gangguan}}</option>
                                @endforeach
                            </select>
                            @error('ks')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tingkatan Gangguan</label>
                            <select class="form-control" name="tingkatan" id="tingkatan">
                                @foreach ( $kt as $item )
                                <option value="{{ $item->id }}">{{$item->tingkatan}}</option>
                                @endforeach
                            </select>
                            @error('ks')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Solusi</label>
                            <textarea class="form-control" name="solusi" id="solusi"  value="{{ isset($solusi) ? $solusi : '' }}"></textarea>
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
