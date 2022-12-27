<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Supports\Str;
use App\Models\NilaiGejala;

class NilaiGejalaController extends Controller
{
    public function index(){
        $data = NilaiGejala::all();
        return view('admin.nilai.index', compact('data'));
    }
    public function indexp(){
        $data = NilaiGejala::all();
        return view('pakar.nilai.index', compact('data'));
    }

    public function create(){
        NilaiGejala::all();
        return view('admin.nilai.create');
    }

    public function store(Request $request){
        $request->validate([
            'parameter'=>'required' ,
            'bobot'=> 'required'
        ]);

        $data = NilaiGejala::create([
            'parameter'=> $request->parameter,
            'bobot'=> $request->bobot
            
        ]);

        return redirect('admin/nilai')->with('sukses', 'data berhasil di tambahkan');
    }

    public function destroy($id){
        $hapus = NilaiGejala::findorfail($id);
        $hapus->delete();

        return redirect('admin/nilai')->with('sukses','data berhasil di hapus');
    }

    public function edit($id){
        $data = NilaiGejala::findOrFail($id);

        return view('admin.nilai.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $rule = NilaiGejala::findOrFail($id);

        $request->validate([
            'parameter'=>'required' ,
            'bobot'=> 'required'
        ]);

        $rule->parameter = $request->parameter;
        $rule->bobot = $request->bobot;
        
        $rule->save();

        return redirect('admin/nilai')->with('sukses', 'Berhasil diubah');
    }
}

