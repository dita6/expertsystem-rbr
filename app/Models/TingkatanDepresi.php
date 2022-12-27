<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatanDepresi extends Model
{
    protected $table = 'tb_rule_tingkatan_depresi';
    protected $fillable = [
        'tingkatan',
        'rule'
    ];
}
