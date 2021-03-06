@extends('adminlte::page')

@push('css')
  <style media="screen">

    .buzzmap .node {
      z-index: 100;
      cursor: default;
      display: block;

      background:rgb(9, 123, 164);
      opacity:0.9;
      color:white;
      font-size:1em;
      text-align: center;
      padding:7px 7px;
      font-size:1.2em;
    }
    .buzzmap .node.active a {
    color:#fff;
    }
    .buzzmap .node.root {
      padding:5px 10px;
      background:rgb(254, 153, 34);

      font-size:2em;
    }
    .edit-field {
      color: #000;
    }
    .edit-button {
      color: #000;

    }
  </style>
@endpush

@section('content_header')
  <h1>Menyusun Bahan Kajian D3 Manajemen Informatika</h1>
  <a href="{{ url('/rumusan/mapping')}}" class="btn btn-primary">Kembali</a>

@endsection



@section('content')
  <div class="row">
    <div style="height: 100vh" class="mindmap-placeholder">
    </div>
    <ul id="structure">
      <li>
          <div><strong>Keterampilan Umum</strong></div>
          <ul>
            <li><div><span>KU-1</span></div>
              <ul>
                <li><div><a href="#"  class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><span>KU-2</span></div>
              <ul>
                <li><div><a href="#"  class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><span>KU-3</span></div>
              <ul>
                <li><div><span>Kecakapan hidup <a href="#" class="btn btn-info">Tambah MK</a></span></div></li>
                <li><div><a href="#"  class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><span>KU-4</span></div>
              <ul>
                <li><div><a href="#"  class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><span>KU-5</span></div>
              <ul>
                <li><div><a href="#" class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><span>KU-6</span></div>
              <ul>
                <li><div><a href="#" class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><a href="#" class="btn btn-default" data-toggle="modal" data-target="#tambahku">tambah Keterampilan Umum</a></div></li>

          </ul>
      </li>
    </ul>

  </div>

  {{-- mapping KU --}}
  <div class="modal fade" id="tambahku" tabindex="-1" role="sikap">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Keterampilan Umum</h4>
        </div>
        <div class="modal-body">
          <table class="table">
                  <tbody>
                    <tr>
                      <td><input type="checkbox" name="" value=""></td>
                      <td>KU-1</td>
                      <td>mampu menyelesaikan pekerjaan berlingkup luas dan menganalisis data dengan beragam metode yang sesuai, baik yang belum maupun yang sudah baku;</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" value=""></td>
                      <td>KU-2</td>
                      <td>Mampu menunjukkan kinerja mandiri, bermutu, dan terukur </td>
                      <td style="width: 90px;">
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" value=""></td>
                      <td>KU-3</td>
                      <td>mampu memecahkan masalah pekerjaan dengan sifat dan konteks yang sesuai dengan bidang keahlian terapannya, didasarkan pada pemikiran logis, inovatif, dan bertanggung jawab atas hasilnya secara mandiri;</td>
                      <td style="width: 90px;">
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" value=""></td>
                      <td>KU-4</td>
                      <td>mampu menyusun laporan hasil dan proses kerja secara akurat dan sahih, serta mengomunikasikan-nya secara efektif kepada pihak lain yang membutuhkan;</td>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" value=""></td>
                      <td>KU-5</td>
                      <td>Mampu bekerja sama, berkomunikasi, dan berinovatif dalam pekerjaannya;</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" value=""></td>
                      <td>KU-6</td>
                      <td>mampu bertanggungjawab atas pencapaian hasil kerja kelompok dan melakukan supervisi dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang berada di bawah tanggung-jawabnya;</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" value=""></td>
                      <td>KU-7</td>
                      <td>mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah tanggungjawabnya, dan mengelola pengembangan kompetensi kerja secara mandiri;</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" value=""></td>
                      <td>KU-8</td>
                      <td>mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data untuk menjamin kesahihan dan mencegah plagiasi;</td>
                    </tr>
                  </tbody>
                </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  {{-- Bahan Kajian --}}
  <div class="modal fade" id="tambahbk" tabindex="-1" role="sikap">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Keterampilan Umum</h4>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <th>No.</th>
              <th>Capaian</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Kecakapan Hidup</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Statistika</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Algoritma</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Rekayasa Perangkat Lunak</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>Arsitektur Komputer</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  </div>
@endsection

@push('js')
  <script src="{{ asset('/js/jquery-ui.min.js')}}" charset="utf-8"></script>
  <script src="{{ asset('/js/raphael.min.js')}}" charset="utf-8"></script>
  <script src="{{ asset('/js/buzzmap.min.js')}}" charset="utf-8"></script>
  <script type="text/javascript">
    $('.mindmap-placeholder').buzzmap({
        structure: '#structure', // Initial mind map structture
        editable: true, // Set to true to interactively add and edit nodes. (see below)

        onchange: function (node, data) {}, // See below
        ondrag: function (root) {},
        onshow: function (node) {},
        onhide: function (node) {},
        onremove: function (node) {},
        fps: function (fps) {},

        attract: 15, // The strength of the attracting force between the nodes.
        repulse: 10, // The strength of the repelling force between the nodes.
        wallRepulse: 0.5, // The strength of the repelling force of the map borders.
        maxForce: 0.25,
        damping: 0.8, // A higher percentage = higher elasticity of the linking lines.
        acceleration: 5, // How fast the nodes can go, on their own.

        lineWidth: '5px', // The width of the linking lines between two nodes.
        lineColor: 'blue', // The color of the linking lines.
        lineOpacity: 0.3, // The opacity of the linking lines.

        minSpeed: 0.2, // The minimum speed until the animation will stop.
        animationTimeout: 5 // Time in seconds until the animation stops, after leaving it untouched.
    });
  </script>
@endpush
