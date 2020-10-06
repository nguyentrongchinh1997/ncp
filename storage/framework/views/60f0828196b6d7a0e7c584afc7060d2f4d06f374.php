<?php $__env->startSection('content'); ?>
<style type="text/css">
	li.tab{
		width: 33%;
	}
	.design{
		font-size: 20px;
	}
	.searchdomain{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	form.form-inline{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	
</style>

<div class="container w-100 h-100">
	<div class="row w-100 h-100 searchdomain">
		<form class="form-inline md-form mb-4 border border-secondary rounded" method="get" action="<?php echo e(url()->current()); ?>">
			<h3 class="text-dark text-center w-100 font-weight-bold rounded">Tìm kiếm tên miền</h3>
	  		<input class="form-control mr-sm-2 mr mb-1" name="query" type="text" placeholder="Tìm kiếm" aria-label="Search">
	  		<button class="btn btn-success btn-rounded btn-sm my-0 mb-1" type="submit">Tìm kiếm</button>
		</form>
	</div>
	

	<div class="row w-100 h-100">
		<?php if(session('error')): ?>
			<div class="col-lg-12 alert alert-danger">
				<?php echo e(session('error')); ?>

			</div>
		<?php endif; ?>
		<?php if(!empty($query)): ?>
			<?php $__currentLoopData = config('config.domain'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $domain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-6">
					<?php echo e($query); ?>.<?php echo e($key); ?>

				</div>
				<div class="col-lg-6">
					<form action="<?php echo e(route('buy-domain-form')); ?>">
						<input type="hidden" name="price" value="<?php echo e($domain); ?>">
						<input type="hidden" name="domain" value="<?php echo e($query); ?>.<?php echo e($key); ?>">
						<table>
							<tr>
								<td style="width: 100px">
									<span>
										<?php echo e(number_format($domain)); ?>

									</span>
								</td>
								<td>
									<button>Chọn mua</button>
								</td>
							</tr>
						</table>
					</form>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
		

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views//sanpham/sanphamdomain.blade.php ENDPATH**/ ?>