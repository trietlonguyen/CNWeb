

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Chi tiết sản phẩm</div>
		<div class="card-body">
			<p><a href="<?php echo e(url('/chitietsp/them')); ?>" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
			<table class="table table-bordered table-sm">
				<thead>

					<tr>
						<th class="w-5">STT</th>
						<th class="w-10">Tên Sản Phẩm</th>
						<th>Màn hình</th>
						<th class="w-15">Hệ điều hành</th>
						<th class="w-15">Camera sau</th>
						<th class="w-15">Camera trước</th>
						<th class="w-15">CPU</th>
						<th class="w-15">RAM</th>
						<th class="w-15">Bộ nhớ trong</th>
						<th class="w-15">Thẻ nhớ</th>
						<th class="w-15">SIM</th>
						<th class="w-15">PIN</th>
						<th class="w-15">Sạc</th>
						<th class="w-15">Tai Nghe</th>
						<th class="w-15">Ngày Sửa</th>
						<th class="w-15">Ngày Xóa</th>
						<th class="w-5">Sửa</th>
						<th class="w-5">Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $chitietsp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>

							<?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
							<td><?php echo e($sp->tensanpham); ?></td>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<td><?php echo e($value->manhinh); ?></td>
							<td><?php echo e($value->os); ?></td>
							<td><?php echo e($value->camera_sau); ?></td>
							<td><?php echo e($value->camera_truoc); ?></td>
							<td><?php echo e($value->cpu); ?></td>
							<td><?php echo e($value->ram); ?></td>
							<td><?php echo e($value->bonhotrong); ?></td>
							<td><?php echo e($value->thenho); ?></td>
							<td><?php echo e($value->sim); ?></td>
							<td><?php echo e($value->pin); ?></td>
							<td><?php echo e($value->pk_sac); ?></td>
							<td><?php echo e($value->pk_tainghe); ?></td>
							<td><?php echo e($value->created_at); ?></td>
							<td><?php echo e($value->updated_at); ?></td>
							<td class="text-center"><a href="<?php echo e(url('/chitietsp/sua/' . $value->id)); ?>"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="<?php echo e(url('/chitietsp/xoa/' . $value->id)); ?>"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\CNWeb_triet\CNWeb\resources\views/chitietsp/danhsach.blade.php ENDPATH**/ ?>