

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Xóa lớp</div>
		<div class="card-body">
			<form action="<?php echo e(url('/discount/xoa/' . $code->id)); ?>" method="post">
				<?php echo csrf_field(); ?>
				<p>Bạn có muốn xóa sản phẩm <?php echo e($code->name); ?> không?</p>
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\CNWeb\resources\views/discount_codes/xoa.blade.php ENDPATH**/ ?>