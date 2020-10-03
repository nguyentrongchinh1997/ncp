

<?php $__env->startSection('content'); ?>
<div class="card">
		<div class="card-header text-center"><h2>Quản lý giỏ hàng</h2></div>
		<div class="card-body">

			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Họ tên khách hàng</th>
						<th>Email</th>
						<th>Điện thoại</th>
						<th>Loại hosting đã thuê</th>
						<th>Ngày tạo</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $regishosting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td><?php echo e($value->hoten); ?></td>
							<td><?php echo e($value->email); ?></td>
							<td><?php echo e($value->dienthoai); ?></td>
							<td><?php echo e($value->loaihosting); ?></td>
							<td><?php echo e($value->created_at); ?></td>
							<td class="text-center"><a href="<?php echo e(url('/sanpham/giohang/sua/' . $value->id)); ?>"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="<?php echo e(url('/sanpham/giohang/xoa/' . $value->id)); ?>"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\resources\views//sanpham/giohang.blade.php ENDPATH**/ ?>