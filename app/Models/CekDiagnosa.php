<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CekDiagnosa extends Model
{
    public function getTbGejala(){
        $data = DB::table('tb_gejala')
        ->join('tb_bobot_parameter_gejala', 'tb_bobot_parameter_gejala.bobot', '=', 'tb_gejala.nama_gejala')
       
        ->select('tb_gejala.*','tb_gejala.nama_gejala','tb_bobot_parameter_gejala.parameter')
        ->get();

        return($data);
    }

    public function getTbSolusi(){
        $solusi = DB::table('tb_solusi')
        ->join('tb_rule', 'tb_rule.jenis_gangguan', '=', 'tb_solusi.gangguan')
        ->select('tb_solusi.solusi')
        ->get();
    
        return($solusi);
    }
}
