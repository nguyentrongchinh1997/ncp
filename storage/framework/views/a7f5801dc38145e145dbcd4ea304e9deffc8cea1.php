<?php $__env->startSection('content'); ?>
<div class="card">
		<div class="card-header text-center"><h2>Quản lý giỏ hàng</h2></div>
		<div class="card-body">
			<?php if(session('error')): ?>
				<div class="alert alert-danger">
					<?php echo e(session('error')); ?>

				</div>
			<?php endif; ?>
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Khách hàng</th>
						<th>Loại hosting</th>
						<th>
							Domain (Host)
						</th>
						<th>Loại</th>
						<th>Trạng thái</th>
						<th>Ngày tạo - Hết hạn</th>
						<?php if($user->level == 0): ?>
							<th>Sửa</th>
							<th>Xóa</th>
						<?php else: ?>
							<th>Xác nhận</th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $regishosting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td>
								<p>
									Tên: <b><?php echo e($value->nguoiDung->name); ?></b>
								</p>
								<p>
									Email: <b><?php echo e($value->nguoiDung->email); ?></b>
								</p>
								<p>
									SĐT: <b><?php echo e($value->nguoiDung->phone); ?></b>
								</p>
							</td>
							<td><?php echo e($value->loaihosting); ?></td>
							<td>
								<?php if(!empty($value->khachHang) && count($value->khachHang) > 0): ?>
									<?php $__currentLoopData = $value->khachHang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php echo e(($kh->domain_id == '') ? $kh->Hosting->diachiip : $kh->Domain->tendomain); ?>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
							</td>
							<td>
								<?php echo e(($value->type == 0 ? 'Domain' : 'Hosting')); ?>

							</td>
							<td>
								<?php echo e(($value->status == 0 ? 'Chờ xử lý' : 'Đã được duyệt')); ?>

							</td>
							<td>
								<?php echo e(date('d/m/Y', strtotime($value->created_at))); ?> - 
								<?php if($value->type == 0): ?>
									<?php echo e(date('d/m/Y', strtotime('+1 years', strtotime($value->created_at)))); ?>

								<?php else: ?>
									<?php echo e(date('d/m/Y', strtotime("+$value->time month", strtotime($value->created_at)))); ?>

								<?php endif; ?>
							</td>
							<?php if($user->level == 0): ?>
								<td class="text-center"><a href="<?php echo e(url('/sanpham/giohang/sua/' . $value->id)); ?>"><i class="fal fa-edit"></i></a></td>
								<td class="text-center"><a href="<?php echo e(url('/sanpham/giohang/xoa/' . $value->id)); ?>"><i class="fal fa-trash-alt text-danger"></i></a></td>
							<?php else: ?>
								<td align="center">
									<?php if($value->status == 0): ?>
										<a href="<?php echo e(route('accept-cart', ['id' => $value->id])); ?>">Duyệt đơn</a>
									<?php else: ?>
										Đã được duyệt
									<?php endif; ?>
								</td>
							<?php endif; ?>
							
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views//sanpham/giohang.blade.php ENDPATH**/ ?>