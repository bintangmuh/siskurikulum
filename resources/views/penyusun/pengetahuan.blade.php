@extends('adminlte::page')

@section('content_header')
  <h1>Pengetahuan</h1>
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Database Pengetahuan</h3>
        </div>
      </div>
    </div>

    {{-- Pengetahuan Terpilih --}}
    <div class="col-sm-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Pengetahuan D3 Manajemen Informatika</h3>
        </div>
      </div>
    </div>
  </div>
@endsection
