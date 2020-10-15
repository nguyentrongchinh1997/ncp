<?php $__env->startSection('content'); ?>

<div>
    <div class="card">
		<div class="card-header">Đăng ký mua hosting</div>
		<div class="card-body">
			<form class="regishosting" action="<?php echo e(url('/sanpham/regishosting')); ?>" method="post">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="option" value="<?php echo e($option); ?>">		
				<div class="form-group">
					<label for="loaihosting">Loại Hosting</label>
					<select class="form-control <?php $__errorArgs = ['loaihosting'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="loaihosting" name="product">
						<option>-- Chọn loại hosting --</option>
						<option <?php if($option == 75): ?><?php echo e('selected'); ?><?php endif; ?>>Start - 75.000VND</option>
						<option <?php if($option == 175): ?><?php echo e('selected'); ?><?php endif; ?>>Professional - 175.000VND</option>
						<option <?php if($option == 350): ?><?php echo e('selected'); ?><?php endif; ?>>Enterprise - 350.000VND</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Số tháng</label>
					<select name="time" id="" class="form-control">
						<option value="6">6 tháng</option>
						<option value="12">12 tháng</option>
						<option value="18">18 tháng</option>
						<option value="24">24 tháng</option>
						<option value="30">30 tháng</option>
						<option value="36">36 tháng</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
		</div>
	</div>
</div>
<script>
	<?php if(session('success')): ?>
		Swal.fire({
			title: 'Cho vào giỏ hàng thành công',
			icon: 'success',
			confirmButtonText: 'OK'
		});
	<?php endif; ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/sanpham/regishosting.blade.php ENDPATH**/ ?>