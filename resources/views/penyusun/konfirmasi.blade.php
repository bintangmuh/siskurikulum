@extends('adminlte::page')

@section('content_header')
  <h1>Konfirmasi</h1>
@endsection

@section('content')
  <div class="row">

    {{-- Profil Lulusan --}}
    <div class="col-sm-12">
      <div class="box box-primary">
        <table class="table">
          <thead>
            <th>Okupansi</th>
            <th>Keahlian</th>
          </thead>
          <tbody>
            <tr>
              <td>Programmer Mobile</td>
              <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#okupansi-detail">View</a></td>
            </tr>
            <tr>
              <td>Pengembang Aplikasi Web</td>
              <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#okupansi-detail">View</a></td>
            </tr>
            <tr>
              <td>Database Administrator</td>
              <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#okupansi-detail">View</a></td>
            </tr>
            <tr>
              <td>Rancangan E-Business</td>
              <td><a href="#" class="btn btn-default" data-toggle="modal" data-target="#okupansi-detail">View</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    {{-- Sikap --}}
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sikap D3 Manajemen Informatika</h3>
        </div>
        <div class="box-body">
          <table class="table">
            <thead>
              <th>Kode</th>
              <th>Capaian</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">SK-1</td>
                <td>bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius</td>
              </tr>
              <tr>
                <td class="text-center">SK-2</td>
                <td>menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;</td>
              </tr>
              <tr>
                <td class="text-center">SK-3</td>
                <td>dapat berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;</td>
              </tr>
              <tr>
                <td class="text-center">SK-4</td>
                <td>dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila;</td>
              </tr>
              <tr>
                <td class="text-center">SK-5</td>
                <td>dapat bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;</td>
              </tr>
              <tr>
                <td class="text-center">SK-6</td>
                <td>dapat menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;</td>
              </tr>
              <tr>
                <td class="text-center">SK-7</td>
                <td>taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;</td>
              </tr>
              <tr>
                <td class="text-center">SK-8</td>
                <td>menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;</td>
              </tr>
              <tr>
                <td class="text-center">SK-9</td>
                <td>menginternalisasi nilai, norma, dan etika akademik;</td>
              </tr>
              <tr>
                <td class="text-center">SK-10</td>
                <td>menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    {{-- Pengetahuan --}}
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Pengetahuan D3 Manajemen Informatika</h3>
        </div>
        <div class="box-body">
          <table class="table">
            <thead>
              <th>No.</th>
              <th>Capaian</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td>PG-1</td>
                <td>Mampu memahami prinsip dan mekanisme kerja sistem komputer</td>
              </tr>
              <tr>
                <td>PG-2</td>
                <td>Mampu melakukan analisis, desain dan membangun sistem Informasi</td>
              </tr>
              <tr>
                <td>PG-3</td>
                <td>Mampu membangun system berbasis web dan mobile application</td>
              </tr>
              <tr>
                <td>PG-4</td>
                <td>Mampu melakukan analisis dan desain basis data </td>
              </tr>
              <tr>
                <td>PG-5</td>
                <td>Mampu melakukan perencanaan pengembangan system informasi</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    {{-- Keterampilan Umum --}}
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Keterampilan Umum D3 Manajemen Informatika</h3>
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
                <td>KU-1</td>
                <td>mampu menyelesaikan pekerjaan berlingkup luas dan menganalisis data dengan beragam metode yang sesuai, baik yang belum maupun yang sudah baku;</td>
              </tr>
              <tr>
                <td>KU-2</td>
                <td>Mampu menunjukkan kinerja mandiri, bermutu, dan terukur </td>
              </tr>
              <tr>
                <td>KU-3</td>
                <td>mampu memecahkan masalah pekerjaan dengan sifat dan konteks yang sesuai dengan bidang keahlian terapannya, didasarkan pada pemikiran logis, inovatif, dan bertanggung jawab atas hasilnya secara mandiri;</td>
              </tr>
              <tr>
                <td>KU-4</td>
                <td>mampu menyusun laporan hasil dan proses kerja secara akurat dan sahih, serta mengomunikasikan-nya secara efektif kepada pihak lain yang membutuhkan;</td>
              </tr>
              <tr>
                <td>KU-5</td>
                <td>Mampu bekerja sama, berkomunikasi, dan berinovatif dalam pekerjaannya;</td>
              </tr>
              <tr>
                <td>KU-6</td>
                <td>mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggung-jawabnya;</td>
              </tr>
              <tr>
                <td>KU-7</td>
                <td>mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggungjawabnya, dan mengelola pengembangan kompetensi kerja secara mandiri;</td>
              </tr>
              <tr>
                <td>KU-8</td>
                <td>mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi;</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    {{-- keterampilan khusus --}}
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Keterampilan Khusus D3 Manajemen Informatika</h3>
        </div>
        <div class="box-body">
          <table class="table">
            <thead>
              <th>No.</th>
              <th>Capaian</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">KK-1</td>
                <td>Orang yang mempunyai kemampuan untuk memahami kebutuhan bisnis dalam sebuah organisasi</td>
              </tr>
              <tr>
                <td class="text-center">KK-2</td>
                <td>Orang yang mempunyai kemampuan untuk menemukan isu penting dalam organisasi</td>
              </tr>
              <tr>
                <td class="text-center">KK-3</td>
                <td>Orang yang mempunyai kemampuan untuk menemukan kekuatan dan kelemahan organisasi dan saran perbaikannya</td>
              </tr>
              <tr>
                <td class="text-center">KK-4</td>
                <td>Orang yang mempunyai kemampuan untuk melihat dan memperbaiki kebutuhan organisasi</td>
              </tr>
              <tr>
                <td class="text-center">KK-5</td>
                <td>Orang yang mempunyai kemampuan untuk mengindentifikasi proses bisnis organisasi</td>
              </tr>
              <tr>
                <td class="text-center">KK-6</td>
                <td>Orang yang mempunyai kemampuan melakukan Perancangan basis data.</td>
              </tr>
              <tr>
                <td class="text-center">KK-7</td>
                <td>Orang yang mempunyai kemampuan dalam bidang arsitektur enterprise, strategi manajemen dan rekayasa sistem informasi dengan memanfaatkan teknologi informasi terkini.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    {{-- Bahan Kajian --}}
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Database Bahan Kajian</h3>
        </div>
        <div class="box-body">
          <table class="table">
            <thead>
              <th>Kode</th>
              <th>Capaian</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">A</td>
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center">B</td>
                <td>Statistika</td>
              </tr>
              <tr>
                <td class="text-center">C</td>
                <td>Algoritma</td>
              </tr>
              <tr>
                <td class="text-center">D</td>
                <td>Rekayasa Perangkat Lunak</td>
              </tr>
              <tr>
                <td class="text-center">E</td>
                <td>Arsitektur Komputer</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    {{-- matakuliah --}}
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-content">
          <table class="table table-hovered">
            <thead>
              <th>Kode</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>Bahan Kajian</th>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">MK-A</td>
                <td>Agama</td>
                <td> 2 | 0</td>
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center">MK-A</td>
                <td>Kewarganegraan</td>
                <td> 2 | 0</td>
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center">MK-A</td>
                <td>Pancasila</td>
                <td> 2 | 0</td>
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center">MK-A</td>
                <td>Pemrograman</td>
                <td> 2 | 2</td>
                <td>Algoritma dan Pemrograman</td>
              </tr>
              <tr>
                <td class="text-center">MK-A</td>
                <td>Struktur Data</td>
                <td> 2 | 2</td>
                <td>Algoritma dan Pemrograman</td>
              </tr>
              <tr>
                <td class="text-center">MK-A</td>
                <td>Algoritma Pemrograman</td>
                <td> 2 | 2</td>
                <td>Algoritma dan Pemrograman</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <a href="{{ url('/struktur') }}" class="btn btn-primary btn-lg">Konfirmasi</a>
    </div>
  </div>
@endsection
