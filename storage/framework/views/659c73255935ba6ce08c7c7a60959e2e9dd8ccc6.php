

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header text-center"><h2>Thông tin tài khoản</h2></div>
		<div class="card-body">
			<?php echo csrf_field(); ?>


			
			

			<table class="table table-bordered table-sm">
				<thead class="">
					<!-- xuất thông tin user -->
					<?php $__currentLoopData = $nguoidung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>Họ và tên</td>
						<td><?php echo e($value->name); ?></td>
					</tr>
						
					<tr>
						<td>Tên tài khoản</td>
						<td><?php echo e($value->username); ?></td>
					</tr>
					<tr>
						<td>Điện thoại</td>
						<td><?php echo e($value->phone); ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo e($value->email); ?></td>
					</tr>
					<tr>
						<td class="text-center">
							<a class="btn btn-primary" href="<?php echo e(url('/nguoidung/sua/' . $value->id)); ?>">Sửa thông tin
							<i class="fal fa-edit"></i>
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger" href="<?php echo e(url('/nguoidung/xoa/' . $value->id)); ?>">Xóa tài khoản 
							<i class="fal fa-trash-alt text-warning"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
					
				</thead>
				
			</table>
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Domain</th>
						<th>Host</th>
						<th>Ngày đăng ký - Hết hạn</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							
							<td>
								<?php if($productItem->domain_id != ''): ?>
									<?php echo e($productItem->Domain->tendomain); ?>

								<?php endif; ?>
							</td>
							<td>
								<?php if($productItem->hosting_id != ''): ?>
									<?php echo e($productItem->Hosting->diachiip); ?>

								<?php endif; ?>
							</td>
							<td>
								<?php echo e(date('d/m/Y', strtotime($productItem->date_register))); ?> - <?php echo e(date('d/m/Y', strtotime($productItem->date_expire))); ?>

							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/nguoidung/danhsach.blade.php ENDPATH**/ ?>