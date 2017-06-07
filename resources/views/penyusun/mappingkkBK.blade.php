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
          <div><strong>Keterampilan Khsusus</strong></div>
          <ul>
            <li><div><span>KK3</span></div>
              <ul>
                <li><div><span>Algoritma dan Pemrograman <a href="#" class="btn btn-info" data-toggle="modal" data-target="#tambahmk">Tambah MK</a></span></div></li>
                <li><div><a href="#"  class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><span>KK5</span></div>
              <ul>
                <li><div><a href="#" class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><span>KK4</span></div>
              <ul>
                <li><div><a href="#" class="btn btn-default" data-toggle="modal" data-target="#tambahbk">tambah Bahan Kajian</a></div></li>
              </ul>
            </li>
            <li><div><a href="#" class="btn btn-default" data-toggle="modal" data-target="#tambahkk">tambah Keterampilan Khusus</a></div></li>
          </ul>


      </li>

    </ul>

  </div>

  {{-- KK --}}
  <div class="modal fade" id="tambahkk" tabindex="-1" role="sikap">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Keterampilan Khsusus</h4>
        </div>
        <div class="modal-body">
          <table class="table">
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td>KK-3</td>
              <td>Mengetahui dan memahami dasar pemrograman berbasis obyek, </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td>KK-4</td>
                <td>Mengetahui dan memahami teknologi jaringan wireless, dan memahami pemrograman mobile </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td>KK-5</td>
              <td>Mengetahui dan memahami pembuatan antara muka grafis, </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  {{-- Mata Kuliah --}}
  <div class="modal fade" id="tambahmk" tabindex="-1" role="sikap">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Mata Kuliah terkait: <b>Algoritma Dan Pemrograman</b></h4>
        </div>
        <div class="modal-body">
          <table class="table">
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td>MK-3</td>
              <td>Pemrograman Dasar</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td>MK-4</td>
                <td>Pemrograman Berorientasi Objek</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td>MK-5</td>
              <td>Algoritma</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="" value=""></td>
              <td>MK-5</td>
              <td>Struktur Data</td>
            </tr>
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
          <h4 class="modal-title">Bahan Kajian</h4>
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
