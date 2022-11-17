<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="sidebar-dark">
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper" style="background-image:url('<?php echo e(asset('assets/parking2.png')); ?>')">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">Car<span>Parking</span></a>
                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                    <form class="forms-sample" method="POST" action="<?php echo e(route('signingIn')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php if(Session::has('error')): ?>
                        <p style="color:red"><?php echo e(Session::get('error')); ?>

                            
                        </p><br><?php endif; ?>



                        
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="userEmail" placeholder="Email">
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password"  name="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>
                      </div>
                      <div>
                        <button  type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                        
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="https://www.nobleui.com/html/template/assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="https://www.nobleui.com/html/template/assets/vendors/feather-icons/feather.min.js"></script>
	
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>

<!-- Mirrored from www.nobleui.com/html/template/demo1-ds/pages/auth/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 15:18:45 GMT -->
</html><?php /**PATH /home/bagloria/public_html/resources/views/welcome.blade.php ENDPATH**/ ?>