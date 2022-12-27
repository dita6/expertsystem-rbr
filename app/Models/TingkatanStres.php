<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatanStres extends Model
{
    protected $table = 'tb_rule_tingkatan_stres';
    protected $fillable = [
        'tingkatan',
        'rule'
    ];

}
