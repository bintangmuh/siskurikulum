@extends('adminlte::page')

@section('content_header')
  <h1>Mata Kuliah yang tersedia</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-content">
          <table class="table table-hovered">
            <thead>
              <th>No.</th>
              <th>Mata Kuliah</th>
              <!-- <th>SKS</th> -->
              <th>Bahan Kajian</th>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Agama</td>
                <!-- <td> 2 | 0</td> -->
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Kewarganegraan</td>
                <!-- <td> 2 | 0</td> -->
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Pancasila</td>
                <!-- <td> 2 | 0</td> -->
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Pemrograman</td>
                <!-- <td> 2 | 2</td> -->
                <td>Algoritma dan Pemrograman</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Struktur Data</td>
                <!-- <td> 2 | 2</td> -->
                <td>Algoritma dan Pemrograman</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Algoritma Pemrograman</td>
                <!-- <td> 2 | 2</td> -->
                <td>Algoritma dan Pemrograman</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="box-footer">
          <a href="#" class="btn btn-primary">Simpan dan Selanjutnya</a>
          {{-- <a href="#" class="btn btn-default right">Tambah Okupansi</a> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
