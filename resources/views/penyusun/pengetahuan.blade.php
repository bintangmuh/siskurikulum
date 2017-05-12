@extends('adminlte::page')

@section('content_header')
  <h1>Pengetahuan</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Database Pengetahuan</h3>
        </div>
        <div class="box-body">
          <table class="table">
            <thead>
              <th>No.</th>
              <th>Capaian</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu memahami prinsip dan mekanisme kerja sistem komputer</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu melakukan analisis, desain dan membangun sistem Informasi</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu membangun system berbasis web dan mobile application</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu melakukan analisis dan desain basis data </td>
              </tr>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu melakukan perencanaan pengembangan system informasi</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="box-footer">
          <a href="{{ url('/rumusan/keterampilanumum') }}" class="btn btn-primary">Simpan dan Selanjutnya</a>
        </div>
      </div>
    </div>

    {{-- Pengetahuan Terpilih --}}
    {{-- <div class="col-sm-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Pengetahuan D3 Manajemen Informatika</h3>
        </div>
      </div>
    </div> --}}
  </div>
@endsection
