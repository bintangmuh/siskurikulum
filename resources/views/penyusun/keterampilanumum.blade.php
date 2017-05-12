@extends('adminlte::page')

@section('content_header')
  <h1>Keterampilan Umum</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Umum</h3>
            </div>
            <div class="box-body">
              <table class="table">
                <thead>
                  <th></th>
                  <th>Capaian Keterampilan Umum</th>
                  <th></th>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox" name="" value=""></td>
                    <td>mampu menyelesaikan pekerjaan berlingkup luas dan menganalisis data dengan beragam metode yang sesuai, baik yang belum maupun yang sudah baku;</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" value=""></td>
                    <td>Mampu menunjukkan kinerja mandiri, bermutu, dan terukur </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" value=""></td>
                    <td>mampu memecahkan masalah pekerjaan dengan sifat dan konteks yang sesuai dengan bidang keahlian terapannya, didasarkan pada pemikiran logis, inovatif, dan bertanggung jawab atas hasilnya secara mandiri;</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" value=""></td>
                    <td>mampu menyusun laporan hasil dan proses kerja secara akurat dan sahih, serta mengomunikasikan-nya secara efektif kepada pihak lain yang membutuhkan;</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" value=""></td>
                    <td>Mampu bekerja sama, berkomunikasi, dan berinovatif dalam pekerjaannya;</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" value=""></td>
                    <td>mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggung-jawabnya;</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" value=""></td>
                    <td>mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggungjawabnya, dan mengelola pengembangan kompetensi kerja secara mandiri;</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" value=""></td>
                    <td>mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi;</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
              <a href="{{ url('/rumusan/keterampilankhusus') }}" class="btn btn-primary">Simpan dan Selanjutnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Keterampilan Umum Terpilih --}}
    {{-- <div class="col-sm-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Keterampilan Umum D3 Manajemen Informatika</h3>
        </div>
      </div>
    </div> --}}
  </div>
@endsection
