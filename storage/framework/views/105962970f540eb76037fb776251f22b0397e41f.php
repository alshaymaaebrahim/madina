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
              <li class="breadcrumb-item active">users</li>
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
        <?php if(session('status')): ?>
          <div class="alert alert-success">
              <?php echo e(session('status')); ?>

          </div>
        <?php endif; ?>
            <div class="card">
              <div class="card-header  bg-dark">
                <h3 class="card-title">UsersList</h3>

                <div class="card-tools">
                  <a href ='/admin/users/create' class="btn btn-primary float-right"> Add new users </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                      <td><?php echo e($user->id); ?></td>
                      <td><?php echo e($user->name); ?></td>
                      <td><?php echo e($user->email); ?></td>
                      <td><?php echo e($user->created_at); ?></td>
                      <td>
                      <a href="/admin/users/ <?php echo e($user->id); ?> /edit" class="bnt btn-info btn-sm"><i class="fa fa-edit"></i>
                        Edit</a>
                         <a href="/" class="bnt btn-danger btn-sm"   
                                       onclick="event.preventDefault();
                                       return confirm('Are you sure you want to deletes this user')?
                                                     $(this).find('#delete-form').submit():'';">

                          <i class="fa fa-trash"></i>
                        Delete

                         <form id="delete-form" action="/admin/users/ <?php echo e($user->id); ?>" method="POST" style="display: none;">
                          <?php echo method_field('DELETE'); ?>
                          <?php echo csrf_field(); ?>
                          </form>
</a>
                 
                      </td>
                    </tr> 

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>



  </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/users/index.blade.php ENDPATH**/ ?>