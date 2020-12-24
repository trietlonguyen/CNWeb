

<?php $__env->startSection('content'); ?>
	<div class="card">
		<div class="container">
		<h2>Chi tiết mua hàng</h2>
		<div class="row">
			<div class="col">
				<div class="all-center">
					<td ><img class="rounded" src="<?php echo e(asset('/public/upload/'.$sanpham['hinhanh'])); ?>" height="300px;"></td>
				</div>
			</div>
			<div class="col">
				<table class="table table-bordered table-sm">
					<thead>
					<tr>
						<td class="title-item">Tên sản phẩm</td>
						<td><?php echo e($sanpham['tensanpham']); ?></td>
					</tr>
					<tr>
						<td class="title-item">Giá sản phẩm</td>
						<td><?php echo e($sanpham['giatien']); ?></td>
					</tr>
					</thead>
				</table>
				<form action="<?php echo e(route('add-products', $sanpham['id'])); ?>" class="aaa" method="post">
				<?php echo csrf_field(); ?>

				

				<div class="form-group">
					<label for="soluong">Số lượng</label>
					<input type="number" class="form-control <?php $__errorArgs = ['soluong'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="soluong" name="soluong" />
					<?php $__errorArgs = ['soluong'];
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

				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Chọn mua</button>
			</form>
		</div>	
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\CNWeb\resources\views/sanpham/addproducts.blade.php ENDPATH**/ ?>