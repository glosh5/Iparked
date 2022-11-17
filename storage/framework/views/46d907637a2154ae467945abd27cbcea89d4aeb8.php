<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Car-Parking</title>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="sidebar-dark">
	<div class="main-wrapper">
        <div class="page-wrapper">
            <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
   

</body>
<script src="<?php echo e(asset('assets/js/sweetalert.min.js')); ?>"></script>
<script>
    <?php if(session('sweet')): ?>
    swal("<?php echo e(session('sweet')['title']); ?>", "<?php echo e(session('sweet')['message']); ?>", "<?php echo e(!empty(session('sweet')['type'])? session('sweet')['type']: 'success'); ?>");
    <?php endif; ?>
</script>
<?php echo $__env->yieldSection(); ?>
</html><?php /**PATH /home/amani/car_parking/resources/views/layouts/master-admin.blade.php ENDPATH**/ ?>