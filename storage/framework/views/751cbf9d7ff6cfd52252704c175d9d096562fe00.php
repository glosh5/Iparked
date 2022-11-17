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
                    <h6 class="card-title">Add User</h6>
                        <form method="POST" action="<?php echo e(URL::to($userURL.'/users/create')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="Enter first name" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text"  name="lname" class="form-control" placeholder="Enter last name" required>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Enter Phone" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Tag id</label>
                                        <input type="text" class="form-control" placeholder="Enter Tag ID" name="tag_id">
                                    </div>
                                </div>
                                <?php if(Auth::user()->type == 'Admin'): ?>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Location</label>
                                        <select class="form-select" placeholder="Choose Type" name="location_id" required>
                                            <option>Choose Location</option>
                                            <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($loc->id); ?>"><?php echo e($loc->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Type</label>
                                        <select class="form-select" placeholder="Choose Type" name="Type" required>
                                            <option>Choose Type</option>
                                            <?php if(Auth::user()->type == 'Admin'): ?>
                                            <option value="gatePerson">gatePerson</option>
                                            <?php endif; ?>
                                            <option value="VehicleOwner">VehicleOwner</option>
                                            
                                        </select>

                                    </div>
                                    
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" required>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Add User</button>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
    




</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bagloria/public_html/resources/views/admin/index.blade.php ENDPATH**/ ?>