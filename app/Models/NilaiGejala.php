<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiGejala extends Model
{
    protected $table = 'tb_bobot_parameter_gejala';
    protected $fillable = [
        'parameter',
        'bobot'
    ];

    public function klasifikasi(){
       return $this->hasMany(App\Models\Klasifikasi::class);
    }

}
