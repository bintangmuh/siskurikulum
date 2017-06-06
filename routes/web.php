<?php
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
    return redirect('/login');
});

Route::get('/login', function() {
  return view('login');
});

Route::get('/dashboard', function() {
  return view('sistem.dashboard');
});

Route::get('/info', function() {
  return view('sistem.info');
});

Route::get('/cpl', function() {
  return view('sistem.cpl');
});


Route::get('/struktur', function() {
  return view('penyusun.struktur');
});

Route::get('/okupansi', function() {
  return view('pembentuk.profillulusan');
});

Route::get('/okupansi/view', function() {
  return view('pembentuk.profillulusanview');
});

Route::get('/bahankajian', function() {
  return view('pembentuk.bahankajian');
});

Route::get('/makul', function() {
  return view('pembentuk.matakuliah');
});

Route::get('/sikap', function() {
  return view('pembentuk.sikap');
});

Route::get('/pengetahuan', function() {
  return view('pembentuk.pengetahuan');
});

Route::get('/keterampilanumum', function() {
  return view('pembentuk.keterampilanumum');
});

Route::get('/keterampilankhusus', function() {
  return view('pembentuk.keterampilankhusus');
});


Route::post('/bahankajian', function() {
  Alert::success('Berhasil Menambahkan', 'Berhasil menambah masukan anda');

  return redirect()->back();
});
// Pembuatan Kurikulum
Route::get('/rumusanpl', function() {
  return view('penyusun.profillulusan');
});

Route::get('/rumusan/sikap', function() {
  return view('penyusun.sikap');
});

Route::get('/rumusan/pengetahuan', function() {
  return view('penyusun.pengetahuan');
});

Route::get('/rumusan/keterampilanumum', function() {
  return view('penyusun.keterampilanumum');
});

Route::get('/rumusan/keterampilankhusus', function() {
  return view('penyusun.keterampilankhusus');
});

Route::get('/rumusan/bahankajian', function() {
  return view('penyusun.bahankajian');
});

Route::get('/rumusan/matakuliah', function() {
  return view('penyusun.matakuliah');
});

Route::get('/rumusan/mapping', function() {
  return view('penyusun.mapping');
});

Route::get('/rumusan/profil/mapping', function() {
  return view('penyusun.mappingprofil');
});

Route::get('/rumusan/bk/mapping', function() {
  return view('penyusun.mappingBK');
});

Route::get('/rumusan/bk/mapping/sikap', function() {
  return view('penyusun.mappingsikapBK');
});

Route::get('/rumusan/bk/mapping/sikap/makul', function() {
  return view('penyusun.mappingsikapBK');
});

Route::get('/rumusan/bk/mapping/pengetahuan', function() {
  return view('penyusun.mappingpengetahuanBK');
});

Route::get('/rumusan/bk/mapping/ku', function() {
  return view('penyusun.mappingkuBK');
});

Route::get('/rumusan/bk/mapping/kk', function() {
  return view('penyusun.mappingkkBK');
});

Route::get('/rumusan/mk/mapping', function() {
  return view('penyusun.mappingmk');
});

Route::get('/rumusan/struktur', function() {
  return view('penyusun.mappingstruktur');
});

Route::get('/rumusan/konfirmasi', function() {
  return view('penyusun.konfirmasi');
});

Route::get('/kangen', function() {
  return view('sistem.master');
});
