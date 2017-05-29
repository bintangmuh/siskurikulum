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
  .buzzmap .node .node  {
    background-color: rgb(240, 192, 68);
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
  <h1>Menyusun Bahan Kajian</h1>
  <a href="{{ url('/rumusan/profil/mapping')}}" class="btn btn-primary">Kembali</a>

@endsection

@section('content')
  <div class="row">
    <div style="height: 100vh" class="mindmap-placeholder">
    </div>
    <ul id="structure">
      <li>
          <div><strong>Bussiness Analyist</strong></div>
          <ul>
            <li><div><a href="#" data-toggle="modal" data-target="#tambahsikap">sikap</a></div>
              <ul>
                <li><div><span>SS1</span></div></li>
                <li><div><span>SS2</span></div></li>
                <li><div><span>SS3</span></div></li>
                <li><div><span>SS4</span></div></li>
                <li><div><span>SS5</span></div></li>
              </ul>
            </li>
            <li><div><a href="#" data-toggle="modal" data-target="#tambahpengetahuan">Pengetahuan</a></div></li>
            <li><div><a href="#" data-toggle="modal" data-target="#tambahku"><span>Keterampilan Umum</span></a></div>
              <ul>
                <li><div><span>KU1</span></div>
                  <ul>
                    <li><div><span>BK1</span></div></li>
                    <li><div><span>BK2</span></div></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><div><a href="#" data-toggle="modal" data-target="#tambahkk"><span>Keterampilan Khusus</span></a></div></li>
          </ul>
      </li>
    </ul>

    <div class="modal fade" id="tambahsikap" tabindex="-1" role="sikap">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Sikap</h4>
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
                  <td>SS-1</td>
                  <td>bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>dapat berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila;</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>dapat bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>dapat menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>menginternalisasi nilai, norma, dan etika akademik;</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" name="" value=""></td>
                  <td>SS-1</td>
                  <td>menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>

  <div class="modal fade" id="tambahpengetahuan" tabindex="-1" role="sikap">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Pengetahuan</h4>
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
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu memahami prinsip dan mekanisme kerja sistem komputer</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu melakukan analisis, desain dan membangun sistem Informasi</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu membangun system berbasis web dan mobile application</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu melakukan analisis dan desain basis data </td>
              </tr>
              <tr>
                <td><input type="checkbox" name="" value=""></td>
                <td>Mampu melakukan perencanaan pengembangan system informasi</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>

<div class="modal fade" id="tambahku" tabindex="-1" role="sikap">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Keterampilan Umum</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<div class="modal fade" id="tambahkk" tabindex="-1" role="sikap">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Keterampilan Khusus</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
@endsection

@push('js')
{{-- <script src="{{ asset('js/go-debug.js') }}" charset="utf-8"></script>
<script type="text/javascript">
  var pohon = go.GraphObject.make;
  var myDiagram =
    pohon(go.Diagram, "my-tree",
    {
      initialContentAlignment: go.Spot.TopLeft , // center Diagram contents
      "undoManager.isEnabled": true, // enable Ctrl-Z to undo and Ctrl-Y to redo
      layout: pohon(go.TreeLayout, // specify a Diagram.layout that arranges trees
                { angle: 0, layerSpacing: 35 })
    });

  // the template we defined earlier
  myDiagram.nodeTemplate =
    pohon(go.Node, "Vertical",
      { background: "#44CCFF" },
      pohon(go.TextBlock, "Default Text",
        { margin: 12, stroke: "white", font: "bold 16px sans-serif" },
        new go.Binding("text", "name"))
    );

  // define a Link template that routes orthogonally, with no arrowhead
  myDiagram.linkTemplate =
    pohon(go.Link,
      { routing: go.Link.Orthogonal, corner: 5 },
      pohon(go.Shape, { strokeWidth: 3, stroke: "#555" })); // the link shape

  var model = pohon(go.TreeModel);
  model.nodeDataArray =
  [
    { key: "4",              name: "Bussiness Analyst", color: "Red"},
    { key: "41", parent: "4", name: "Sikap" , color: "Red"},
      {key:"411", parent:"41", name:"bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius", color: "Red"},
      {key:"412", parent:"41", name:"menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;", color: "Red"},
      {key:"413", parent:"41", name:"dapat berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;", color: "Red"},
      {key:"414", parent:"41", name:"dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila;", color: "Red"},
      {key:"415", parent:"41", name:"dapat bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;", color: "Red"},
      {key:"416", parent:"41", name:"dapat menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;", color: "Red"},
      {key:"417", parent:"41", name:"taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;", color: "Red"},
      {key:"418", parent:"41", name:"menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;", color: "Red"},
      {key:"419", parent:"41", name:"menginternalisasi nilai, norma, dan etika akademik;", color: "Red"},
      {key:"4110", parent:"41", name:"menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.", color: "Red"},
    { key: "42", parent: "4", name: "pengetahuan" },
      {key:"421", parent:"42", name:"bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius", color: "Red"},
      {key:"422", parent:"42", name:"menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;", color: "Red"},
      {key:"423", parent:"42", name:"dapat berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;", color: "Red"},
      {key:"424", parent:"42", name:"dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila;", color: "Red"},
    { key: "43", parent: "4", name: "keterampilan khusus" , color: "Red"},
    { key: "44", parent: "4", name: "Keterampilan Umum", color: "Red" }
  ];
  myDiagram.model = model;
</script> --}}

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
