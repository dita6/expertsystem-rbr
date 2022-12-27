<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    protected $table = 'tb_solusi';
    protected $fillable = [
        'tingkatan',
        'gangguan',
        'solusi'
    ];

    

    public function KlasifikasiTingkatan(){
        return $this->belongsTo('App\Models\KlasifikasiTingkatan', 'tingkatan');
    }

    public function Klasifikasi(){
        return $this->belongsTo('App\Models\Klasifikasi','jenis_gangguan');
    }

    public function Rule(){
        return $this->hasOne('App\Models\Rule');
    }

}
