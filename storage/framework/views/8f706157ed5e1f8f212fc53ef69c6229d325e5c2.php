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
            <th>Vehicle Name</th>
            <th>Owner</th>
            <th>Spot</th>
            <th>Checkin</th>
            <th>Checkout</th>
            <th>Fees</th>
            <th>Status</th>
          
            <th>RecordedBy</th>
          
            <th>Action</th>
            

          </tr>
          
        </thead>
        <tbody>
           <?php $__currentLoopData = $parkedVehicle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr>
            <td><?php echo e($parking['name']); ?></td>
            <td><?php echo e($parking['owner']); ?></td>
            <td><?php echo e($parking['spot']); ?></td>
            <td><?php echo e($parking['checkin']); ?></td>
            <td><?php echo e($parking['checkout']); ?></td>
            <td><?php echo e($parking['fees']); ?></td>
            <td><?php echo e($parking['status']); ?></td>
            <td><?php echo e($parking['recordedBy']); ?></td>
            <td>
              <a type="button" class="btn btn-primary btn-icon" href="<?php echo e(URL::to($userURL.'/parkedCar/checkout/'.$parking['id'].'/'.$parking['vehicleId'])); ?>">
                <i data-feather="edit"></i>
              </a>
            <button type="button" class="btn btn-danger btn-icon">
                <i data-feather="trash"></i>
            </button></td>
           
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
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bagloria/public_html/resources/views/admin/parkedcars/show.blade.php ENDPATH**/ ?>