@extends('adminlte::page')

@section('content_header')
  <h1>Menyusun Sikap</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Database Sikap</h3>
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
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>dapat berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila;</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>dapat bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>dapat menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>menginternalisasi nilai, norma, dan etika akademik;</td>
              </tr>
              <tr>
                <td class="text-center"><input type="checkbox" name="" value=""></td>
                <td>menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.</td>
              </tr>
            </tbody>
          </table>
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
