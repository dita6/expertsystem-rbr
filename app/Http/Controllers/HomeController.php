<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dd(auth()->user()->hasRole('admin'));
        if (auth()->user()->hasRole('pakar')){
        return view('home');
        }elseif (auth()->user()->hasRole('admin')){
            return view('pakar/home');
        }else{
            return view('dashboard');
        }
    }
}
