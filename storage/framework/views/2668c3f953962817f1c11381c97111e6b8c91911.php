

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header text-center"><h2>Trang chủ</h2></div>
		<div class="card-body">
			<?php if(session('status')): ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<?php echo e(session('status')); ?>

					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			Trang web quản lý domain & hosting.
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/home.blade.php ENDPATH**/ ?>