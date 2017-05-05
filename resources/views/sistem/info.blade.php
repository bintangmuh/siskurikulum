@extends('adminlte::page')

@section('title', 'Dashboard System')

@section('content_header')
  <h1>Kurikulum Saat Ini - Kurikulum Maker</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Profil Lulusan</h3>
        </div>
        <div class="box-body">
          <p>Diharapkan mahasiswa lulusan D3 Manajemen Informatika memiliki sikap sebagai berikut:</p>
          <ol>
            @for ($i=0; $i < 3; $i++)
              <li>Engineer</li>
              <li>Programmer</li>
              <li>DBAdmin</li>
            @endfor
          </ol>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Sikap</h3>
        </div>
        <div class="box-body">
          <p>Diharapkan mahasiswa lulusan D3 Manajemen Informatika memiliki sikap sebagai berikut:</p>
          <ol>
            @for ($i=0; $i < 9; $i++)
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </li>
            @endfor
          </ol>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Pengetahuan</h3>
        </div>
        <div class="box-body">
          <p>Diharapkan mahasiswa lulusan D3 Manajemen Informatika memiliki sikap sebagai berikut:</p>
          <ol>
            @for ($i=0; $i < 9; $i++)
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </li>
            @endfor
          </ol>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Keterampilan Umum</h3>
        </div>
        <div class="box-body">
          <p>Diharapkan mahasiswa lulusan D3 Manajemen Informatika memiliki sikap sebagai berikut:</p>
          <ol>
            @for ($i=0; $i < 9; $i++)
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </li>
            @endfor
          </ol>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Keterampilan Khusus</h3>
        </div>
        <div class="box-body">
          <p>Diharapkan mahasiswa lulusan D3 Manajemen Informatika memiliki sikap sebagai berikut:</p>
          <ol>
            @for ($i=0; $i < 9; $i++)
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </li>
            @endfor
          </ol>
        </div>
      </div>
    </div>
  </div>
@stop
