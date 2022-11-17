<?php $__env->startSection('content'); ?>

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users Details</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">All Users</h6>
    
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Type</th>
            <th>Action</th>
          
          </tr>
          
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr>
            <td><?php echo e($user->fname); ?></td>
            <td><?php echo e($user->lname); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->phone); ?></td>
            <td><?php echo e($user->type); ?></td>
            <td><a href="<?php echo e(URL::to($userURL.'/users/edit/'.$user->id)); ?>" class="btn btn-primary btn-icon">
                <i data-feather="edit"></i>
            </a>
            <a type="button" class="btn btn-danger btn-icon" href="<?php echo e(URL::to($userURL.'/users/delete/'.$user->id)); ?>">
                <i data-feather="trash"></i>
            </a>
            <a type="button" class="btn btn-danger btn-icon" href="<?php echo e(URL::to($userURL.'/users/message/'.$user->id)); ?>">
              <i data-feather="send"></i>
          </a>
          </td>
           
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amani/newcarparking/resources/views/admin/showusers.blade.php ENDPATH**/ ?>