<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Klasifikasi;

class UserController extends Controller
{

    public function __construct(){

        $this->data = new User();
    }

    public function index(){
        $data = User::all();
        return view('pakar.user.index', compact('data'));
    }

    public function create(){
    
        $data = User::all();
        return view('pakar.user.index', compact('data'))
        ;
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request['password'])
        ]);

        return redirect('pakar/user')->with('sukses', 'data berhasil di tambahkan');
    }

    public function destroy($id){
        $data = User::findorfail($id);
        $data->delete();

        return redirect('pakar/user')->with('sukses','data berhasil di hapus');
    }

    public function edit($id){
        $data = User::findOrFail($id);

        return view('pakar.user.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $rule = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $rule->name = $request->name;
        $rule->email = $request->email;
        $rule->password = $request->password;
        $rule->save();

        return redirect('pakar/user')->with('sukses', 'Berhasil diubah');
    }
}
