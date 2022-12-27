@extends('backend.index')
@section('judul','Detail Riwayat')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    <a href="{{ route('riwayat.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                </div>
            </div>
            <div class="card-body">

            <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th>Pernyataan</th>
                            <th width="20%">Jawaban</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dl)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dl->nama_gejala}}</td>
                                <td>{{$dl->parameter}}</td>
                                
                                
                            </tr>
                        @endforeach

                        <?php  
                            
                            // proses pengklasifikasian gejala
                            $rule_depresi = explode(',', $depresi->nama_gejala);
                            $rule_kecemasan = explode(',', $kecemasan->nama_gejala);
                            $rule_stress = explode(',', $stress->nama_gejala);


                            $skor_depresi = 0; //set nilai skor menjadi 0
                            $skor_kecemasan = 0;
                            $skor_stress = 0;
                            foreach ($hasil as $ha) { //data dari tb_hasil
                            if (in_array($ha->id_pertanyaan, $rule_depresi)) { //mengklasifikasikan id_pertanyaan dgn rule dari depresi
                                $tdepresi = $ha->skor; //ambil skor
                                $skor_depresi += $tdepresi; //proses penjumlahan skor depresi
                            } else if (in_array($ha->id_pertanyaan, $rule_kecemasan)) {
                                $tkecemasan = $ha->skor;
                                $skor_kecemasan += $tkecemasan;
                            } else {
                                $tstres = $ha->skor;
                                $skor_stress += $tstres;
                            }
                            }



                        ?>


                            <tr>
                                <td colspan ="2"><b>Depresi</b></td>
                                <td>
                                    <?php 
                                        if ($skor_depresi <= 7) {
                                        echo '<b>Normal : '.$skor_depresi.' </b>';
                                        } else if ($skor_depresi <= 9) {
                                        echo '<b>Ringan : '.$skor_depresi.' </b>';
                                        
                                        } elseif ($skor_depresi <= 14) {
                                        echo '<b>Sedang : '.$skor_depresi.' </b>';
                                        } elseif ($skor_depresi <= 19) {
                                        echo '<b>Berat : '.$skor_depresi.' </b>';
                                        } else {
                                        echo '<b>Sangat Berat : '.$skor_depresi.' </b>';
                                        } 
                                    ?>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan ="2"><b>Kecemasan</b></td>
                                <td>
                                    <?php 
                                        if ($skor_kecemasan <= 14) {
                                        echo '<b>Normal : '.$skor_kecemasan.' </b>';
                                        } elseif ($skor_kecemasan <= 18) {
                                        echo '<b>Ringan : '.$skor_kecemasan.' </b>';
                                        } elseif ($skor_kecemasan <= 25) {
                                        echo '<b>Sedang : '.$skor_kecemasan.' </b>';
                                        } elseif ($skor_kecemasan <= 33) {
                                        echo '<b>Berat : '.$skor_kecemasan.' </b>';
                                        } else {
                                        echo '<b>Sangat Berat : '.$skor_kecemasan.' </b>';
                                        } ?>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan ="2"><b>Stress</b></td>
                                <td>
                                    <?php if ($skor_stress <= 9) {
                                    echo '<b>Normal : '.$skor_stress.' </b>';
                                    } elseif ($skor_stress <= 13) {
                                    echo '<b>Ringan : '.$skor_stress.' </b>';
                                    } elseif ($skor_stress <= 20) {
                                    echo '<b>Sedang : '.$skor_stress.' </b>';
                                    } elseif ($skor_stress <= 27) {
                                    echo '<b>Berat : '.$skor_stress.' </b>';
                                    } else {
                                    echo '<b>Sangat Berat : '.$skor_stress.' </b>';
                                    } ?>
                                </td>
                            </tr>                            
                    </tbody>
                    
                </table>
                

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
