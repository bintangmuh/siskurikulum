@extends('adminlte::page')

@section('content_header')
  <h1>Database Keterampilan Umum</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12" style="margin-bottom: 20px;">
      <a href="#inputbaru" class="btn btn-primary ">Tambah Keterampilan Umum</a>
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
              <td>mampu menyelesaikan pekerjaan berlingkup luas dan menganalisis data dengan beragam metode yang sesuai, baik yang belum maupun yang sudah baku;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Mampu menunjukkan kinerja mandiri, bermutu, dan terukur </td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>mampu memecahkan masalah pekerjaan dengan sifat dan konteks yang sesuai dengan bidang keahlian terapannya, didasarkan pada pemikiran logis, inovatif, dan bertanggung jawab atas hasilnya secara mandiri;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>mampu menyusun laporan hasil dan proses kerja secara akurat dan sahih, serta mengomunikasikan-nya secara efektif kepada pihak lain yang membutuhkan;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Mampu bekerja sama, berkomunikasi, dan berinovatif dalam pekerjaannya;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggung-jawabnya;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggungjawabnya, dan mengelola pengembangan kompetensi kerja secara mandiri;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    {{-- Input Baru --}}
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
