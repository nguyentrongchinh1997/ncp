<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
	
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<base href="<?php echo e(asset('')); ?>">
<title><?php echo e(config('app.name', 'Laravel')); ?></title>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="<?php echo e(asset('/js/popper.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>" defer></script>
<?php echo $__env->yieldContent('javascript'); ?>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />

<!-- Favicon -->
<link href="<?php echo e(asset('/images/logo.png')); ?>" rel="shortcut icon" type="image/x-icon" />

<!-- Styles -->
<link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('/css/fontawesome.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('/css/custom.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(asset('ckeditor_full/ckeditor.js')); ?>"></script>
<script>
	CKEDITOR.replace('noidung', {height: 1000});
</script>
<script src="<?php echo e(asset('/js/alert.js')); ?>"></script>


<?php echo $__env->make('layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/layouts/header.blade.php ENDPATH**/ ?>