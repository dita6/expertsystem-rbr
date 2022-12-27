<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Klasifikasi;
use App\Models\Gejala;

class KlasifikasiController extends Controller
{
    public function index(){
        $data = Klasifikasi::all();
        return view('admin.klasifikasi.index', compact('data'));
    }

    public function indexp(){
        $data = Klasifikasi::all();
        return view('pakar.klasifikasi.index', compact('data'));
    }

    public function create(){
        Klasifikasi::all();
        return view('admin.klasifikasi.create');
    }

    public function store(Request $request){
        $request->validate([
            'jenis_gangguan'=>'required',
            'kode_gangguan'=>'required'
        ]);

        Klasifikasi::create([
            'jenis_gangguan'=>$request->jenis_gangguan,
            'kode_gangguan'=>$request->kode_gangguan
        ]);

        return redirect('admin/klasifikasi')->with('sukses','data berhasil di tambahkan');
    }

    public function destroy($id){
        $data = Klasifikasi::findorfail($id);
        $data->delete();

        return redirect('admin/klasifikasi')->with('sukses','data berhasil di hapus');
    }

    public function edit($id){
        $data = Klasifikasi::findOrFail($id);

        return view('admin.klasifikasi.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $rule = Klasifikasi::findOrFail($id);

        $request->validate([
            'jenis_gangguan' => 'required',
            'kode_gangguan' => 'required'
            
        ]);

        $rule->jenis_gangguan = $request->jenis_gangguan;
        $rule->kode_gangguan = $request->kode_gangguan;
        
        $rule->save();

        return redirect('admin/klasifikasi')->with('sukses', 'Berhasil diubah');
    }
}
