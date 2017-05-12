@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Rundown
@endsection

@section('contentheader_title')
Tambah Rundown
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>
	<!-- Ini buat menampilkan notifikasi -->
	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
	<p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
	{!!Session::forget('alert-' . $msg)!!}
	@endif
	@endforeach


<div class="row">
	<div class="col-md-12">
		<div class="">

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<br>
			<form id="tambahDokumentasi" method="post" action="{{url('/karyawan/pengelolaan-kegiatan/dokumentasi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<!-- Menampilkan input text biasa -->
    <div class="form-group">
     <label for="nim" class="col-sm-2 control-label">ID dokumentasi</label>
     <div class="col-md-8">
      <input type="text" class="form-control input-lg" id="id_dokumentasi" name="id_dokumentasi" placeholder="Masukkan ID dokumentasi" required>
     </div>
    </div>

    <div class="form-group">
     <label for="nama" class="col-sm-2 control-label">ID kegiatan</label>
     <div class="col-md-8">
      <input type="text" class="form-control input-lg" id="kegiatan_id" name="kegiatan_id" placeholder="Masukkan ID kegiatan" required>
     </div>
    </div>


			<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="lesson_learned" class="col-sm-2 control-label">Lesson Learned</label>
					<div class="col-md-8">
						<textarea id="lesson_learned" name="lesson_learned" placeholder="Masukkan Feedback" required cols="82" rows="5">
						</textarea>
					</div>
				</div>


				<div class="form-group">
     	<label for="url_foto" class="col-sm-2 control-label">url foto</label>
     	<div class="col-md-8">
      	<input type="text" class="form-control input-lg" id="url_foto" name="url_foto" placeholder="Masukkan url" required>
     	</div>
    	</div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Publish
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection
