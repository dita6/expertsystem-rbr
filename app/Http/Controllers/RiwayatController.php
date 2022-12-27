<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Riwayat;
use App\Models\CekDiagnosa;
use App\Models\Gejala;
use App\Models\Hasil;
use App\Models\Depresi;
use App\Models\Kecemasan;
use App\Models\Solusi;
use App\Models\{Stress, Rule, NilaiGejala};

class RiwayatController extends Controller
{

    public function __construct(){

        $this->data = new Riwayat();
    }

    public function index(){
        $data = $this->data->getTbHasil();
        $users = $this->data->getUsers();
        
        
      
        return view('admin.riwayat.index', compact('data','users'));
    }

    public function indexp(){
        $data = $this->data->getTbHasil();
      
        return view('pakar.riwayat.index', compact('data'));
    }

    
    public function detail($id_user){
        
        $data = $this->data->getTbHasil()
        ->where('id_user',$id_user)
        ;
        
        $satu = Solusi::where('id', 1)->first();
        $hasil = Hasil::where('id_user', $id_user)->get();
        $depresi = Rule::where('jenis_gangguan', 1)->first();
        $kecemasan = Rule::where('jenis_gangguan', 2)->first();
        $stress = Rule::where('jenis_gangguan', 3)->first();
        
        return view('admin.riwayat.detail', compact('hasil', 'depresi', 'kecemasan', 'stress','data'));
    }

    

    public function destroy($id_user){
        $data = Riwayat::find($id_user);
        $data->delete();

        return redirect('admin/riwayat')->with('sukses','data berhasil di hapus');
    }

    public function hasil(){
        $data = $this->data->getTbGejala();
        $solusi = $this->data->getTbSolusi();
        $satu = Solusi::where('id', 1)->first();
        $hasil = Hasil::where('id_user', Auth::user()->id)->get();
        $depresi = Rule::where('jenis_gangguan', 1)->first();
        $kecemasan = Rule::where('jenis_gangguan', 2)->first();
        $stress = Rule::where('jenis_gangguan', 3)->first();
        dd($depresi);
        
        

        return view('admin/riwayat/detail', compact('hasil', 'depresi', 'kecemasan', 'stress','data','solusi'));
    }
}
