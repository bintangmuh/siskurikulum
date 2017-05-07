@extends('adminlte::page')

@section('content_header')
  <h1>Database Pengetahuan</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12" style="margin-bottom: 20px;">
      <a href="#inputbaru" class="btn btn-primary ">Tambah Pengetahuan</a>
    </div>

    <div class="col-sm-12">
      <div class="box box-primary">
        <table class="table">
          <thead>
            <th>No.</th>
            <th>Capaian</th>
            <th></th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mampu memahami prinsip dan mekanisme kerja sistem komputer</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Mampu melakukan analisis, desain dan membangun sistem Informasi</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Mampu membangun system berbasis web dan mobile application</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Mampu melakukan analisis dan desain basis data </td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Mampu melakukan perencanaan pengembangan system informasi</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    {{-- Input Baru  --}}
    <div class="col-sm-12" id="inputbaru">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Tambah Capaian Baru</h3>
        </div>
        <div class="box-body">
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Capaian Pembelajaran..." name="" value="">
            </div>
            <div class="form-group">
              <button type="button" name="button" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
