<?php $__env->startSection('content'); ?>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vehicles Details</li>
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
            <th>Plate Number</th>
            <th>Vehicle Owner</th>
            <th>Type</th>
            <th>Action</th>
          
          </tr>
          
        </thead>
        <tbody>
          
          <?php $__currentLoopData = $newVehicle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($vehicle['plateNumber']); ?></td>
            <td><?php echo e($vehicle['owner']); ?></td>
            <td><?php echo e($vehicle['type']); ?></td>
           
            <td><button type="button" class="btn btn-primary btn-icon">
                <i data-feather="edit"></i>
            </button>
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
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amani/car_parking/resources/views/admin/showvechicles.blade.php ENDPATH**/ ?>