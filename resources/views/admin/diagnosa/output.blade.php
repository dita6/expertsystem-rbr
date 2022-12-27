@extends('backend.index')
@section('judul','Hasil Deteksi Gangguan Kesehatan Mental')
@section('content')

<?php  
use App\Models\Solusi;
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

<div class="row">
  <div class="col-lg-4 col-6">
    <button type="button" class="btn bg-light" style="height:200px;width:400px;color:white" data-toggle="modal" data-target="#depresi">
    <div class="small-box bg-danger">
    
      <div class="inner">
        
        <h4> Depresi</h4>
        
        <!-- proses penentuan rentang nilai tingkat depresi -->
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
       
      </div>
      
    </div>
    </button>
  </div>

  <div class="col-lg-4 col-6">
  <button type="button" class="btn bg-light" style="height:200px;width:400px;color:white" data-toggle="modal" data-target="#kecemasan">
    <div class="small-box bg-warning">
      <div class="inner">
        <h4>Kecemasan</h4>
        <!-- proses penentuan rentang nilai tingkat kecemasan -->
        <?php if ($skor_kecemasan <= 14) {
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
      </div>
    </div>
    </button>
  </div>

  <div class="col-lg-4 col-6">
  <button type="button" class="btn bg-light" style="height:200px;width:400px;color:white" data-toggle="modal" data-target="#stres">
    <div class="small-box bg-success">
      <div class="inner">
        <h4> Stres</h4>
        
        <!-- proses penentuan rentang nilai tingkat stres -->
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
      </div>
    </div>
      </button>
  </div>

  


  
  <div class="modal" id="depresi">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <div class="modal-header">
          <h4 class="modal-title">Saran Penanganan Depresi</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
        
           <?php 
            if ($skor_depresi <= 7) {

              // $dua = Solusi::where('id', 4)->first();
              // $sol = $dua->solusi;
              // $s = implode(',',(array)$sol);
              // echo $s;

              $satu =Solusi::where('gangguan', 1)
              ->Where('tingkatan',1)
              ->get();
              foreach ($satu as $sol){
              echo $sol->solusi.' <br>';
              }
              
            } else if ($skor_depresi <= 9) {
              $satu =Solusi::where('gangguan', 1)
              ->Where('tingkatan',2)
              ->get();
              foreach ($satu as $sol){
              echo $sol->solusi.' <br>';
              }

            } elseif ($skor_depresi <= 14) {
              $satu =Solusi::where('gangguan', 1)
              ->Where('tingkatan',3)
              ->get();
              foreach ($satu as $sol){
              echo $sol->solusi.' <br>';
              }
            } elseif ($skor_depresi <= 19) {
              $satu =Solusi::where('gangguan', 1)
              ->Where('tingkatan',4)
              ->get();
              foreach ($satu as $sol){
              echo $sol->solusi.' <br>';
              }
            } else {
              $satu =Solusi::where('gangguan', 1)
              ->Where('tingkatan',5)
              ->get();
              foreach ($satu as $sol){
              echo $sol->solusi.' <br>';
              }
            } 
            ?>

        </div>
     
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal" id="kecemasan">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <div class="modal-header">
          <h4 class="modal-title">Saran Penanganan Kecemasan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
            
              <?php if ($skor_kecemasan <= 14) {
                $satu =Solusi::where('gangguan', 2)
                ->Where('tingkatan',1)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
                } elseif ($skor_kecemasan <= 18) {
                  $satu =Solusi::where('gangguan', 2)
                ->Where('tingkatan',2)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
                } elseif ($skor_kecemasan <= 25) {
                 $satu =Solusi::where('gangguan', 2)
                ->Where('tingkatan',3)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
                } elseif ($skor_kecemasan <= 33) {
                  $satu =Solusi::where('gangguan', 2)
                ->Where('tingkatan',4)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
                } else {
                  $satu =Solusi::where('gangguan', 2)
                ->Where('tingkatan',5)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
                } 
              ?>
            

           
        </div>
        
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal" id="stres">
    <div class="modal-dialog">
      <div class="modal-content">
     
        
        <div class="modal-header">
          <h4 class="modal-title">Saran Penanganan Stres</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
            
            <?php if ($skor_stress <= 9) {
                $satu =Solusi::where('gangguan', 3)
                ->Where('tingkatan',1)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
              } elseif ($skor_stress <= 13) {
                $satu =Solusi::where('gangguan', 3)
                ->Where('tingkatan',2)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
              } elseif ($skor_stress <= 20) {
                $satu =Solusi::where('gangguan', 3)
                ->Where('tingkatan',3)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
              } elseif ($skor_stress <= 27) {
                $satu =Solusi::where('gangguan', 3)
                ->Where('tingkatan',4)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
              } else {
                $satu =Solusi::where('gangguan', 3)
                ->Where('tingkatan',5)
                ->get();
                foreach ($satu as $sol){
                echo $sol->solusi.' <br>';
                }
              } 
            ?>
            

           
        </div>
        
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  


@endsection
