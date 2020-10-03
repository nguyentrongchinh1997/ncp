<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Xóa hosting</div>
		<div class="card-body">
			<form action="<?php echo e(url('/hosting/xoa/' . $hosting->id)); ?>" method="post">
				<?php echo csrf_field(); ?>
				<p>Bạn có muốn xóa hosting <?php echo e($hosting->diachiip); ?> không?</p>
				
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/hosting/xoa.blade.php ENDPATH**/ ?>