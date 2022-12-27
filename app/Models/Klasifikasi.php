<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    protected $table = 'tb_gangguan';
    protected $fillable = [
        'jenis_gangguan',
        'kode_gangguan'
    ];

    public function Rule(){
        return $this->belongsTo('App\Models\Rule');
    }

    public function Solusi(){
        return $this->belongsTo('App\Models\Solusi');
    }
}
