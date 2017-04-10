@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Detail Nilai
@endsection

@section('contentheader_title')
Detail Nilai
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
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('/krs-khs/khs/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Detail Nilai</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">ID Mata Kuliah</th>
      <th style="text-align:center">NIM</th>
      <th style="text-align:center">ID Jenis Penilaian</th>
      <th style="text-align:center">Detail Nilai</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($detail_nilai as $i => $a) 
    <tr>
      <td>{{ $i+1 }}</td>      
      <td width="25%" style="text-align:center">{{$a->id_mk_ditawarkan}}</td>
      <td width="25%" style="text-align:center">{{$a->NIM}}</td>
      <td width="25%" style="text-align:center">{{$a->id_jenis_penilaian}}</td>
      <td width="25%" style="text-align:center">{{$a->Detail_nilai}}</td>
      <td width="25%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus detail nilai ini?');" href="{{url('/krs-khs/khs/'.$a->id_detail_nilai.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Delete </a>
        <a href="{{url('/krs-khs/khs/'.$a->id_detail_nilai.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada detail nilai</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection