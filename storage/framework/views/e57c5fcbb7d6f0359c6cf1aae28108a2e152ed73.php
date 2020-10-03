

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header text-center"><h1>Tên miền</h1></div>
		<div class="card-body">
			<p><a href="<?php echo e(url('/domain/them')); ?>" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
			<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th class="w-5">#</th>
						<th>Mã domain</th>
						<th>Tên domain</th>
						<th>Tên khách hàng</th>
						<th>Giá tiền</th>
						<th>Địa chỉ IP</th>
						<th>Ngày thuê</th>
						<th>Thời hạn</th>
						<th class="w-15">Ngày tạo</th>
						<th class="w-15">Ngày sửa</th>
						<th class="w-5">Sửa</th>
						<th class="w-5">Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td><?php echo e($value->id); ?></td>
							<td><?php echo e($value->tendomain); ?></td>
							<td><?php echo e($value->tenkh); ?></td>
							<td><?php echo e($value->giatien); ?></td>
							<td><?php echo e($value->diachiip); ?></td>
							<td><?php echo e($value->ngaythue); ?></td>
							<td><?php echo e($value->thoihan); ?></td>
							<td><?php echo e($value->created_at); ?></td>
							<td><?php echo e($value->updated_at); ?></td>
							<td class="text-center"><a href="<?php echo e(url('/domain/sua/' . $value->id)); ?>"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="<?php echo e(url('/domain/xoa/' . $value->id)); ?>"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\qlsv_v4.0\resources\views/domain/danhsach.blade.php ENDPATH**/ ?>