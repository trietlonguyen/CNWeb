<?php $__env->startSection('pagetitle'); ?>
	Reset password
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header"><?php echo e(__('Reset password')); ?></div>
				<div class="card-body">
					<?php if(session('status')): ?>
						<div class="alert alert-success" role="alert">
							<i class="fal fa-info-circle"></i> <?php echo e(session('status')); ?>

						</div>
					<?php endif; ?>
					<form method="post" action="<?php echo e(route('password.email')); ?>">
						<?php echo csrf_field(); ?>
						<div class="form-group">
							<label for="email"><?php echo e(__('E-Mail address')); ?></label>
							<input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>" required />
							<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="form-group mb-0">
							<button type="submit" class="btn btn-primary"><i class="fal fa-paper-plane"></i> <?php echo e(__('Send password reset link')); ?></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Z:\wamp\www\qlsv_v3.0\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>