

<?php $__env->startSection('content'); ?>
<div class="card">
        <div class="card-header text-center"><h2>Doanh thu</h2></div>
        <div class="card-header text-center">
        <form action="<?php echo e(url()->current()); ?>" method="GET">
            <input value="<?php echo e($date); ?>" type="date" name="date" class="form-control">
            <br>
            <button class="btn btn-primary" type="submit">
                LỌC
            </button>
        </form>
        </div>
		<div class="card-body">
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>
							Khách hàng
						</th>
						<th>Domain/Host</th>
						<th>Thu</th>
					</tr>
				</thead>
				<tbody>
                    <?php $__currentLoopData = $revenues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $revenueItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($key+1); ?>

                            </td>
                            <td>
                                <p>
									Tên: <b><?php echo e($revenueItem->nguoiDung->name); ?></b>
								</p>
								<p>
									Email: <b><?php echo e($revenueItem->nguoiDung->email); ?></b>
								</p>
								<p>
									SĐT: <b><?php echo e($revenueItem->nguoiDung->phone); ?></b>
								</p>
                            </td>
                            <td>
                                <?php if($revenueItem->hosting_id !=''): ?>
                                    <?php echo e($revenueItem->Hosting->diachiip); ?>

                                <?php else: ?>
                                    <?php echo e($revenueItem->Domain->tendomain); ?>

                                <?php endif; ?>
                            </td>
                            <td align="right">
                                <?php echo e(number_format($revenueItem->price)); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tfoot>
                        <tr>
                            <td align="right" colspan="3">
                                <b>TỔNG</b>
                            </td>
                            <td align="right">
                                <?php echo e(number_format($total)); ?>

                            </td>
                        </tr>
                    </tfoot>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/revenue.blade.php ENDPATH**/ ?>