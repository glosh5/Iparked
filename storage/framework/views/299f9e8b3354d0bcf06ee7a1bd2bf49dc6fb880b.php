<?php $__env->startSection('content'); ?>

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Parking Slot Details</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title"><?php echo e($parkingLocation->name); ?> Slots </h6>
    
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>code/Name</th>
            <th> Category</th>
            <th> Status</th>
            <th>Action</th>
         
          
          </tr>
          
        </thead>
        <tbody>
            <?php $__currentLoopData = $parkings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr>
            <td><?php echo e($parking->code); ?></td>
            <td><?php echo e($parking->category); ?></td>
            <td><?php echo e($parking->status); ?></td>
          
            <td><a type="button" class="btn btn-primary btn-icon" href="<?php echo e(URL::to($userURL.'/parking/slots/edit/'.$parking->id)); ?>">
                <i data-feather="edit"></i>
            </a>
            <a type="button" class="btn btn-danger btn-icon" href="<?php echo e(URL::to($userURL.'/parking/slots/delete/'.$parking->id)); ?>">
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
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bagloria/public_html/resources/views/admin/parkingplaces/showParkingSlosts.blade.php ENDPATH**/ ?>