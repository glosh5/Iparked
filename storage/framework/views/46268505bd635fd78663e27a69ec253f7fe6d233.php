<?php $__env->startSection('content'); ?>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Slot</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Parking Slot</h6>
                        <form method="POST" action="<?php echo e(URL::to($userURL.'/parking/slots/edit2/'.$slot->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                
                                
                            </div><!-- Row -->
                            <div class="row">
                            
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Slot code</label>
                                        <input type="text" name="code" class="form-control" value="<?php echo e($slot->code); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Slot type</label>
                                        <select class="form-select" placeholder="Choose Type" name="category" required>
                                            <option value="<?php echo e($slot->category); ?>"><?php echo e($slot->category); ?></option>
                                            <option value="truck">Truck</option>
                                            <option value="bike">Bike</option>
                                            <option value="car">Car</option>
                                            <option value="bus">Bus</option>


                                            
                                        </select>
                                    </div>
                                </div>
                                <!-- Col -->
                                
                                
                            </div><!-- Row -->
                            <div class="row">
                                
                                
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Edit Slot</button>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
    




</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amani/newcarparking/resources/views/admin/parkingplaces/editslot.blade.php ENDPATH**/ ?>