<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Input Penilaian
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
			 <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Tugas" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>

              <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Kuis" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>

               <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="UTS" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>
                            
               <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="UAS" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>

               <div class="form-group row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="Softskill" disabled="">
                                </div>

                                <div class="col-xs-2">
                                	<input type="text" class="form-control">
                                </div>
                            </div>
        <div class="row">
            <div class="col-sm-4">
              <button type="submit" class="pull-right btn-primary">Submit</button>
              </div>
          </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>