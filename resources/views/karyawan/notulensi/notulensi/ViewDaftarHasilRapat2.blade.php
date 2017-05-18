@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Notulensi Rapat
@endsection

@section('contentheader_title')
Notulensi Rapat
@endsection

@section('main-content')
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">ID Notulen</th>
      <th style="text-align:center">Ruangan</th>
      <th style="text-align:center">NIP Petugas</th>
      <th style="text-align:center">NIP</th>
      <th style="text-align:center">Nama Rapat</th>      
      <th style="text-align:center">Agenda Rapat</th>
      <th style="text-align:center">Waktu Pelaksanaan</th>
      <th style="text-align:center">Hasil Pembahasan</th>
      <th style="text-align:center">Status Verifikasi</th>
      <th style="text-align:center">Deskripsi Rapat</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($notulensi as $i => $notulensi) 
    <tr>
      <td width="20%" style="text-align:center">{{$notulensi->id_notulen}}</td>
      <td width="20%" style="text-align:center">{{$notulensi->permohonan_ruang_id}}</td>
      <td width="10%" style="text-align:center">{{$notulensi->nip_petugas_id}}</td>
      <td width="20%" style="text-align:center">{{$notulensi->nip_id}}</td>
      <td width="20%" style="text-align:center">{{$notulensi->nama_rapat}}</td>
      <td width="20%" style="text-align:center">{{$notulensi->agenda_rapat}}</td>
      <td width="20%" style="text-align:center">{{$notulensi->waktu_pelaksanaan}}</td>
      <td width="20%" style="text-align:center">{{$notulensi->hasil_pembahasan}}</td>
      <td width="20%" style="text-align:center">{{$notulensi->id_verifikasi}}</td>
      <td width="20%" style="text-align:center">{{$notulensi->deskripsi_rapat}}</td>
      <td width="20%" style="text-align:center" >
        <a href="{{url('notulensi/'.$notulensi->id_notulen.'/LihatHasilRapat/')}}" class="btn btn-primary btn-xs">
        <i class="fa fa-pencil-square-o"></i> Lihat</a>
        <a href="{{url('/notulensi/notulensi/'.$notulensi->id_notulen.'/Kirim/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Kirim</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Notulensi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection5