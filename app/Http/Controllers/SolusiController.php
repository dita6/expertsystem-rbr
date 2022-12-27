<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\{Solusi,Klasifikasi,KlasifikasiTingkatan};

class SolusiController extends Controller
{
    public function index(){
        $data = Solusi::select('tb_solusi.*', 'tb_gangguan.jenis_gangguan', 'tb_klasifikasi_tingkatan.tingkatan')->join('tb_gangguan', 'tb_gangguan.id', '=', 'tb_solusi.gangguan')->join('tb_klasifikasi_tingkatan', 'tb_klasifikasi_tingkatan.id', '=', 'tb_solusi.tingkatan')->get();
        return view('admin.solusi.index', compact('data'));
    }

    public function indexp(){
        $data = Solusi::select('tb_solusi.*', 'tb_gangguan.jenis_gangguan', 'tb_klasifikasi_tingkatan.tingkatan')->join('tb_gangguan', 'tb_gangguan.id', '=', 'tb_solusi.gangguan')->join('tb_klasifikasi_tingkatan', 'tb_klasifikasi_tingkatan.id', '=', 'tb_solusi.tingkatan')->get();
        return view('pakar.solusi.index', compact('data'));
    }

    public function create(){
        Solusi::all();
        $klas = Klasifikasi::all();
        $kt = KlasifikasiTingkatan::all();
        return view('admin.solusi.create', compact('klas','kt'));
       
    }

    public function store(Request $request){
        $request->validate([
            'gangguan'=>'required' ,
            'tingkatan'=> 'required',
            'solusi'=> 'required'
        ]);

        $data = Solusi::create([
            'gangguan'=> $request->gangguan,
            'tingkatan'=> $request->tingkatan,
            'solusi'=> $request->solusi
            
        ]);

        return redirect('admin/solusi')->with('sukses', 'data berhasil di tambahkan');
    }

    public function destroy($id){
        $hapus = Solusi::findorfail($id);
        $hapus->delete();

        return redirect('admin/solusi')->with('sukses','data berhasil di hapus');
    }

    public function edit($id){
        $data = Solusi::findOrFail($id);
        $klas = Klasifikasi::all();
        $kt = KlasifikasiTingkatan::all();

        return view('admin.solusi.edit', compact('data','klas','kt'));
    }

    public function update(Request $request, $id){
        $rule = Solusi::findOrFail($id);

        $request->validate([
            
            'solusi'=> 'required'
        ]);

        
        $rule->solusi = $request->solusi;
        
        $rule->save();

        return redirect('admin/solusi')->with('sukses', 'Berhasil diubah');
    }
}

