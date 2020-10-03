<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Xóa domain</div>
		<div class="card-body">
			<form action="<?php echo e(url('/domain/xoa/' . $domain->id)); ?>" method="post">
				<?php echo csrf_field(); ?>
				<p>Bạn có muốn xóa domain <?php echo e($domain->tendomain); ?> không?</p>
				
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/domain/xoa.blade.php ENDPATH**/ ?>