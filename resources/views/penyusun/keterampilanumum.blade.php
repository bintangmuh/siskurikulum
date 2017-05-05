@extends('adminlte::page')

@section('content_header')
  <h1>Keterampilan Umum</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Umum</h3>
            </div>
          </div>
        </div>

        {{-- Tergantung Profil Lulusan --}}
        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Umum Komputer Junior</h3>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Umum Database Admin Junior</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Keterampilan Umum Terpilih --}}
    <div class="col-sm-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Keterampilan Umum D3 Manajemen Informatika</h3>
        </div>
      </div>
    </div>
  </div>
@endsection
