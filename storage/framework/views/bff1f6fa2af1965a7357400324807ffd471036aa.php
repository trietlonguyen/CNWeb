

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Xóa danh mục</div>
		<div class="card-body">
			<form action="<?php echo e(url('/danhmuc/xoa/' . $danhmuc->id)); ?>" method="post">
				<?php echo csrf_field(); ?>
				<p>Bạn có muốn xóa danh mục <?php echo e($danhmuc->tendanhmuc); ?> không?</p>
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\CNWeb\resources\views/danhmuc/xoa.blade.php ENDPATH**/ ?>