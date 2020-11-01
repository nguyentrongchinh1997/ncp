

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card">
		<div class="card-header">Giỏ hàng</div>
		<div class="card-body">
			<div class="row">
                <div class="col-lg-12">
                <form action="<?php echo e(route('cart.send')); ?>" method="post">
                        <?php echo csrf_field(); ?>
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
                                    <a class="btn btn-danger" href="<?php echo e(route('cart.delete', ['id' => $item->id])); ?>">
                                        Xóa
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
                        <tr>
                            <td style="text-align: right" colspan="2">Mã giảm giá (nếu có)</td>
                            <td>
                                <?php $__currentLoopData = $discountCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label for="">
                                        <input name="code" onclick="pick(<?php echo e($code->discount); ?>)" type="radio" value="<?php echo e($code->discount); ?>">
                                        <?php echo e($code->name); ?>

                                    </label>
                                    <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="text-align: right" colspan="2">Thành tiền</td>
                            <td style="text-align: right">
                                <span id="last-price"><?php echo e(number_format($total)); ?></span>
                                
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <br><br>
                    <center>
                        <button type="submit" class="btn btn-primary">Gửi đơn hàng</button>
                    </center>
                </form>
                    
                </div>
                <div class="col-lg-4">
                    
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
    function pick(discount)
    {
        total = "<?php echo e($total); ?>";
        lastPrice =  total - total * discount/100;
        $('#last-price').html(lastPrice);
        //alert(discount);

    }
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