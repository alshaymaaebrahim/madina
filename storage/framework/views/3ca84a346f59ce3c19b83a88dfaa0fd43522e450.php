<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users Mangment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
               <li class="breadcrumb-item"><a href="/admin">Users</a></li>
              <li class="breadcrumb-item active">Add new users</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<div class="content">
  <div class="container-fluid">
    <div class="row">
    <div class="col-12">  
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new user</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="/admin/users">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">

                    <label for="name">Name</label>
                    <input type="name" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  id="name" name="name" placeholder="Enter your name">


                       <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
                    <div class="form-group">
                    <label for="emaill">Email address</label>
                    <input type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="email" name="email" placeholder="Enter email">

                      <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                          <div class="alert alert-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="password"  name="password" placeholder="Password">


                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                          <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/users/create.blade.php ENDPATH**/ ?>