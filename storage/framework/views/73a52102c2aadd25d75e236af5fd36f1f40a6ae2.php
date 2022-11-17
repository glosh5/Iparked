<?php $__env->startSection('content'); ?>
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        


      </div>
    </div>

    <div class="row">
      <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow-1">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">Vehicles</h6>
                  <div class="dropdown mb-2">
                    
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2"><?php echo e($vehicles); ?></h3>
                    <div class="d-flex align-items-baseline">
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">Parking Slots</h6>
                  <div class="dropdown mb-2">
                    
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2"><?php echo e($parkingslots); ?></h3>
                    <div class="d-flex align-items-baseline">
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">Parking Locations</h6>
                  <div class="dropdown mb-2">
                    
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2"><?php echo e($parking); ?></h3>
                    <div class="d-flex align-items-baseline">
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- row -->

    

    

    <div class="row">
      <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">

      </div>
      <div class="col-lg-12 col-xl-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0">Parked Vehicles</h6>
              <div class="dropdown mb-2">
                
                
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th class="pt-0">#</th>
                    <th class="pt-0">Vehicle Name</th>
                    <th class="pt-0">Check in</th>
                    <th class="pt-0">Check out</th>
                    <th class="pt-0">Status</th>
                    <th class="pt-0">Owner By</th>
                    <th class="pt-0">Recored By</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $parked; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $park): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                   
                    <td><?php echo e($park['id']); ?></td>
                    <td><?php echo e($park['vehiclename']); ?></td>
                    <td><?php echo e($park['checkin']); ?></td>
                    <td><?php echo e($park['checkout']); ?></td>
                        <?php if($park['status'] == 'checkedout'): ?>
                    <td><span class="badge bg-success"><?php echo e($park['status']); ?></span></td>
                        <?php endif; ?>
                        <?php if($park['status'] == 'pending'): ?>
                        <td><span class="badge bg-denger"><?php echo e($park['status']); ?></span></td>
                            <?php endif; ?>
                    <td><?php echo e($park['owner']); ?></td>
                    <td><?php echo e($park['recordedBy']); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






                </tbody>
              </table>
            </div>
          </div> 
        </div>
      </div>
    </div> <!-- row -->

        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bagloria/public_html/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>