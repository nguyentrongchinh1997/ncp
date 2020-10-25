

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header text-center"><h1>Hosting</h1></div>
		<div class="card-body">
			<p><a href="<?php echo e(url('/hosting/them')); ?>" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th class="w-5">STT</th>
						<th>Mã hosting</th>
						<th>Địa chỉ IP</th>
						<th>Giá tiền</th>
						<th class="w-15">Ngày tạo</th>
						<th>Trạng thái</th>
						<th class="w-15">Ngày sửa</th>
						<th class="w-5">Sửa</th>
						<th class="w-5">Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $hosting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td><?php echo e($value->id); ?></td>
							<td><?php echo e($value->diachiip); ?></td>
							<td align="right"><?php echo e($value->giatien); ?></td>
							<td><?php echo e($value->created_at); ?></td>
							<td>
								<?php echo e(($value->status == 0) ? 'Chưa ai mua' : 'Đã được mua'); ?>

							</td>
							<td><?php echo e($value->updated_at); ?></td>
							<td class="text-center"><a href="<?php echo e(url('/hosting/sua/' . $value->id)); ?>"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="<?php echo e(url('/hosting/xoa/' . $value->id)); ?>"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/hosting/danhsach.blade.php ENDPATH**/ ?>