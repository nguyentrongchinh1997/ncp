

<?php $__env->startSection('content'); ?>
<div class="card">
		<div class="card-header text-center"><h2>Quản lý đơn hàng</h2></div>
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
						<th>Sản phẩm</th>
						<th>Trạng thái</th>
						<th>Xác nhận</th>
						<th>Xóa đơn</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
							<td>
								<table>
									<tr>
										<th>
											Domain (Hosting)
										</th>
										<th>
											Giá
										</th>
										<th>Hết hạn</th>
										<?php if($value->status != 1): ?>
										<th>Thao tác</th>
										<?php endif; ?>
									</tr>
									<?php $tong = 0; ?>
									<?php $__currentLoopData = $value->regishosting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php $tong+= $item->price; ?>
										<tr>
											<td>
												<?php echo e($item->loaihosting); ?>

											</td>
											<td>
												<?php echo e(number_format($item->price)); ?>

											</td>
											<td>
												<?php echo e(date('d/m/Y', strtotime($item->created_at))); ?> - 
												<?php if($item->type == 0): ?>
													<?php echo e(date('d/m/Y', strtotime('+1 years', strtotime($item->created_at)))); ?>

												<?php else: ?>
													<?php echo e(date('d/m/Y', strtotime("+$item->time month", strtotime($item->created_at)))); ?>

												<?php endif; ?>
											</td>
											<?php if($value->status != 1): ?>
											<td>
												<a href="<?php echo e(url('/sanpham/giohang/sua/' . $item->id)); ?>"><i class="fal fa-edit"></i></a><a href="<?php echo e(url('/sanpham/giohang/xoa/' . $item->id)); ?>"><i class="fal fa-trash-alt text-danger"></i></a>
											</td>
											<?php endif; ?>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<th>Giảm giá</th>
										<th>
											<?php if($value->discount): ?>
												<?php $discount = $value->discount ?>
											<?php else: ?>
											<?php $discount = 0 ?>
											<?php endif; ?>
											<?php echo e($discount); ?> %
										</th>
										<td></td>
									</tr>
									<tr>
										<th>Thành tiền</th>
										<th>
											<?php echo e(number_format($tong - $tong * $discount/100)); ?>

										</th>
										<td></td>
									</tr>
								</table>
							</td>					
							<td>
								<?php if($value->status == 0): ?>
									Chưa duyệt
								<?php elseif($value->status == 1): ?>
									Đã được duyệt
								<?php else: ?>
									Đã hủy
								<?php endif; ?>
							</td>
							<td>
								<?php if($value->status == 0 && auth()->user()->level == 1): ?>
								<a href="<?php echo e(route('accept-cart', ['id' => $value->id])); ?>">
									Duyệt đơn
								</a>
								<?php endif; ?>
							</td>
							<td class="text-center">
								<a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-file-import"></i>Xóa đơn hàng</a>

								<form action="<?php echo e(route('delete-donhang', ['id' => $value->id])); ?>" method="post">
								<?php echo csrf_field(); ?>
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa đơn hàng của <?php echo e($value->nguoidung->name); ?> không?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Hùy bỏ</button>
										<button type="submit" class="btn btn-primary">Xóa</button>
									  </div>
									</div>
								  </div>
								</div>
							</form>
							
							</a>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views//sanpham/giohang.blade.php ENDPATH**/ ?>