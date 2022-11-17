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
                    <h6 class="card-title">Add Parked Car</h6>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">For ordinary user</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(URL::to('/admin')); ?>">For new user</a></li>
                    </ol>
                        <form method="POST" action="<?php echo e(URL::to($userURL.'/parkedCar/create')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Vehicles</label>
                                        <select class="js-example-basic-single form-select" data-width="100%" name="vehicle">
                                            <option value="">Select Vehicle</option>
                                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->plateNumber); ?></option>
                                        
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Location</label>
                                        <select class="form-select" data-width="100%" id="location" name="spot">
                                            <option value="">Select Location</option>
                                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($vehicle['id']); ?>"><?php echo e($vehicle['name']); ?></option>
                                        
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    
                                </div><!-- Col -->
                                
                                
                            </div><!-- Row -->
                            <div class="row">
                                
                                
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Add Record</button>
                        </form>
                      
                </div>
            </div>
        </div>
    </div>
    




</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bagloria/public_html/resources/views/admin/parkedcars/index.blade.php ENDPATH**/ ?>