
   
<?php $__env->startSection('content'); ?>
<?php if(isset($error) && $error != "") { ?>
  <div class="row ins-seven">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger">
        <strong><?php echo e($error); ?></strong>
      </div>
    </div>
  </div>
<?php } ?>
<div class="row ins-two">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-body">
        <div class="panel panel-default ins-three" data-collapsed="0">
          <!-- panel body -->
          <div class="panel-body ins-four">
            <p class="ins-four">
              <?php echo e(phrase('Provide your codecanyon')); ?> <strong><?php echo e(phrase('purchase code')); ?></strong>
            </p>
            <br>
            <div class="row">
              <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="<?php echo e(route('install.validate')); ?>">
                  <?php echo csrf_field(); ?> 
                  <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo e(phrase('Purchase Code')); ?></label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control eForm-control" name="purchase_code" placeholder="Product's Purchase Code"
                        required autofocus autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-7">
                      <button type="submit" class="btn btn-info"><?php echo e(phrase('Continue')); ?></button>
                    </div>
                  </div>
                </form>
                <br>
                <p>
                  <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">
                    <strong><?php echo e(phrase('Where to get my purchase code ?')); ?></strong>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('install.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ekattor/Ekattor8/resources/views/install/step2.blade.php ENDPATH**/ ?>