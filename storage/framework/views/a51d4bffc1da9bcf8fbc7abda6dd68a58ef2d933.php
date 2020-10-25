

<?php $__env->startSection('content'); ?>
<style>
    button#myBtn{
        display: none!important;
    }
    .Tong{
        font-size: 50px;
        font-weight: bold;
    }
</style>
<div class="card">
        <div class="card-header text-center"><h2>Doanh thu</h2></div>
        <div class="card-header text-center">
        <form action="<?php echo e(url()->current()); ?>" method="GET">
            <div class="row">
                <div class="col-lg-6">
                    <label for="">Từ</label>
                    <input value="<?php if(!empty($date_start)): ?><?php echo e(date('Y-m-d', strtotime($date_start))); ?><?php endif; ?>" type="date" name="date_start" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Đến</label>
                    <input value="<?php if(!empty($date_end)): ?><?php echo e(date('Y-m-d', strtotime($date_end))); ?><?php endif; ?>" type="date" name="date_end" class="form-control">
                </div>
            </div>
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
                        <th>Giảm giá</th>
						<th>Thu</th>
					</tr>
				</thead>
				<tbody>
                    <?php $totalAll = 0; ?>
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
                                <?php $tong = 0; ?>
                                <?php $__currentLoopData = $revenueItem->khachHang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $tong+= $item->price; ?>
                                    <?php if($item->hosting_id !=''): ?>
                                        <p><?php echo e($item->Hosting->diachiip); ?> - <b><?php echo e(number_format($item->price)); ?></b></p>
                                    <?php else: ?>
                                        <p><?php echo e($item->Domain->tendomain); ?> - <b><?php echo e(number_format($item->price)); ?></b></p>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php if($revenueItem->discount): ?>
                                    <?php $discount = $revenueItem->discount ?>
                                <?php else: ?>
                                <?php $discount = 0 ?>
                                <?php endif; ?>
                                <?php echo e($discount); ?> %
                            </td>
                            <td align="right">
                                <?php $totalItem = $tong - $tong * $discount/100; ?>
                                <?php echo e(number_format($totalItem)); ?>

                            </td>
                        </tr>
                        <?php $totalAll+= $totalItem ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tfoot>
                        <tr>
                            <td align="right" colspan="4">
                                <b>TỔNG</b>
                            </td>
                            <td align="right">
                                <?php echo e(number_format($totalAll)); ?>

                            </td>
                        </tr>
                    </tfoot>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/revenue.blade.php ENDPATH**/ ?>