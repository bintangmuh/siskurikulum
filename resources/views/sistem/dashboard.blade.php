@extends('adminlte::page')

@section('title', 'Dashboard System')

@section('content_header')
  <h1>Dashboard - Kurikulum Maker</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-6">
      <h3>Membentuk Database</h3>
      <a href="#" class="btn btn-primary btn-block">Input LO</a>
      <a href="#" class="btn btn-primary btn-block">Input Profil Lulusan</a>
      <a href="#" class="btn btn-primary btn-block">Input Bahan Kajian</a>
      <a href="#" class="btn btn-primary btn-block">Input Mata Kuliah</a>
    </div>
    <div class="col-sm-6">
      <h3>Membentuk Aturan</h3>
      <a href="#" class="btn btn-primary btn-block">Formulasi Mata Kuliah</a>
      <a href="#" class="btn btn-primary btn-block">Formulasi Semester</a>
    </div>
  </div>

  <div class="row">

  </div>
@stop
