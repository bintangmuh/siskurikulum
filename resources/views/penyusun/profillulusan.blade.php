@extends('adminlte::page')

@section('content_header')
  <h1>Input Profil Lulusan</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="alert alert-warning">
        Mohon memilih profil lulusan yang diinginkan
      </div>
    </div>

    <div class="col-sm-12">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <b>Berhasil</b> menambahkan profil lulusan D3 Manajemen Informatika
      </div>
    </div>

    <div class="col-sm-12">

      <div class="box box-primary">
        <table class="table">
          <thead>
            <th></th>
            <th>Okupansi</th>
            <th>Keahlian</th>
          </thead>
          <tbody>
            <tr>
              <td class="text-center"><input type="checkbox" name="" value=""></td>
              <td>Programmer Mobile</td>
              <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#okupansi-detail">View</a></td>
            </tr>
            <tr>
              <td class="text-center"><input type="checkbox" name="" value=""></td>
              <td>Pengembang Aplikasi Web</td>
              <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#okupansi-detail">View</a></td>
            </tr>
            <tr>
              <td class="text-center"><input type="checkbox" name="" value=""></td>
              <td>Database Administrator</td>
              <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#okupansi-detail">View</a></td>
            </tr>
            <tr>
              <td class="text-center"><input type="checkbox" name="" value=""></td>
              <td>Rancangan E-Business</td>
              <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#okupansi-detail">View</a></td>
            </tr>
          </tbody>
        </table>
        <div class="box-footer">
          <a href="{{ url('/rumusan/sikap') }}" class="btn btn-primary">Simpan dan Selanjutnya</a>
          {{-- <a href="#" class="btn btn-default right">Tambah Okupansi</a> --}}
        </div>
      </div>
    </div>

    <div id="okupansi-detail" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Keahlian</h4>
          </div>
          <div id="content" class="modal-body">
            <label for="">Nama Okupansi:</label> Komputer Junior
            <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Kode Unit</th>
                        <th>Unit Kompetensi</th>

                    </tr>
                  </thead>
                  <tbody>
                                        <tr>
                        <td align="center">
                          TIK.OP01.002.01                        </td>
                        <td>Mengidentifikasi aspek kode etik dan HAKI dibidang TIK</td>

                      </tr>
                                       <tr>
                        <td align="center">
                          TIK.OP02.001.01                        </td>
                        <td>Mengoperasikan komputer personal yang berdiri sendiri (PC stand alone)</td>

                      </tr>
                                       <tr>
                        <td align="center">
                          TIK.OP02.009.01                        </td>
                        <td>Mengoperasikan PC yg Terhubung Pada Jaringan Komputer Lokal</td>

                      </tr>
                                       <tr>
                        <td align="center">
                          TIK.OP02.010.01                        </td>
                        <td>Melakukan instalasi untuk koneksi Internet</td>

                      </tr>
                                       <tr>
                        <td align="center">
                          TIK.OP02.014.01                        </td>
                        <td>Mempergunakan Piranti Lunak Anti virus</td>

                      </tr>
                                       <tr>
                        <td align="center">
                          TIK.OP02.016.01                        </td>
                        <td>Melakukan konversi data dari berbagai aplikasi perkantoran</td>

                      </tr>
                                       <tr>
                        <td align="center">
                          TIK.OP02.017.01                        </td>
                        <td>Melakukan penanganan awal (Troubleshooting) atas masalah pada PC</td>

                      </tr>
                                       <tr>
                        <td align="center">
                          TIK.OP02.018.01                        </td>
                        <td>Mengoperasikan utilitas dasar utk Backup, Restore, Data Recovery</td>

                      </tr>
                                       <tr>
                        <td align="center">
                          TIK.OP02.019.01                        </td>
                        <td>Mengoperasikan Piranti Lunak pengolah gambar vektor</td>

                      </tr>
                                     </tbody>
                </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
