

<?php $__env->startSection('content'); ?>
<style>
	.all-center{
		display: flex;
		align-items: center;
		justify-content: center;
	}
</style>
<div class="container">
	<div class="row ">
		<div class="col card all-center">
			
			  	<img class="rounded" src="<?php echo e(asset('/public/upload/'.$sanpham['hinhanh'])); ?>" height="400px">
			  	<h2><?php echo e($sanpham['tensanpham']); ?></h2>
			  	<p class="price btn btn-warning font-weight-bold"><?php echo e(number_format($sanpham['giatien'])); ?>VNĐ</p>
			  	<p><?php echo e($sanpham['mota']); ?></p>
			  	<a href="<?php echo e(asset('/sanpham/add/'.$sanpham['id'])); ?>">
                                    <button type="submit" class="btn btn-warning">MUA NGAY <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                </a>
			
		</div>

		<div class="col">
			<h2 class="text-center">Thông số kỹ thuật</h2>
			<?php if(auth()->guard()->check()): ?>
			<?php if(auth()->user()->level==1): ?>
			<?php if(empty($chitietsp)): ?>
			<p><a href="<?php echo e(url('/chitietsp/them/'.$sanpham['id'])); ?>" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
			<?php endif; ?>
			<?php endif; ?>
			<?php endif; ?>
			<table class="table table-bordered table-sm" >
				<thead>
					
					<tr>
						<td class="title-item">Màn hình</td>
						<td><?php echo e($chitietsp['manhinh']); ?></td>
					</tr>
					<tr>
						<td class="title-item">Hệ điều hành</td>
						<td><?php echo e($chitietsp['os']); ?></td>
					</tr>
					<tr>
						<td class="title-item">Camera sau</td>
						<td><?php echo e($chitietsp['camera_sau']); ?></td>
					</tr>
					<tr>
						<td class="title-item">Camera trước</td>
						<td><?php echo e($chitietsp['camera_truoc']); ?></td>
					</tr>
					<tr>
						<td class="title-item">CPU</td>
						<td><?php echo e($chitietsp['cpu']); ?></td>
					</tr>
					<tr>
						<td class="title-item">RAM</td>
						<td><?php echo e($chitietsp['ram']); ?></td>
					</tr>
					<tr>
						<td class="title-item">Bộ nhớ trong</td>
						<td><?php echo e($chitietsp['bonhotrong']); ?></td>
					</tr>
					<tr>
						<td class="title-item">Thẻ nhớ</td>
						<td><?php echo e($chitietsp['thenho']); ?></td>
					</tr>
					<tr>
						<td class="title-item">SIM</td>
						<td><?php echo e($chitietsp['sim']); ?></td>
					</tr>
					<tr>
						<td class="title-item">PIN</td>
						<td><?php echo e($chitietsp['pin']); ?></td>
					</tr>
					<tr>
						<td class="title-item">Sạc</td>
						<td><?php echo e($chitietsp['pk_sac']); ?></td>
					</tr>
					<tr>
						<td class="title-item">Tai Nghe</td>
						<td><?php echo e($chitietsp['pk_tainghe']); ?></td>
					</tr>
					<tr>
						<?php if(auth()->guard()->check()): ?>
			<?php if(auth()->user()->level==1): ?>
						<td class="text-center"><a href="<?php echo e(url('/chitietsp/sua/' . $chitietsp['id'])); ?>">Sửa <i class="fal fa-edit"></i></a></td>
						<td class="text-center"><a href="<?php echo e(url('/chitietsp/xoa/' . $chitietsp['id'])); ?>">Xóa <i class="fal fa-trash-alt text-danger"></i></a></td>
					</tr><?php endif; ?>
					<?php endif; ?>
				</thead>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\CNWeb\resources\views/chitietsp/danhsach.blade.php ENDPATH**/ ?>