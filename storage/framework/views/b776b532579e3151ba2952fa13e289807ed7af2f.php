<?php $__env->startSection('title','نتيجة القبول'); ?>
<?php $__env->startSection('content'); ?>
<div class="natigatElkopol">
            <div class="card border-secondary mb-3">
                    <div class="card-header">للاستعلام  عن نتيجه القبول بالمدينه</div>
                    <div class="card-body text-secondary" >
                      <h5 class="card-title">أدخل:</h5>
                      <form class="form-inline">
                      <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only"> الرقم القومي </label>
                      <input type="password" class="form-control" id="inputPassword2" placeholder="الرقم القومي">
                    </div>
                    <button type="submit" class="  btn btn-primary mb-2"> <span class="mdi mdi-alert-circle-outline"> إستعلام </span></button>
                  </form>
                    </div>
         </div>
      
    </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/user/nategatAlqupole.blade.php ENDPATH**/ ?>