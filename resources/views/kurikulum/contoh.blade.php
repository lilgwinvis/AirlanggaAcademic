@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('main-content')
<<<<<<< HEAD
<form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
=======
<!-- Kodingan HTML ditaruh di sini -->
<<<<<<< HEAD
<p> halo </p>
=======
<<<<<<< HEAD
<div class="box box-info">
            
            <div class="box-body">

              <form action="<?php echo base_url()."index.php/C_Surat/MasukanNoRubrik";?>" method="post" class="form-horizontal">
              <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="kepada" >Kepada :</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="kepada" placeholder="" required>
                    </div>
                  </div>
                  
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="b_backdate" >Jenis Surat :</label>
                    <div class="col-sm-9">
                              <select class="form-control" name="jenis_surat" required>
                              <option value="" >Pilih Jenis Surat</option>
                              <option value="1" selected>Biasa</option>
                              <option value="2">Rahasia</option>
                            </select>
               
                    </div>
                 </div>
                
              </div>
              </div>
              <div class="row">
              <div class="col-sm-6">
              <div class="form-group">
                    <label class="control-label col-sm-2" for="perihal" >Perihal :</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="perihal" placeholder="" required>
                    </div>
                 </div>
                 </div></div>


                 <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="kirim">Kirim
               </button>
            </div>
              </form>
            </div>
           
          </div>
=======
<p> halo </p>
>>>>>>> 2c1eedec33a56715f523b130714d4dac1d9f56d7
<<<<<<< HEAD
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
=======
>>>>>>> 11e2e7cc4bfdbcc2b0b3d0171e275d7173763d66
>>>>>>> e1988d14e0ddc8545d70082aa9525f9a6364703f
>>>>>>> 8a28bc7915b37b5d338160ad5facbf7f38d6ac50
@endsection

@section('code-footer')




@endsection