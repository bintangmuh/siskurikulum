@extends('adminlte::page')

@section('title', 'Profil Lulusan')

@section('content_header')
  <h1>Profil Lulusan - Kurikulum Maker</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      {{-- Callout --}}
      <div class="callout callout-info">
        <h4>Informasi</h4>
        <p>Pembentukan database Profil Lulusan</p>
      </div>
      {{-- End of Callout --}}

      <div class="box box-default">
        <div class="box-header with-border">
          <p class="box-title">Profil Lulusan</p>
          <button class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#addProfilLulusan">Tambah Profil Lulusan</button>
        </div>
        <div class="box-body">
          <table class="table table-responsive">
            <thead>
              <th>No</th>
              <th>Profil Lulusan</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Programmer mobile application</td>
                <td>Lulusan ini diharapkan akan mampu memahami dasar pemrograman berbasis obyek, pembuatan antara muka grafis, teknologi jaringan wireless, dan memahami pemrograman mobile.</td>
                <td><a href="{{ url('/okupansi/view')}}" class="btn btn-success btn-sm">Lihat</a></td>
                <td><a href="#" class="btn btn-danger btn-sm">Hapus</a></td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Pengembang Web</td>
                <td>Lulusan ini diharapkan akan mampu memahami dasar pemrograman berbasis obyek, pembuatan antara muka grafis, pemrograman berbasis web, desain web, keamanan web/jaringan, konsep dan manajemen basis data terdistribusi, dan memahami keamanan system informasi.</td>
                <td><a href="{{ url('/okupansi/view')}}" class="btn btn-success btn-sm">Lihat</a></td>
                <td><a href="#" class="btn btn-danger btn-sm">Hapus</a></td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Database Administrator</td>
                <td>Lulusan ini diharapkan akan mampu memahami manajemen basis data, kinerja jaringan computer, dan memahami keamanan system</td>
                <td><a href="{{ url('/okupansi/view')}}" class="btn btn-success btn-sm">Lihat</a></td>
                <td><a href="#" class="btn btn-danger btn-sm">Hapus</a></td>
              </tr>
              <tr>
                <td>4.</td>
                <td>Rancangan E-Business</td>
                <td>Mempunyai keahlian dalam memanfaatkan teknologi informasi terkini untuk menemukenali, merumuskan, dan memecahkan masalah e-business</td>
                <td><a href="{{ url('/okupansi/view')}}" class="btn btn-success btn-sm">Lihat</a></td>
                <td><a href="#" class="btn btn-danger btn-sm">Hapus</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


<div id="addProfilLulusan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Profil Lulusan</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label for="Nama Pekerjaan">Nama Profil Lulusan:</label>
                <input type="text" name="namakerja" class="form-control" value="">
              </div>

              <div class="form-group">
                <label for="Deskripsi Pekerjaan">Deskripsi Profil Lulusan:</label>
                <textarea name="name" class="form-control" rows="8" cols="80"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-sm btn-primary">Simpan</button>
      </div>
    </div>

  </div>
</div>

@stop
