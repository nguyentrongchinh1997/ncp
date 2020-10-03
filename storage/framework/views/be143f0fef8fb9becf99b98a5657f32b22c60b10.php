<?php $__env->startSection('content'); ?>

<div>
    <div class="card">
		<div class="card-header">Đăng ký mua hosting</div>
		<div class="card-body">
			<form class="regishosting" action="<?php echo e(url('/sanpham/regishosting')); ?>" method="post">
				<?php echo csrf_field(); ?>
				<div class="form-group">
					<label for="dienthoai">Điện thoại</label>
					<input type="text" class="form-control <?php $__errorArgs = ['dienthoai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="dienthoai" name="dienthoai" />
					<?php $__errorArgs = ['dienthoai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<span class="invalid-feedback" role="alert"><?php echo e($message); ?></span>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				
				<div class="form-group">
					<label for="loaihosting">Loại Hosting</label>
					<select class="form-control <?php $__errorArgs = ['loaihosting'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="loaihosting" name="loaihosting">
						<option>-- Chọn loại hosting --</option>
						<option>Start - 75.000VND</option>
						<option>Professional - 175.000VND</option>
						<option>Enterprise - 350.000VND</option>
					</select>
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
			<?php if(Session::has('success')): ?>
				<style type="text/css">
					.regishosting{
						display: none;
					}
				</style>
	            <div class="alert alert-success">
	                <?php echo e(Session::get('success')); ?>

	                <a class="btn btn-primary" href="/sanpham/sanphamhosting">Quay lại</a>
	            </div>
        	<?php endif; ?>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/sanpham/regishosting.blade.php ENDPATH**/ ?>