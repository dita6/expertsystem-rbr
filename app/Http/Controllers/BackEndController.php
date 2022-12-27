<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CekDiagnosa;
use App\Models\Gejala;
use App\Models\Hasil;
use App\Models\Depresi;
use App\Models\Kecemasan;
use App\Models\Solusi;
use App\Models\{Stress, Rule, NilaiGejala};
use Illuminate\Support\Facades\DB;
use Auth;

class BackEndController extends Controller
{
    public function __construct(){

        $this->data = new CekDiagnosa();
    }


    public function index(){
        

        return view('backend.index');
    }

   

    public function diagnosa(){
        $gejala = Gejala::all()->toArray();
        $bobot = NilaiGejala::all();
        return view('admin.diagnosa.index',
            compact('gejala', 'bobot'));
    }
    public function simpan_deteksi(Request $request){

        $id_soal = $request->id_pertanyaan;
        $jawaban = $request->jawaban;
        $jumlah = count($id_soal);

        for ($i=0; $i < $jumlah; $i++) { 
            $nomor = $id_soal[$i];
            
            if ($jawaban[$nomor] == '') {
                return redirect()->back()->with('error', 'Semua pertanyaan wajib diisi');
            } else {
                $jwb = $jawaban[$nomor];

                $dataPost[] = [
                    'id_user' => Auth::user()->id,
                    'id_pertanyaan' => $nomor,
                    'skor' => $jwb,
                ];
            }
        }

        $CekDiagnosaUser = Hasil::where('id_user', Auth::user()->id)->first();

        if (!empty($CekDiagnosaUser)) {
            Hasil::where('id_user', Auth::user()->id)->delete();
            Hasil::insert($dataPost);
        } else {
            Hasil::insert($dataPost);
        }

        return redirect('admin/diagnosa/output');
    }

    public function output(){
        $data = $this->data->getTbGejala();
        $solusi = $this->data->getTbSolusi();
        $satu = Solusi::where('id', 1)->first();
        $hasil = Hasil::where('id_user', Auth::user()->id)->get();
        $depresi = Rule::where('jenis_gangguan', 1)->first();
        $kecemasan = Rule::where('jenis_gangguan', 2)->first();
        $stress = Rule::where('jenis_gangguan', 3)->first();
        
        
        return view('admin/diagnosa/output', compact('hasil', 'depresi', 'kecemasan', 'stress','data','solusi'));
    }
}

