@extends('adminlte::page')

@section('title', 'Dashboard System')

@section('content_header')
  <h1>Dashboard - Kurikulum Maker</h1>
@endsection

@section('content')
  <div class="row">
    <!-- Apply any bg-* class to to the info-box to color it -->
    <div class="col-sm-6">
      <div class="info-box bg-blue">
        <span class="info-box-icon"><i class="fa fa-database"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Lengkapi Database</span>
          <span class="progress-description">
            Membentuk database bahan kurikulum <br> <a href="{{ url('/sikap') }}" class="btn btn-default">Disini</a>
          </span>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-graduation-cap"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Buat Kurikulum</span>
          <span class="progress-description">
            Pembuatan Kurikulum <br>  <a href="{{ url('/rumusanpl') }}" class="btn btn-default">Disini</a>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

  </div>
@stop
