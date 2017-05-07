@extends('adminlte::page')

@section('content_header')
  <h1>Database Keterampilan Khusus</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12" style="margin-bottom: 20px;">
      <a href="#inputbaru" class="btn btn-primary">Tambah Keterampilan Khusus</a>
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
              <td>Orang yang mempunyai kemampuan untuk memahami kebutuhan bisnis dalam sebuah organisasi</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Orang yang mempunyai kemampuan untuk menemukan isu penting dalam organisasi</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Orang yang mempunyai kemampuan untuk menemukan kekuatan dan kelemahan organisasi dan saran perbaikannya</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Orang yang mempunyai kemampuan untuk melihat dan memperbaiki kebutuhan organisasi</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Orang yang mempunyai kemampuan untuk mengindentifikasi proses bisnis organisasi</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Orang yang mempunyai kemampuan melakukan Perancangan basis data.</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Orang yang mempunyai kemampuan dalam bidang arsitektur enterprise, strategi manajemen dan rekayasa sistem informasi dengan memanfaatkan teknologi informasi terkini.</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    {{-- Tambah Baru --}}
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
