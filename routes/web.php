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
    return view('welcome');
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

Route::get('/okupansi', function() {
  return view('sistem.okupansi');
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

Route::get('/kangen', function() {
  return view('sistem.master');
});
