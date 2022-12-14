<?php $__env->startSection('content'); ?>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Send message to the User</li>
        </ol>
    </nav>

   
  
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Message User</h6>
                        <form method="POST" action="<?php echo e(URL::to($userURL.'/users/messages')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="fname" class="form-control" value="<?php echo e($user->fname); ?>" disabled >
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text"  name="lname" class="form-control" value="<?php echo e($user->lname); ?>" disabled >
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="number" name="phone" class="form-control" value="<?php echo e($user->phone); ?>"  required>
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Type</label>
                                        <select class="form-select" value="<?php echo e($user->type); ?>" name="type"  disabled>
                                            <option><?php echo e($user->type); ?></option>
                                            <option value="gatePerson">gatePerson</option>
                                            <option value="VehicleOwner">VehicleOwner</option>
                                            
                                        </select>

                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                            <!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" class="form-control" autocomplete="off" placeholder="Message" required></textarea>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Send Message</button>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
    




</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bagloria/public_html/resources/views/admin/messages.blade.php ENDPATH**/ ?>