<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rule extends Model
{
    protected $table = 'tb_rule';
    protected $fillable = [
        'kode_rule',
        'nama_gejala',
        'jenis_gangguan'
    ];

    public function getTbGejala(){
        $data = DB::table('tb_gejala')
        ->join('tb_rule', 'tb_rule.nama_gejala', "=", "tb_gejala.nama_gejala")
        ->join('tb_gangguan', 'tb_rule.jenis_gangguan', "=", "tb_gangguan.jenis_gangguan")
        ->get();
    
        return($data);
    }

    


    

    public function Klasifikasi(){
        return $this->belongsTo('App\Models\Klasifikasi','jenis_gangguan');
    }

    public function Solusi(){
        return $this->belongsTo('App\Models\Solusi','solusi');
    }
}
