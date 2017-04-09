<?php $__env->startSection('htmlheader_title'); ?>
Tambah Biodata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Tambah Biodata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-header'); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="<?php echo e(asset('/css/dropzone.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<style>
	.form-group label{
		text-align: left !important;
	}
</style>
	<!-- Ini buat menampilkan notifikasi -->
	<?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if(Session::has('alert-' . $msg)): ?>
<div class="alert alert-<?php echo e($msg); ?>">
	<p class="" style="border-radius: 0"><?php echo e(Session::get('alert-' . $msg)); ?></p>
</div>
	<?php echo Session::forget('alert-' . $msg); ?>

	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="row">
	<div class="col-md-12">
		<div class="">

			<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger">
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
			<br>
			<form id="tambahSkrispi" method="post" action="<?php echo e(url('/monsi/skripsi/create')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="NIM" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="NIM" name="NIM" placeholder="Masukkan NIM" required>
					</div>
				</div>
				<div class="form-group">
                  <label for="id_kbk" class="col-sm-2 control-label">KBK</label>
                  <div class="col-md-8">
                  <select name="id_kbk" class="form-control">
                    <option id="id_kbk" name="id_kbk" value="1">Data Mining</option>
                    <option id="id_kbk" name="id_kbk" value="2">Sistem Pengambilan Keputusan</option>
                    <option id="id_kbk" name="id_kbk" value="3">Information System Engineering</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
					<label for="Judul" class="col-sm-2 control-label">Judul</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="Judul" name="Judul" placeholder="Masukkan Judul" required>
					</div>
					</div>
				 <div class="form-group">
					<label for="upload_berkas_proposal" class="col-sm-2 control-label">File Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="upload_berkas_proposal" name="upload_berkas_proposal" placeholder="Masukkan Link File" required>
					</div>
					</div>
               
                 <div class="form-group">
					<label for=" tanggal_pengumpulan_proposal" class="col-sm-2 control-label">Tanggal Pengumpulan Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name=" tanggal_pengumpulan_proposal" placeholder="Masukkan Tanggal" required>
					</div>
				</div>


                <div class="form-group">
					<label for="tgl_sidangpro" class="col-sm-2 control-label">Tanggal Sidang Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker2" name="tgl_sidangpro" placeholder="Masukkan Tanggal" required>
					</div>
				</div>

				<div class="bootstrap-timepicker">
                <div class="form-group">
                  <label for="waktu_sidangpro" class="col-sm-2 control-label">Waktu Sidang Proposal</label>
                  <div class="col-md-8">
                  <div class="input-group">
                    <input type="text" name="waktu_sidangpro" class="form-control timepicker" value="07:00">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>


				<div class="form-group">
					<label for="tempat_sidangpro" class="col-sm-2 control-label">Tempat Sidang Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="tempat_sidangpro" name="tempat_sidangpro" placeholder="Masukkan Tempat" required>
					</div>
					</div>

					<div class="form-group">
                  <label for="id_statusprop" class="col-sm-2 control-label">Status Proposal</label>
                  <div class="col-md-8">
                  <select name="id_statusprop" class="form-control">
                    <option id="id_statusprop" name="id_statusprop" value="1">BELUM</option>
                    <option id="id_statusprop" name="id_statusprop" value="2">REVISI</option>
                    <option id="id_statusprop" name="id_statusprop" value="3">LULUS</option>
                  </select>
                </div>
                </div>

                <div class="form-group">
					<label for="nilai_sidangpro" class="col-sm-2 control-label">Nilai Sidang Proposal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nilai_sidangpro" name="nilai_sidangpro" placeholder="Masukkan Nilai" required>
					</div>
					</div>

					<div class="form-group">
					<label for="upload_berkas_skripsi" class="col-sm-2 control-label">File Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="upload_berkas_skripsi" name="upload_berkas_skripsi" placeholder="Masukkan Link File" required>
					</div>
					</div>
               
                 <div class="form-group">
					<label for=" tanggal_pengumpulan_skripsi" class="col-sm-2 control-label">Tanggal Pengumpulan Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker3" name=" tanggal_pengumpulan_skripsi" placeholder="Masukkan Tanggal" required>
					</div>
				</div>


                <div class="form-group">
					<label for="tgl_sidangskrip" class="col-sm-2 control-label">Tanggal Sidang Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker4" name="tgl_sidangskrip" placeholder="Masukkan Tanggal" required>
					</div>
				</div>

				<div class="bootstrap-timepicker">
                <div class="form-group">
                  <label for="waktu_sidangskrip" class="col-sm-2 control-label">Waktu Sidang Skripsi</label>
                  <div class="col-md-8">
                  <div class="input-group">
                    <input type="text" name="waktu_sidangskrip" class="form-control timepicker" value="07:00">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

				<div class="form-group">
					<label for="tempat_sidangskrip" class="col-sm-2 control-label">Tempat Sidang Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="tempat_sidangskrip" name="tempat_sidangskrip" placeholder="Masukkan Tempat" required>
					</div>
					</div>

					<div class="form-group">
                  <label for="id_statusskrip" class="col-sm-2 control-label">Status Skripsi</label>
                  <div class="col-md-8">
                  <select name="id_statusskrip" class="form-control">
                    <option id="id_statusskrip" name="id_statusskrip" value="1">BELUM</option>
                    <option id="id_statusskrip" name="id_statusskrip" value="2">REVISI</option>
                    <option id="id_statusskrip" name="id_statusskrip" value="3">LULUS</option>
                  </select>
                  </div>
                </div>

                <div class="form-group">
					<label for="nilai_sidangskrip" class="col-sm-2 control-label">Nilai Sidang Skripsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nilai_sidangskrip" name="nilai_sidangskrip" placeholder="Masukkan Nilai" required>
					</div>
					</div>

					<div class="form-group">
                  <label for="is_verified" class="col-sm-2 control-label">Status Konsultasi</label>
                  <div class="col-md-8">
                  <select name="is_verified" class="form-control">
                    <option id="is_verified" name="is_verified" value="1">BELUM</option>
                    <option id="is_verified" name="is_verified" value="2">VERIFIKASI</option>
                  </select>
                </div>
                </div>

				<div class="form-group">
					<label for="nip_petugas" class="col-sm-2 control-label">NIP</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nip_petugas" name="nip_petugas" placeholder="Masukkan NIP" required>
					</div>
				</div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
  <script>
$( function() {
    var date = $('#datepicker2').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
  <script>
$( function() {
    var date = $('#datepicker3').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
  <script>
$( function() {
    var date = $('#datepicker4').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>

<script>
	$(".timepicker").timepicker({
      showInputs: false
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>