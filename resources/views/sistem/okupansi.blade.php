@extends('adminlte::page')

@section('title', 'Okupansi dalam Industri')

@section('content_header')
  <h1>Okupansi dalam Industri - Kurikulum Maker</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-default">
        <div class="box-header with-border">
          <p class="box-title">Test</p>
        </div>
        <div class="box-body">
          <table class="table table-responsive">
            <thead>
              <th>Okupansi</th>
              <th>Aksi</th>
            </thead>
          </table>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="box box-default">
        <div class="box-header with-border">
          <p class="box-title">Test</p>
        </div>
        <div class="box-body">
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <label for="Nama Pekerjaan">Nama Pekerjaan:</label>
              <input type="text" name="namakerja" class="form-control" value="">
            </div>

            <div class="form-group">
              <label for="Nama Pekerjaan">Okupansi Pekerjaan:</label>
              <input type="text" name="namakerja" class="form-control" value="">
            </div>

            <div class="form-group">
              <label for="Nama Pekerjaan">Keahlian:</label>
              <input type="text" name="keahlian[]" class="form-control" value="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

  </div>
@stop
