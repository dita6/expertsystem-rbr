<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = 'tb_hasil';
    // public $timestamps = true;
    protected $fillable = [
        'id_pertanyaan',
        'skor',
        'created_at'
    ];

    public function GetUserID(){

        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
