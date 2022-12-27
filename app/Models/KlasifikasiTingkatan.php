<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlasifikasiTingkatan extends Model
{
    protected $table = 'tb_klasifikasi_tingkatan';
    protected $fillable = [
        'kode_tingkatan',
        'tingkatan'
    ];

    public function Solusi(){
        return $this->belongsTo('App\Models\Solusi');
    }

}
