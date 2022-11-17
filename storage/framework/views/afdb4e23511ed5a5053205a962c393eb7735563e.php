<?php $__env->startSection('content'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add User</li>
        </ol>
    </nav>

   
  
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Parking Location</h6>
                        <form method="POST" action="<?php echo e(URL::to($userURL.'/parking/edit2/'.$location->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo e($location->name); ?>" >
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Available Spots</label>
                                        <input type="number"  name="spots" class="form-control" value="<?php echo e($location->Available_spot); ?>" >
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Price per hour</label>
                                        <input type="number" name="price" class="form-control" value="<?php echo e($location->Price_per_hourly); ?>">
                                    </div>
                                </div><!-- Col -->
                                
                                
                            </div><!-- Row -->
                            <div class="row">
                                
                                
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Edit Place</button>
                        </form>
                      
                </div>
            </div>
        </div>
    </div>
    




</div>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amani/newcarparking/resources/views/admin/parkingplaces/edit.blade.php ENDPATH**/ ?>