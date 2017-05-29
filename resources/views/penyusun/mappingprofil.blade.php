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
    padding:0 7px;
    font-size:1.2em;
  }
  .buzzmap .node.active a {
  color:#fff;
  }

  .buzzmap .node a {
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
  <h1>Menyusun Profil Lulusan D3 Manajemen Informatika</h1>
@endsection



@section('content')
  <div class="row">
    <div style="height: 500px" class="mindmap-placeholder">
    </div>
    <div class="row">
      <div class="col-sm-offset-4 col-sm-4">
        <a href="#" class="btn btn-lg btn-success" style="width: 100%">Simpan Rancangan Kurikulum</a>
      </div>
    </div>
    <ul id="structure">
      <li>
          <div><strong>D3 Manajemen Informatika</strong></div>
          <ul>
            <li><div><a href="{{ url('/rumusan/mapping') }}">Bussiness Analyst</a></div>
              {{-- <ul>
              	<li><div><span>Mindmapping</span></div></li>
              	<li><div><span>Brainstorming</span></div></li>
              	<li><div><span>Editing</span></div></li>
              	<li><div><span>Visualisation</span></div></li>
              </ul> --}}
            </li>
            <li><div><a href="#">Junior Programmer</a></div></li>
            <li><div><a href="#">DBA Programmer</a></div></li>
          </ul>
      </li>
    </ul>

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

        attract: 5, // The strength of the attracting force between the nodes.
        repulse: 3, // The strength of the repelling force between the nodes.
        wallRepulse: 0.5, // The strength of the repelling force of the map borders.
        maxForce: 0.1,
        damping: 0.90, // A higher percentage = higher elasticity of the linking lines.
        acceleration: 5, // How fast the nodes can go, on their own.

        lineWidth: '5px', // The width of the linking lines between two nodes.
        lineColor: 'blue', // The color of the linking lines.
        lineOpacity: 0.3, // The opacity of the linking lines.

        minSpeed: 0.2, // The minimum speed until the animation will stop.
        animationTimeout: 5 // Time in seconds until the animation stops, after leaving it untouched.
    });
  </script>
@endpush
