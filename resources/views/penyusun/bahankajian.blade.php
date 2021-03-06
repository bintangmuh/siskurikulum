@extends('adminlte::page')

@section('content_header')
  <h1>Menyusun Bahan Kajian</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Database Bahan Kajian</h3>
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
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Statistika</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Algoritma</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Rekayasa Perangkat Lunak</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Arsitektur Komputer</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="box-footer">
          <a href="{{ url('/rumusan/konfirmasi') }}" class="btn btn-primary">Simpan dan Selanjutnya</a>
          {{-- <a href="#" class="btn btn-default right">Tambah Okupansi</a> --}}
        </div>
      </div>
    </div>

    {{-- <div class="col-sm-6">
      <div class="box box-primary fixed">
        <div class="box-header">
          <h3 class="box-title">Sikap Capaian Lulusan D3 - Manajemen Informatika</h3>
        </div>
      </div>
    </div> --}}
  </div>
@endsection
