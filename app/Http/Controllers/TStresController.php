<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TingkatanStres;

class TStresController extends Controller
{
    public function index(){
        $data = TingkatanStres::all();
        return view('admin.klastingkatan.stres.index', compact('data'));
    }
}
