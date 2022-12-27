<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\{Rule,Gejala,Klasifikasi};

class RuleController extends Controller

{
    public function __construct(){

        $this->data = new Rule();
    }
    public function index(){
        $data = Rule::select('tb_rule.*', 'tb_gangguan.jenis_gangguan')
        ->join('tb_gangguan', 'tb_gangguan.id', '=', 'tb_rule.jenis_gangguan')->get();

        return view('admin.rule.index', compact('data'));
    }

    public function indexp(){
        $data = Rule::select('tb_rule.*', 'tb_gangguan.jenis_gangguan')
        ->join('tb_gangguan', 'tb_gangguan.id', '=', 'tb_rule.jenis_gangguan')->get();

        return view('pakar.rule.index', compact('data'));
    }

    public function create(){

        $iduser2 = '3';
        $iduser2++;
	 	$kode_rule = "R0"."$iduser2";

        $gejala = Gejala::all();
        $ks = Klasifikasi::all();
        return view('admin.rule.create', compact('gejala','ks'))
        ->with('kode_rule',$kode_rule);
    }

    public function store(Request $request){
        $request->validate([
            'kode_rule' => 'required',
            'nmGejala'=>'required',
            'ks'=>'required'
        ]);

        $store = Rule::create ([
            'kode_rule'=>$request->kode_rule,
            'nama_gejala'=> implode(",",$request->nmGejala),
            'jenis_gangguan'=>$request->ks
        ]);

        return redirect('admin/rule')->with('sukses','data berhasil ditambahkan');
    }

    public function destroy($id){
        
        $data = Rule::findorfail($id);
        $data->delete();

        return redirect('admin/rule')->with('sukses','data berhasil di hapus');
    }

    public function edit($id){
        $data = Rule::findOrFail($id);
        $gejala = Gejala::all();
        $ks = Klasifikasi::all();

        return view('admin.rule.edit', compact('data', 'gejala', 'ks'));
    }

    public function update(Request $request, $id){
        $rule = Rule::findOrFail($id);

        $request->validate([
            'kode_rule' => 'required',
            'nmGejala' => 'required'
        ]);

        $rule->kode_rule = $request->kode_rule;
        $rule->nama_gejala = implode(',', $request->nmGejala);
        $rule->save();

        return redirect('admin/rule')->with('sukses', 'Berhasil diubah');
    }

  
}
