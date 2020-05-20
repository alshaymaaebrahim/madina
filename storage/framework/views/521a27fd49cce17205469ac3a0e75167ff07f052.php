<?php $__env->startSection('title','الرئيسية'); ?>
<?php $__env->startSection('content'); ?>
<div class="container marketing">

<!-- Three columns of text below the carousel -->

<div class="row">
  <div class="col-lg-4 text-center">
<img class="img  rounded-circle " src="<?php echo e(asset('img/ee.png')); ?>">
   
    <p><a class="btn btn-secondary" href="/ershadat" role="button">الارشادات  &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
<img class="img rounded-circle " src="<?php echo e(asset('img/HH.png')); ?>">
    <p><a class="btn btn-secondary" href="/mawaidAltaqdim " role="button">مواعيد التقديم  للمدينه &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
 <img class="img  rounded-circle " src="<?php echo e(asset('img/tt.png')); ?>">
    <p><a class="btn btn-secondary" href="/gadwelAltaskin" role="button">جدول التسكين  &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div>


 <div class="row">
  <div class="col-lg-4">
   
<img class="img  rounded-circle" src="<?php echo e(asset('img/BB.jpg')); ?> ">
   
    <p><a class="btn btn-secondary" href="/tasgilDkholAltalep" role="button">تسجيل دخول الطلاب   &raquo;</a></p>
    
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
<img class="img  rounded-circle " src="<?php echo e(asset('img/CC.png')); ?>">
 <p><a class="btn btn-secondary" href="/eltmas" role="button">الالتماسات  &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <img class="img rounded-circle " src="<?php echo e(asset('img/zz.png')); ?>">
 <p> <a class="btn btn-secondary" href="/shakawyAndMoktarahat" role="button">شكاوي ومقترحات   &raquo;</a></p>
  </div><!-- /.col-lg-4 -->

 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/user/home.blade.php ENDPATH**/ ?>