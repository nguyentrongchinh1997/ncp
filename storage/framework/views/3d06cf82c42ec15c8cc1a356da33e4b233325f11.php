

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Thêm hosting</div>
		<div class="card-body">
			<?php if(session('error')): ?>
			<div class="alert alert-danger">
				<?php echo e(session('error')); ?>

			</div>
			<?php endif; ?>
			<form action="<?php echo e(url('/hosting/them')); ?>" method="post">
				<?php echo csrf_field(); ?>

				<div class="form-group">
					<label for="diachiip">Địa chỉ IP</label>
					<input type="text" class="form-control <?php $__errorArgs = ['diachiip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="diachiip" name="diachiip"/>
					<?php $__errorArgs = ['diachiip'];
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
					<label for="giatien">Giá tiền</label>
					<select class="form-control" name="giatien">
						<option value="75000">75.000</option>
						<option value="175000">175.000</option>
						<option value="350000">350.000</option>
					</select>
					<?php $__errorArgs = ['giatien'];
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
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/hosting/them.blade.php ENDPATH**/ ?>