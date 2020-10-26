

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header text-center"><h2>Khách hàng</h2></div>
		<div class="card-body">
			<p>
				<a href="<?php echo e(url('/khachhang/them')); ?>" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a>
				<a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-file-import"></i> Nhập từ Excel</a>
				<a href="<?php echo e(url('/khachhang/xuat')); ?>" class="btn btn-success"><i class="fal fa-upload"></i> Xuất từ Excel</a></p>

			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Khách hàng</th>
						<th>Domain</th>
						<th>Host</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $khachhang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td>
								<p>
									<?php echo e(\App\Helpers\helper::getUser($key)->name); ?>

								</p>
								<p>
									<?php echo e(\App\Helpers\helper::getUser($key)->phone); ?>

								</p>
								<p>
									<?php echo e(\App\Helpers\helper::getUser($key)->email); ?>

								</p>
							</td>
							<td>
								<table style="width: 100%">
									<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($item->domain_id != ''): ?>
											<tr>
												<?php if($item->hosting_id != ''): ?>
													<td>
														<?php echo e($item->Hosting->diachiip); ?>

													</td>
													
												<?php else: ?>
													<td>
														<?php echo e($item->Domain->tendomain); ?>

													</td>
												<?php endif; ?>
												<td>
													Thời hạn: từ
													<b><?php echo e(date('d/m/Y', strtotime($item->date_register))); ?></b>
													đến <b><?php echo e(date('d/m/Y', strtotime($item->date_exprie))); ?></b>
												</td>
											</tr>
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
							</td>
							<td>
								<table style="width: 100%">
									<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($item->hosting_id != ''): ?>
											<tr>
												<?php if($item->hosting_id != ''): ?>
													<td>
														<?php echo e($item->Hosting->diachiip); ?>

													</td>
													
												<?php else: ?>
													<td>
														<?php echo e($item->Domain->tendomain); ?>

													</td>
												<?php endif; ?>
												<td>
													Thời hạn: từ
													<b><?php echo e(date('d/m/Y', strtotime($item->date_register))); ?></b>
													đến <b><?php echo e(date('d/m/Y', strtotime($item->date_exprie))); ?></b>
												</td>
												
											</tr>
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
							</td>
							
							
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
	<form action="<?php echo e(url('/khachhang/nhap')); ?>" method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Nhập từ excel</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			
			  <div class="form-group">
				<label for="recipient-name" class="col-form-label">Chọn tập tin excel</label>
				<input type="file" class="form-control-file" id="TapTinExcel" name="TapTinExcel">
			  </div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Hùy bỏ</button>
			<button type="submit" class="btn btn-primary">Nhập</button>
		  </div>
		</div>
	  </div>
	</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/khachhang/danhsach.blade.php ENDPATH**/ ?>