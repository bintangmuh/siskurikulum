@extends('adminlte::page')

@section('content_header')
  <h1>Keterampilan Khusus</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Khusus</h3>
            </div>
          </div>
        </div>

        {{-- Tergantung Profil Lulusan --}}
        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Khusus Komputer Junior</h3>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Khusus Database Admin Junior</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Keterampilan Khusus Terpilih --}}
    <div class="col-sm-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Keterampilan Khusus D3 Manajemen Informatika</h3>
        </div>
      </div>
    </div>
  </div>
@endsection
