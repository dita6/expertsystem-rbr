<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Riwayat extends Model
{
    protected $table = 'tb_hasil';
    protected $fillable = [
        'id_user',
        'id_pertanyaan',
        'skor'
    ];


public function getTbHasil(){

    

    $data  = DB::table('tb_hasil')
    ->select('tb_hasil.*', 'users.name', 'tb_hasil.id_user', 'users.email', 'users.id','tb_gejala.nama_gejala','tb_bobot_parameter_gejala.parameter')
    ->join('users','tb_hasil.id_user', '=', 'users.id')
    ->join('tb_gejala','tb_hasil.id_pertanyaan','=','tb_gejala.id')
    ->join('tb_bobot_parameter_gejala','tb_hasil.skor','=','tb_bobot_parameter_gejala.bobot')
    
    // ->count('id_user')
    // ->groupBy('id_user')
    // ->havingRaw('count(id_user) > ?', [1])
    ->get();


    return($data);
}

public function getUsers(){
    $user  = DB::table('users')
    // ->select('tb_hasil.created_at','users.name','users.email',)
    // ->join('tb_hasil','tb_hasil.id_user','=','users.id')
   
    ->get();
    return($user);
}

    public function Rule(){
        return $this->hasOne('App\Models\Rule');
    }
}
