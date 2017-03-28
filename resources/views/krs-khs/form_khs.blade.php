@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
KHS
@endsection

@section('main-content')
<section class="content-header">
      <div class="input-group margin">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Pilih Semester
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Semester 2014/2015 Ganjil</a></li>
                    <li><a href="#">Semester 2014/2015 Genap</a></li>
                    <li><a href="#">Semester 2015/2016 Ganjil</a></li>
                  </ul>
                </div>
                </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Semester</th>
                  <th>Kode MA</th>
                  <th>Nama MA</th>
                  <th>SKS</th>
                  <th>Nilai</th>
                  <th>Bobot</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIR202</td>
                  <td>Rekayasa Perangkat Lunak</td>
                  <td>3</td>
                  <td><a href="{{ url('krs-khs/detail_nilai_RPL') }}">A</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SID201</td>
                  <td>Basis Data</td>
                  <td>3</td>
                  <td><a href="{{ url('krs-khs/detail_nilai_BD') }}">B</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIJ201</td>
                  <td>Sistem Operasi</td>
                  <td>3</td>
                  <td>AB</td>
                  <td>10,5</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIR201</td>
                  <td>Pemrograman Berorientasi Obyek</td>
                  <td>3</td>
                  <td>AB</td>
                  <td>10,5</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SII201</td>
                  <td>Konsep Sistem Informasi</td>
                  <td>4</td>
                  <td>B</td>
                  <td>12</td>
                </tr>
                </tbody>
              </table>
              <div class="box-body">
                <tr>
                <li>Total SKS     : 16</li>
                </tr>
                <tr>
                <li>IPS           : 3,37</li>
                </tr>
                <tr>
                <li>IPK           : 3,4</li>
                </tr>
                <tr>
                <li>Total bobot   : 54</li>
                </tr>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- Content Header (Page footer) -->
    <section class="content-footer">
      <div class="col-xs-12">
        <button type="button" class="btn btn-info btn-flat">Cetak</button>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('code-footer')




@endsection