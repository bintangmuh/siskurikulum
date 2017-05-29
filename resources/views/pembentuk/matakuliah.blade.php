@extends('adminlte::page')

@section('content_header')
  <h1>Mata Kuliah yang tersedia</h1>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12" style="margin-bottom: 20px;">
      <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahmk">Tambah Mata Kuliah</a>
    </div>

    <div class="col-sm-12">

      <div class="box box-primary">
        <div class="box-body">
          <table class="table table-hovered">
            <thead>
              <th>No.</th>
              <th>Mata Kuliah</th>
              <th>Bahan Kajian</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Agama Islam</td>
                <td>Kecakapan Hidup</td>
                <td style="width: 90px;">
                  <div class="btn-group" role='group'>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Kewarganegraan</td>
                <td>Kecakapan Hidup</td>
                <td style="width: 90px;">
                  <div class="btn-group" role='group'>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Pancasila</td>
                <td>Kecakapan Hidup</td>
                <td style="width: 90px;">
                  <div class="btn-group" role='group'>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Pemrograman</td>
                <td>Algoritma dan Pemrograman</td>
                <td style="width: 90px;">
                  <div class="btn-group" role='group'>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Struktur Data</td>
                <td>Algoritma dan Pemrograman</td>
                <td style="width: 90px;">
                  <div class="btn-group" role='group'>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Algoritma</td>
                <td>Kecakapan Hidup</td>
                <td style="width: 90px;">
                  <div class="btn-group" role='group'>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    {{-- Modal Box --}}
    <div id="tambahmk" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Bahan Kajian</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <form class="" action="{{ url('/bahankajian')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="namabk" class="col-sm-4">Nama Mata Kuliah: </label>
                  <div class="col-sm-12">
                    <input type="text" id="namabk" class="form-control col-sm-8" name="" value="" placeholder="Mata Kuliah Baru">
                  </div>
                </div>
                <div class="form-group">
                  <label for="namabk" class="col-sm-4">Bahan Kajian: </label>
                  <div class="col-sm-12">
                    <select class="form-control">
                      <option disabled>--Pilih Bahan Kajian yang Sesuai--</option>
                      <option value="">Kecakapan Hidup</option>
                      <option value="">Algoritma Pemrograman</option>
                      <option value="">Rekayasa Perangkat Lunak</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="namabk" class="col-sm-4">Deskripsi: </label>
                  <div class="col-sm-12">
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batalkan</button>
            <button type="submit" class="btn btn-sm btn-primary" name="button">Simpan</button>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
