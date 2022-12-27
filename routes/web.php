<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});






Route::group(['middleware'=> ['role:pasien']], function(){
    Route::get('/dashboard', 'FrontEndController@index');
    Route::get('/homee', 'FrontEndController@home')->name('homee');
    Route::get('/diagnosa', 'FrontEndController@diagnosa')->name('diagnosa');
    Route::post('/simpan-diagnosa', 'FrontEndController@simpan_diagnosa')->name('simpan-diagnosa');
    Route::get('/hasil', 'FrontEndController@hasil')->name('hasil');
});


Route::group(['middleware'=>['role:pakar']], function (){

    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Routing to Gejala
    
    Route::get('/admin/gejala','GejalaController@index')->name('gejala.index');
    Route::get('/admin/gejala/create','GejalaController@create')->name('gejala.create');
    Route::post('/admin/gejala/store','GejalaController@store')->name('gejala.store');
    Route::get('/admin/gejala/edit/{id}','GejalaController@edit')->name('gejala.edit');
    Route::post('/admin/gejala/update/{id}','GejalaController@update')->name('gejala.update');
    Route::get('/admin/gejala/destroy/{id}','GejalaController@destroy')->name('gejala.destroy');


    //Routing to Klasifikasi
    Route::get('/admin/klasifikasi','KlasifikasiController@index')->name('klasifikasi.index');
    Route::get('/admin/klasifikasi/create','KlasifikasiController@create')->name('klasifikasi.create');
    Route::post('/admin/klasifikasi/store','KlasifikasiController@store')->name('klasifikasi.store');
    Route::get('/admin/klasifikasi/edit/{id}','KlasifikasiController@edit')->name('klasifikasi.edit');
    Route::post('/admin/klasifikasi/update/{id}','KlasifikasiController@update')->name('klasifikasi.update');
    Route::get('/admin/klasifikasi/destroy/{id}','KlasifikasiController@destroy')->name('klasifikasi.destroy');

    //Routing to Nilai
    Route::get('/admin/nilai','NilaiGejalaController@index')->name('nilai.index');
    Route::get('/admin/nilai/create','NilaiGejalaController@create')->name('nilai.create');
    Route::get('/admin/nilai/destroy/{id}','NilaiGejalaController@destroy')->name('nilai.destroy');
    Route::post('/admin/nilai/store','NilaiGejalaController@store')->name('nilai.store');
    Route::get('/admin/nilai/edit/{id}','NilaiGejalaController@edit')->name('nilai.edit');
    Route::post('/admin/nilai/update/{id}','NilaiGejalaController@update')->name('nilai.update');


    //Routing to Klasifikasi Tingkatan
    Route::get('/admin/klastingkatan','KlasifikasiTingkatanController@index')->name('klasifikasiT.index');
    Route::get('/admin/klastingkatan/create','KlasifikasiTingkatanController@create')->name('klasifikasiT.create');
    Route::post('/admin/klastingkatan/store','KlasifikasiTingkatanController@store')->name('klasifikasiT.store');
    Route::get('/admin/klastingkatan/edit/{id}','KlasifikasiTingkatanController@edit')->name('klasifikasiT.edit');
    Route::post('/admin/klastingkatan/update/{id}','KlasifikasiTingkatanController@update')->name('klasifikasiT.update');
    Route::get('/admin/klastingkatan/destroy/{id}','KlasifikasiTingkatanController@destroy')->name('klasifikasiT.destroy');

    //Routing to Rule
    Route::get('/admin/rule','RuleController@index')->name('rule.index');
    Route::get('/admin/rule/create','RuleController@create')->name('rule.create');
    Route::post('/admin/rule/store','RuleController@store')->name('rule.store');
    Route::get('/admin/rule/edit/{id}','RuleController@edit')->name('rule.edit');
    Route::post('/admin/rule/update/{id}','RuleController@update')->name('rule.update');
    Route::get('/admin/rule/destroy/{id}','RuleController@destroy')->name('rule.destroy');

    //Routing to Riwayat
    Route::get('/admin/riwayat','RiwayatController@index')->name('riwayat.index');
    Route::get('/admin/riwayat/detail/{id_user}','RiwayatController@detail')->name('riwayat.detail');
    Route::get('/admin/riwayat/destroy/{id_user}','RiwayatController@destroy')->name('riwayat.destroy');

    //Routing to Solusi
    Route::get('/admin/solusi','SolusiController@index')->name('solusi.index');
    Route::get('/admin/solusi/create','SolusiController@create')->name('solusi.create');
    Route::post('/admin/solusi/store','SolusiController@store')->name('solusi.store');
    Route::get('/admin/solusi/edit/{id}','SolusiController@edit')->name('solusi.edit');
    Route::post('/admin/solusi/update/{id}','SolusiController@update')->name('solusi.update');
    Route::get('/admin/solusi/destroy/{id}','SolusiController@destroy')->name('solusi.destroy');

    // Routing to deteksi
    Route::get('/admin/diagnosa', 'BackEndController@diagnosa')->name('deteksi');
    Route::post('/simpan-deteksi', 'BackEndController@simpan_deteksi')->name('simpan-deteksi');
    Route::get('/admin/diagnosa/output', 'BackEndController@output')->name('diagnosa.output');

    

    
});

Route::group(['middleware'=>['role:admin']], function (){

    Route::get('/dashboardp', 'FrontEndController@indexp');
    Route::get('/hom', [App\Http\Controllers\HomeController::class, 'index'])->name('hom');
    // Routing to Gejala
    
    Route::get('/pakar/gejala','GejalaController@indexp')->name('gejala.indexp');


    //Routing to Klasifikasi
    Route::get('/pakar/klasifikasi','KlasifikasiController@indexp')->name('klasifikasi.indexp');
   

    //Routing to Nilai
    Route::get('/pakar/nilai','NilaiGejalaController@indexp')->name('nilai.indexp');
    


    //Routing to Klasifikasi Tingkatan
    Route::get('/pakar/klastingkatan','KlasifikasiTingkatanController@indexp')->name('klasifikasiT.indexp');
    

    //Routing to Rule
    Route::get('/pakar/rule','RuleController@indexp')->name('rule.indexp');
    

    //Routing to Riwayat
    Route::get('/pakar/riwayat','RiwayatController@indexp')->name('riwayat.indexp');
    
    

    //Routing to Solusi
    Route::get('/pakar/solusi','SolusiController@indexp')->name('solusi.indexp');
   

     // Routing to user
     Route::get('/pakar/user', 'UserController@index')->name('user.index');
     Route::get('/pakar/user/create','UserController@create')->name('user.create');
    Route::post('/pakar/user/store','UserController@store')->name('user.store');
    Route::get('/pakar/user/edit/{id}','UserController@edit')->name('user.edit');
    Route::post('/pakar/user/update/{id}','UserController@update')->name('user.update');
    Route::get('/pakar/user/destroy/{id}','UserController@destroy')->name('user.destroy');


    
});
Auth::routes();
