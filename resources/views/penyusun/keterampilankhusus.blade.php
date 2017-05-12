@extends('adminlte::page')

@section('content_header')
  <h1>Keterampilan Khusus</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Khusus</h3>
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
                    <td>Orang yang mempunyai kemampuan untuk memahami kebutuhan bisnis dalam sebuah organisasi</td>
                  </tr>
                  <tr>
                    <td class="text-center"><input type="checkbox" name="" value=""></td>
                    <td>Orang yang mempunyai kemampuan untuk menemukan isu penting dalam organisasi</td>
                  </tr>
                  <tr>
                    <td class="text-center"><input type="checkbox" name="" value=""></td>
                    <td>Orang yang mempunyai kemampuan untuk menemukan kekuatan dan kelemahan organisasi dan saran perbaikannya</td>
                  </tr>
                  <tr>
                    <td class="text-center"><input type="checkbox" name="" value=""></td>
                    <td>Orang yang mempunyai kemampuan untuk melihat dan memperbaiki kebutuhan organisasi</td>
                  </tr>
                  <tr>
                    <td class="text-center"><input type="checkbox" name="" value=""></td>
                    <td>Orang yang mempunyai kemampuan untuk mengindentifikasi proses bisnis organisasi</td>
                  </tr>
                  <tr>
                    <td class="text-center"><input type="checkbox" name="" value=""></td>
                    <td>Orang yang mempunyai kemampuan melakukan Perancangan basis data.</td>
                  </tr>
                  <tr>
                    <td class="text-center"><input type="checkbox" name="" value=""></td>
                    <td>Orang yang mempunyai kemampuan dalam bidang arsitektur enterprise, strategi manajemen dan rekayasa sistem informasi dengan memanfaatkan teknologi informasi terkini.</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
              <a href="{{ url('/rumusan/bahankajian') }}" class="btn btn-primary">Simpan dan Selanjutnya</a>

            </div>
          </div>
        </div>

        {{-- Tergantung Profil Lulusan --}}
        {{-- <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Khusus:s Komputer Junior</h3>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Database Keterampilan Khusus: Database Admin Junior</h3>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- Keterampilan Khusus Terpilih --}}
    {{-- <div class="col-sm-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Keterampilan Khusus D3 Manajemen Informatika</h3>
        </div>
      </div>
    </div> --}}
  </div>
@endsection
