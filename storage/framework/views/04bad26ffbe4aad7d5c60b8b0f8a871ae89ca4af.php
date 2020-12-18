

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
							<td>
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
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\CNWeb_triet\CNWeb\resources\views/Bill/list.blade.php ENDPATH**/ ?>