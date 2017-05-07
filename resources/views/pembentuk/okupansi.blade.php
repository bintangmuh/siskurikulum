@extends('adminlte::page')

@section('title', 'Okupansi dalam Industri')

@section('content_header')
  <h1>Okupansi dalam Industri - Kurikulum Maker</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      {{-- Callout --}}
      <div class="callout callout-info">
        <h4>Informasi</h4>
        <p>Okupansi ini bisa menjadi dasar pemilihan Profil Lulusan yang diinginkan</p>
      </div>
      {{-- End of Callout --}}

      <div class="box box-default">
        <div class="box-header with-border">
          <p class="box-title">Okupansi di Dunia Industri</p>
        </div>
        <div class="box-body">
          <table class="table table-responsive">
            <thead>
              <th>No</th>
              <th>Okupansi</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Programmer mobile application</td>
                <td>Lulusan ini diharapkan akan mampu memahami dasar pemrograman berbasis obyek, pembuatan antara muka grafis, teknologi jaringan wireless, dan memahami pemrograman mobile.</td>
                <td><a href="{{ url('/okupansi/view')}}" class="btn btn-primary">Lihat</a></td>
                <td><a href="#" class="btn btn-danger">Hapus</a></td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Pengembang Web</td>
                <td>Lulusan ini diharapkan akan mampu memahami dasar pemrograman berbasis obyek, pembuatan antara muka grafis, pemrograman berbasis web, desain web, keamanan web/jaringan, konsep dan manajemen basis data terdistribusi, dan memahami keamanan system informasi.</td>
                <td><a href="#" class="btn btn-primary">Lihat</a></td>
                <td><a href="#" class="btn btn-danger">Hapus</a></td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Database Administrator</td>
                <td>Lulusan ini diharapkan akan mampu memahami manajemen basis data, kinerja jaringan computer, dan memahami keamanan system</td>
                <td><a href="#" class="btn btn-primary">Lihat</a></td>
                <td><a href="#" class="btn btn-danger">Hapus</a></td>
              </tr>
              <tr>
                <td>4.</td>
                <td>Rancangan E-Business</td>
                <td>Mempunyai keahlian dalam memanfaatkan teknologi informasi terkini untuk menemukenali, merumuskan, dan memecahkan masalah e-business</td>
                <td><a href="#" class="btn btn-primary">Lihat</a></td>
                <td><a href="#" class="btn btn-danger">Hapus</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="box box-default">
        <div class="box-header with-border">
          <p class="box-title">Tambah okupansi</p>
        </div>
        <div class="box-body">
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <label for="Nama Pekerjaan">Nama Pekerjaan:</label>
              <input type="text" name="namakerja" class="form-control" value="">
            </div>

            <div class="form-group">
              <label for="Deskripsi Pekerjaan">Deskripsi Pekerjaan:</label>
              <textarea name="name" class="form-control" rows="8" cols="80"></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="button">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

  </div>
@stop
