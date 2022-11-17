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
            <th>Name</th>
            <th>Parking slots</th>
            <th>Price per hour</th>
            <th>Action</th>
            
          </tr>
          
        </thead>
        <tbody>
           <?php $__currentLoopData = $parkings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr>
            <td><?php echo e($parking['name']); ?></td>
            <td><?php echo e($parking['Available_spot']); ?></td>
            <td><?php echo e($parking['Price_per_hourly']); ?></td>
           
            <td>
              <?php if($parking['parking_slots'] > 0): ?>
              <a type="button" href="<?php echo e(URL::to($userURL.'/parking/slots/show/'.$parking['id'])); ?>" class="btn btn-primary btn-icon">
                <i data-feather="eye"></i>
              </a>
              <?php endif; ?>
              <?php if($parking['parking_slots'] == 0): ?>
              <a type="button" href="<?php echo e(URL::to($userURL.'/parking/slots/'.$parking['id'])); ?>" class="btn btn-success btn-icon">
                <i data-feather="plus"></i>
              </a>
              <?php endif; ?>
             
              
              <a type="button" class="btn btn-primary btn-icon" href="<?php echo e(URL::to($userURL.'/parking/edit/'.$parking['id'])); ?>">
                <i data-feather="edit"></i>
              </a>
            <a href="<?php echo e(URL::to($userURL.'/parking/delete/'.$parking['id'])); ?>" class="btn btn-danger btn-icon">
                <i data-feather="trash"></i>
            </a></td>
           
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
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bagloria/public_html/resources/views/admin/parkingplaces/show.blade.php ENDPATH**/ ?>