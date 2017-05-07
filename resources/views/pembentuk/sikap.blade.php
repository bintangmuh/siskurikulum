@extends('adminlte::page')

@section('content_header')
  <h1>Database Sikap</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12" style="margin-bottom: 20px;">
      <a href="#inputbaru" class="btn btn-primary">Tambah Sikap</a>
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
              <td>bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>dapat berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>dapat bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>dapat menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>menginternalisasi nilai, norma, dan etika akademik;</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.</td>
              <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

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
