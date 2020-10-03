<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header text-center"><h1>Tên miền</h1></div>
		<div class="card-body">
			<p>	
				<a href="<?php echo e(url('/domain/them')); ?>" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a>
				<a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-file-import"></i> Nhập từ Excel</a>
				<a href="<?php echo e(url('/domain/xuat')); ?>" class="btn btn-success"><i class="fal fa-upload"></i> Xuất từ Excel</a></p>
			</p>
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th class="w-5">STT</th>
						<th>Tên domain</th>
						<th>Giá tiền</th>
						<th class="w-15">Ngày tạo</th>
						<th>Trạng thái</th>
						<th class="w-15">Ngày sửa</th>
						<th class="w-5">Sửa</th>
						<th class="w-5">Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td><?php echo e($value->tendomain); ?></td>
							<td align="right"><?php echo e(number_format($value->giatien)); ?></td>
							<td><?php echo e($value->created_at); ?></td>
							<td>
								<?php echo e(($value->status == 0) ? 'Chưa ai mua' : 'Đã được mua'); ?>

							</td>
							<td><?php echo e($value->updated_at); ?></td>
							<td class="text-center"><a href="<?php echo e(url('/domain/sua/' . $value->id)); ?>"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="<?php echo e(url('/domain/xoa/' . $value->id)); ?>"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
	<form action="<?php echo e(url('/domain/nhap')); ?>" method="post" enctype="multipart/form-data">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/domain/danhsach.blade.php ENDPATH**/ ?>