<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KlasifikasiTingkatan;

class KlasifikasiTingkatanController extends Controller
{
    public function index(){
        $data = KlasifikasiTingkatan::all();
        return view('admin.klastingkatan.index', compact('data'));
    }
    public function indexp(){
        $data = KlasifikasiTingkatan::all();
        return view('pakar.klastingkatan.index', compact('data'));
    }

    public function create(){
        KlasifikasiTingkatan::all();
        return view('admin.klastingkatan.create');
    }

    public function store(Request $request){
        $request->validate([
            'tingkatan'=>'required'
            
        ]);

        KlasifikasiTingkatan::create([
            'tingkatan'=>$request->tingkatan
           
        ]);

        return redirect('admin/klastingkatan')->with('sukses','data berhasil di tambahkan');
    }

    public function destroy($id){
        $data = KlasifikasiTingkatan::findorfail($id);
        $data->delete();

        return redirect('admin/klastingkatan')->with('sukses','data berhasil di hapus');
    }

    public function edit($id){
        $data = KlasifikasiTingkatan::findOrFail($id);

        return view('admin.klastingkatan.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $rule = KlasifikasiTingkatan::findOrFail($id);

        $request->validate([
            
            'tingkatan' => 'required'
            
        ]);

        $rule->tingkatan = $request->tingkatan;
        
        
        $rule->save();

        return redirect('admin/klastingkatan')->with('sukses', 'Berhasil diubah');
    }
}
