<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Gejala;
use App\Models\Klasifikasi;

class GejalaController extends Controller
{

    public function __construct(){

        $this->data = new Gejala();
    }

    public function index(){
        $data = $this->data->getTbKlasifikasiGejala();
        return view('admin.gejala.index', compact('data'));
    }

    public function indexp(){
        $data = $this->data->getTbKlasifikasiGejala();
        return view('pakar.gejala.index', compact('data'));
    }

    public function create(){
    
	 	$kode_gejala = "G0";

        $data = Gejala::all();
        return view('admin.gejala.create', compact('data'))
        ->with('kode_gejala',$kode_gejala);
    }

    public function store(Request $request){
        $request->validate([
            'nama_gejala' => 'required',
            'kode_gejala' => 'required'
           
        ]);

        $data = Gejala::create([
            'nama_gejala'=> $request->nama_gejala,
            'kode_gejala'=> $request->kode_gejala
            
        ]);

        return redirect('admin/gejala')->with('sukses', 'data berhasil di tambahkan');
    }

    public function destroy($id){
        $data = Gejala::findorfail($id);
        $data->delete();

        return redirect('admin/gejala')->with('sukses','data berhasil di hapus');
    }

    public function edit($id){
        $data = Gejala::findOrFail($id);

        return view('admin.gejala.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $rule = Gejala::findOrFail($id);

        $request->validate([
            'nama_gejala' => 'required',
            'kode_gejala' => 'required'
           
        ]);

        $rule->nama_gejala = $request->nama_gejala;
        $rule->kode_gejala = $request->kode_gejala;
        
        $rule->save();

        return redirect('admin/gejala')->with('sukses', 'Berhasil diubah');
    }
}
