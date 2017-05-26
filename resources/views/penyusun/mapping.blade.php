@extends('adminlte::page')

@section('content_header')
  <h1>Menyusun CPL  Bussiness Analyst</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <a href="#" class="btn btn-primary">Sikap</a>
      <a href="#" class="btn btn-primary">Pengetahuan</a>
      <a href="#" class="btn btn-primary">KU</a>
      <a href="#" class="btn btn-primary">KK</a>
      <div id="my-tree" style="height: 600px;">

      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Pohon Capaian Lulusan</h3>
        </div>
        <div class="box-body" >

        </div>
        <div class="box-footer">
          <a href="{{ url('/rumusan/pengetahuan') }}" class="btn btn-primary">Simpan dan Selanjutnya</a>
          {{-- <a href="#" class="btn btn-default right">Tambah Okupansi</a> --}}
        </div>
      </div>
    </div>

    {{-- <div class="col-sm-6">
      <div class="box box-primary fixed">
        <div class="box-header">
          <h3 class="box-title">Sikap Capaian Lulusan D3 - Manajemen Informatika</h3>
        </div>
      </div>
    </div> --}}
  </div>
@endsection

@push('js')
<script src="{{ asset('js/go-debug.js') }}" charset="utf-8"></script>
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
</script>
@endpush
