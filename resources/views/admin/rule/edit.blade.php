@extends('backend.index')
@section('judul','Tambah Rule')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{ route('rule.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="{{ route('rule.update', $data->id) }}" method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Kode Rule</label>
                            <input type="text" class="form-control" name="kode_rule" id="kode_rule" value="{{ $data->kode_rule }}">
                            @error('kode_rule')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Gejala</label>
                            <select class="form-control select2" data-placeholder="Pilih Gejala" multiple="multiple" name="nmGejala[]" style="width: 100%;">
                                <option value="">- Pilih -</option>
                                @php $ex = explode(',', $data->nama_gejala); @endphp
                                @foreach ( $gejala as $gj )
                                <option value="{{ $gj->id }}" {!! in_array($gj->id, $ex) ? 'selected' : ''; !!}>{{$gj->nama_gejala}}</option>
                                @endforeach
                            </select>
                            @error('nmGejala')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jenis Gangguan</label>
                            <select class="form-control" name="ks" id="ks" disabled>
                                @foreach ( $ks as $item )
                                <option value="{{ $item->id }}" {{ $item->id == $data->jenis_gangguan ? 'selected' : '' }}>{{$item->jenis_gangguan}}</option>
                                @endforeach
                            </select>
                            @error('ks')
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
