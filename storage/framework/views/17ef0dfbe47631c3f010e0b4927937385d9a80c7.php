<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header text-center"><h2>Danh sách liên hệ</h2></div>
		<div class="card-body">
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Mã liên hệ</th>
						<th>Tên người liên hệ</th>
						<th>Email người liên hệ</th>
						<th>Điện thoại người liên hệ</th>
						<th>Tiêu đề</th>
						<th>Nội dung liên hệ</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td><?php echo e($value->id); ?></td>
							<td><?php echo e($value->name); ?></td>
							<td><?php echo e($value->email); ?></td>
							<td><?php echo e($value->phone); ?></td>
							<td><?php echo e($value->subject); ?></td>
							<td><?php echo e($value->message); ?></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/contactdanhsach.blade.php ENDPATH**/ ?>