<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gejala extends Model
{
    protected $table = 'tb_gejala';
    protected $fillable = [
        'nama_gejala',
        'kode_gejala',
       
    ];


public function getTbKlasifikasiGejala(){
    $data = DB::table('tb_gejala')
    ->get();

    return($data);
}

    public function Rule(){
        return $this->hasOne('App\Models\Rule');
    }
}
