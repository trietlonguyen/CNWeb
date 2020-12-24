

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="card-header">Sửa sinh viên</div>
		<div class="card-body">
			<form action="<?php echo e(url('/danhmuc/sua/' . $danhmuc->id)); ?>" method="post">
				<?php echo csrf_field(); ?>
				
				<div class="form-group">
					<label for="tendanhmuc">Tên danh mục</label>
					<input type="text" class="form-control <?php $__errorArgs = ['tendanhmuc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tendanhmuc" name="tendanhmuc" value="<?php echo e($danhmuc->tendanhmuc); ?>" />
					<?php $__errorArgs = ['tendanhmuc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<span class="invalid-feedback" role="alert"><?php echo e($message); ?></span>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Cập nhật</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\CNWeb\resources\views/danhmuc/sua.blade.php ENDPATH**/ ?>