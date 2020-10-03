<?php $__env->startSection('pagetitle'); ?>
	Reset password
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Khôi phục mật khẩu</div>
				<div class="card-body">
					<form method="post" action="<?php echo e(route('password.update')); ?>">
						<?php echo csrf_field(); ?>
						<input type="hidden" name="token" value="<?php echo e($token); ?>" />
						<div class="form-group">
							<label for="email">Địa chỉ email</label>
							<input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="<?php echo e($email ?? old('email')); ?>" required />
							<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu mới</label>
							<input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" required />
							<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="form-group">
							<label for="password-confirm">Xác nhận mật khẩu</label>
							<input type="password" class="form-control" id="password-confirm" name="password_confirmation" required />
							<?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="form-group mb-0">
							<button type="submit" class="btn btn-primary"><i class="fal fa-exchange-alt"></i>Đặt lại mật khẩu</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\qlsv_v4.0\resources\views/auth/passwords/reset.blade.php ENDPATH**/ ?>