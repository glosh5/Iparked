<?php $__env->startSection('content'); ?>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Vehicle</li>
        </ol>
    </nav>

   
  
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Vehicle</h6>
                        <form method="POST" action="<?php echo e(URL::to($userURL.'/vehicles/create')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Plate Number</label>
                                        <input type="text" name="plate" class="form-control" placeholder="Plate Number" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Vehicle Owner</label>
                                        <select class="form-select" placeholder="Choose Type" name="owner" required>
                                            <option>Choose Owner</option>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->fname." ".$user->lname); ?></option>
                                           
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                
                                
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Type</label>
                                        <select class="form-select" placeholder="Choose Type" name="Type" required>
                                            <option>Choose Type</option>
                                            <option value="truck">Truck</option>
                                            <option value="bike">Bike</option>
                                            <option value="car">Car</option>
                                            <option value="bus">Bus</option>


                                            
                                        </select>

                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            
                            <button type="submit" class="btn btn-primary submit">Add Vehicle</button>
                        </form>
                      
                </div>
            </div>
        </div>
    </div>
    




</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amani/car_parking/resources/views/admin/createvehicles.blade.php ENDPATH**/ ?>