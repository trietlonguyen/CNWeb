

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Hóa đơn</div>
		<div class="card-body">
			<p>
				<a href="<?php echo e(url('/danhmuc/xuat')); ?>" class="btn btn-info"><i class="fal fa-download"></i> Xuất ra Excel</a>
			</p>
			<table class="table table-bordered table-sm">
				<thead>
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
					<?php $__currentLoopData = $bill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							
								<td><?php echo e($loop->iteration); ?></td>
								<td>
									<p>
										Tên: <b><?php echo e($value->nguoiDung->name); ?></b>
									</p>
									<p>
										Email: <b><?php echo e($value->nguoiDung->email); ?></b>
									</p>
								</td>
								<td>
									<table>
									<tr>
										<th>
											Tên sản phẩm
										</th>
										<th>
											Giá
										</th>
										
										
									</tr>
									<?php $tong = 0; ?>
									<?php $__currentLoopData = $value->bill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php $tong+= $item->thanhtien; ?>
										<tr>
											<td>
												<?php echo e($item->sanPham->tensanpham); ?>

											</td>
											<td>
												<?php echo e(number_format($item->price)); ?>

											</td>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tr>
									<tr>
										<th>Địa chỉ - sđt</th>
										<td class="all-center">
												<?php echo e($item->diachi); ?> - <?php echo e($item->sdt); ?>

										</td>
									</tr>
									<tr>
										<th>Giảm giá</th>
										<th>
											<?php echo e($item->discount); ?> %
										</th>
									</tr>
									<tr>
										<th>Thành tiền</th>
										<th>
											<?php echo e(number_format($item->thanhtien)); ?>

										</th>
									</tr>
								</table>
								</td>
								
								<td>
									<?php if($item->status == 0): ?>
										đang giao
									<?php elseif($item->status == 1): ?>
										Đã giao hàng
									<?php endif; ?>
								</td>
								
								<td>
									<?php if($item->status == 0 && auth()->user()->level == 1): ?>
									<a href="<?php echo e(route('duyet', ['id' => $value->id])); ?>">
										Xác nhận giao hàng
									</a>
									<?php endif; ?>
								</td>
								<td class="text-center">
								<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-file-import"></i>Xóa đơn hàng</a>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\CNWeb_triet\CNWeb\resources\views/bill/list.blade.php ENDPATH**/ ?>