<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatanKecemasan extends Model
{
    protected $table = 'tb_rule_tingkatan_kecemasan';
    protected $fillable = [
        'tingkatan',
        'rule'
    ];
}
