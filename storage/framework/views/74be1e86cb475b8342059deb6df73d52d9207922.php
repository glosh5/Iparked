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
                        <form method="POST" action="<?php echo e(URL::to($userURL.'/parking/slots/create/'.$parkings->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="<?php echo e($parkings->name); ?>" disabled>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Available Spots</label>
                                        <input type="number"  name="spots" class="form-control" placeholder="<?php echo e($parkings->Available_spot); ?>" disabled>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <?php for($i=1;$i<=$parkings->Available_spot;$i++): ?>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Slot <?php echo e($i); ?> code</label>
                                        <input type="text" name="codes[]" class="form-control" placeholder="Enter Code" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Slot <?php echo e($i); ?> type</label>
                                        <select class="form-select" placeholder="Choose Type" name="categories[]" required>
                                            <option>Choose Type</option>
                                            <option value="truck">Truck</option>
                                            <option value="bike">Bike</option>
                                            <option value="car">Car</option>
                                            <option value="bus">Bus</option>


                                            
                                        </select>
                                    </div>
                                </div>
                                <?php endfor; ?><!-- Col -->
                                
                                
                            </div><!-- Row -->
                            <div class="row">
                                
                                
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Add Slot</button>
                        </form>
                      
                </div>
            </div>
        </div>
    </div>
    




</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amani/car_parking/resources/views/admin/parkingplaces/createSlot.blade.php ENDPATH**/ ?>