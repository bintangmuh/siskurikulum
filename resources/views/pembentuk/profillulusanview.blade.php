@extends('adminlte::page')

@section('content_header')
  <h1>Informasi Profil Lulusan</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Profil Lulusan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
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

    <div class="col-sm-6">
      <div class="box box-warning">
        <div class="box-header">
          <h3 class="box-title">Capaian Pembelajaran</h3>
        </div>
        <div class="box-body">
              <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_2" data-toggle="tab">Sikap</a></li>
              <li><a href="#tab_1" data-toggle="tab">Pengetahuan</a></li>
              <li><a href="#tab_4" data-toggle="tab">K Umum</a></li>
              <li><a href="#tab_3" data-toggle="tab">K Khusus</a></li>
              <button class="btn btn-sm btn-primary pull-right" style="margin: 5px">Tambah</button>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_2">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>dapat berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila;</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>dapat bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>dapat menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>menginternalisasi nilai, norma, dan etika akademik;</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.</td>
                      <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="tab_1">
                <table class="table table-hover">
                  <tr class="clickable-row" style="background: #bbb; padding: 5px;">
                    <td>1.</td>
                    <td>Mengetahui dan memahami dasar pemrograman berbasis obyek, </td>
                    <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Mengetahui dan memahami pembuatan antara muka grafis, </td>
                    <td>
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Mengetahui dan memahami teknologi jaringan wireless, dan memahami pemrograman mobile </td>
                    <td>
                      <div class="btn-group">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
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
                    <td style="width: 90px;">
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Mengetahui dan memahami pembuatan antara muka grafis, </td>
                    <td>
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Mengetahui dan memahami teknologi jaringan wireless, dan memahami pemrograman mobile </td>
                    <td>
                      <div class="btn-group" role='group'>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="tab-pane" id="tab_4">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>mampu menyelesaikan pekerjaan berlingkup luas dan menganalisis data dengan beragam metode yang sesuai, baik yang belum maupun yang sudah baku;</td>
                      <td style="width: 90px;">
                        <div class="btn-group" role='group'>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Mampu menunjukkan kinerja mandiri, bermutu, dan terukur </td>
                      <td style="width: 90px;">
                        <div class="btn-group" role='group'>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>mampu memecahkan masalah pekerjaan dengan sifat dan konteks yang sesuai dengan bidang keahlian terapannya, didasarkan pada pemikiran logis, inovatif, dan bertanggung jawab atas hasilnya secara mandiri;</td>
                      <td style="width: 90px;">
                        <div class="btn-group" role='group'>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>mampu menyusun laporan hasil dan proses kerja secara akurat dan sahih, serta mengomunikasikan-nya secara efektif kepada pihak lain yang membutuhkan;</td>
                      <td style="width: 90px;">
                        <div class="btn-group" role='group'>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Mampu bekerja sama, berkomunikasi, dan berinovatif dalam pekerjaannya;</td>
                      <td style="width: 90px;">
                        <div class="btn-group" role='group'>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggung-jawabnya;</td>
                      <td style="width: 90px;">
                        <div class="btn-group" role='group'>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggungjawabnya, dan mengelola pengembangan kompetensi kerja secara mandiri;</td>
                      <td style="width: 90px;">
                        <div class="btn-group" role='group'>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi;</td>
                      <td style="width: 90px;">
                        <div class="btn-group" role='group'>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.tab-content -->
      </div>
        </div>
      </div>
          <!-- nav-tabs-custom -->
    </div>
    <div class="col-sm-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Bahan Kajian</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-sm btn-primary pull-right" data-toggle='modal' data-target='#addBahanKajian'>Tambah</button>
          </div>
        </div>
        <div class="box-body">
          <p style="background: #bbb; padding: 5px;">
            <b>Pengetahuan Umum</b><br>
            Mengetahui dan memahami dasar pemrograman berbasis obyek,
          </p>
          <table class="table">
            <tr>
              <th>Bahan Kajian</th>
              <th>Deskripsi</th>
              <th>Kedalaman</th>
            </tr>
            <tr>
              <td>Matematika & Statistika </td>
              <td>Kelompok kajian Matematika & Statistik terdiri dari mata kuliah-mata kuliah Statistika dan Matematika yang bersifat numerik yang mendukung dalam proses komputasi program,</td>
              <td style="text-align: center;">2</td>
            </tr>
            <tr>
              <td>Algoritma & Pemrograman</td>
              <td>Kelompok kajian algoritma dan pemrograman terdiri dari mata kuliahmata kuliah yang mendukung proses algoritma, eksekusi program dan juga software pemrograman yang dipakai dalam membangun system aplikasi berbasis computer,</td>
              <td style="text-align: center;">2</td>
            </tr>
          </table>

        </div>
      </div>
    </div>
  </div>

  <div id="addBahanKajian" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Bahan Kajian</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label for="Nama Pekerjaan">Bahan Kajian:</label>
                <input type="text" name="namakerja" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="Deskripsi Pekerjaan">Deskripsi Bahan Kajian:</label>
                <textarea name="name" class="form-control" rows="3" cols="80"></textarea>
              </div>
              <div class="form-group">
                <label for="Deskripsi Pekerjaan">Kedalaman:</label>
                <input type="text" name="namakerja" class="form-control" value="">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" name="button">Simpan</button>
      </div>
    </div>

  </div>
</div>
@endsection