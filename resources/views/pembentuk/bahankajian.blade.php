@extends('adminlte::page')

@section('content_header')
  <h1>Bahan Kajian</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12" style="margin-bottom: 20px;">
      <a href="#" class="btn btn-primary btn" data-toggle="modal" data-target="#tambahbk">Tambah Bahan Kajian</a>
    </div>
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Bahan Kajian</h3>
        </div>
        <div class="box-content">
          <table class="table">
            <thead>
              <th>No.</th>
              <th>Bahan Kajian</th>
              <th>Deskripsi</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Matematika & Statistika</td>
                <td>
                  Kelompok kajian Matematika & Statistik terdiri dari mata kuliah-mata kuliah Statistika dan Matematika yang bersifat numerik yang mendukung dalam proses komputasi program,
                </td>

                <td>
                  <!-- <a href="#" class="btn btn-primary">edit</a>
                  <a href="#" class="btn btn-danger">delete</a> -->
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Algoritma & Pemrograman</td>
                <td>
                  Kelompok kajian algoritma dan pemrograman terdiri dari mata kuliahmata kuliah yang mendukung proses algoritma, eksekusi program dan juga software pemrograman yang dipakai dalam membangun system aplikasi berbasis computer,
                </td>

                <td>
                  <!-- <a href="#" class="btn btn-primary">edit</a>
                  <a href="#" class="btn btn-danger">delete</a> -->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<div id="tambahbk" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Tambah Bahan Kajian</h4>
    </div>
    <div class="modal-body">
      <div class="row">
        <form class="" action="{{ url('/bahankajian')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="namabk" class="col-sm-4">Nama Bahan Kajian: </label>
            <div class="col-sm-12">
              <input type="text" id="namabk" class="form-control col-sm-8" name="" value="" placeholder="Bahan Kajian Baru">
            </div>
          </div>
          <div class="form-group">
            <label for="namabk" class="col-sm-4">Deskripsi Bahan Kajian: </label>
            <div class="col-sm-12">
              <textarea name="deskripsibk" class="form-control" rows="8" cols="80" placeholder="Deskripsi Bahan Kajian Baru"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <br>
              <button type="submit" class="btn btn-primary" name="button">Simpan</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
    </div>
  </div>

</div>
</div>
@endsection
