@extends('adminlte::page')

@section('content_header')
  <h1>Informasi Okupansi</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Okupansi</h3>
        </div>
        <div class="box-content">
          <table class="table">
            <tr>
              <td><b>Nama:</b></td>
              <td>Programmer Mobile Application</td>
            </tr>
            <tr>
              <td><b>Deskripsi:</b></td>
              <td>Lulusan ini diharapkan akan mampu memahami dasar pemrograman berbasis obyek, pembuatan antara muka grafis, teknologi jaringan wireless, dan memahami pemrograman mobile.</td>
            </tr>
          </table>

        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Pengetahuan</a></li>
              <li><a href="#tab_3" data-toggle="tab">Keterampilan Khusus</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table class="table">
                  <tr>
                    <td>1.</td>
                    <td>Mengetahui dan memahami dasar pemrograman berbasis obyek, </td>
                    <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Mengetahui dan memahami pembuatan antara muka grafis, </td>
                    <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Mengetahui dan memahami teknologi jaringan wireless, dan memahami pemrograman mobile </td>
                    <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <tr>
                    <form class="" action="index.html" method="post">
                      <td colspan="3">
                        <div class="form-group">
                          <label for="pgbaru">Pengetahuan Baru: </label>
                          <input type="text" id="pgbaru" class="form-control" name="" value="">
                        </div>

                        <div class="form-group">
                          <a href="#" class="btn btn-primary">Simpan</a>
                        </div>
                      </td>
                    </form>
                  </tr>
                </table>

              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table class="table">
                  <tr>
                    <td>1.</td>
                    <td>Mengetahui dan memahami dasar pemrograman berbasis obyek, </td>
                    <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Mengetahui dan memahami pembuatan antara muka grafis, </td>
                    <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Mengetahui dan memahami teknologi jaringan wireless, dan memahami pemrograman mobile </td>
                    <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <tr>
                    <form class="" action="index.html" method="post">
                      <td colspan="3">
                        <div class="form-group">
                          <label for="pgbaru">Keterampilan Khusus Baru: </label>
                          <input type="text" id="pgbaru" class="form-control" name="" value="">
                        </div>

                        <div class="form-group">
                          <a href="#" class="btn btn-primary">Simpan</a>
                        </div>
                      </td>
                    </form>
                  </tr>
                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
    </div>

  </div>
@endsection
