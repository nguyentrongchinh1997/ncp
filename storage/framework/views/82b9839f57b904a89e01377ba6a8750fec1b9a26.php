

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card">
		<div class="card-header">Giỏ hàng</div>
		<div class="card-body">
			<div class="row">
                <div class="col-lg-12">
                    <table style="width: 100%">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Thời gian</th>
                            <th>Giá</th>
                            <th>
                                Thao tác
                            </th>
                        </tr>
                        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($item->product); ?>

                                </td>
                                <td>
                                    <?php echo e($item->time); ?> tháng
                                </td>
                                <td style="text-align: right">
                                    <?php echo e(number_format($item->price)); ?>

                                </td>
                                <td>
                                    <a  href="<?php echo e(route('cart.delete', ['id' => $item->id])); ?>">
                                        <button class="btn btn-danger">Xóa</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                Tổng: 
                            </td>
                            <td style="text-align: right">
                                <?php echo e(number_format($total)); ?>

                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <br><br>
                    <center>
                        <a href="<?php echo e(route('cart.send')); ?>">
                            <button class="btn btn-primary">Gửi đơn hàng</button>
                        </a>
                    </center>
                </div>
                <div class="col-lg-4">
                    l
                </div>
            </div>
		</div>
	</div>
</div>
<style>
    table tr td, table tr th{
        padding: 20px;
        border: 1px solid #ccc;
    }
</style>
<script>
	<?php if(session('success')): ?>
		Swal.fire({
			title: "<?php echo e(session('success')); ?>",
			icon: "success",
			confirmButtonText: 'OK'
		});
	<?php endif; ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/carts/list.blade.php ENDPATH**/ ?>