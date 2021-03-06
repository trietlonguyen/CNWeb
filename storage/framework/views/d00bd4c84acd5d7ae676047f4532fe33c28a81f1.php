 <!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
	
	<title><?php echo e(config('app.name', 'Laravel')); ?></title>
	
	<!-- Scripts -->
	<script src="<?php echo e(asset('public/js/jquery-3.5.1.slim.min.js')); ?>" defer></script>
	<script src="<?php echo e(asset('public/js/popper.min.js')); ?>" defer></script>
	<script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>" defer></script>
	<?php echo $__env->yieldContent('javascript'); ?>
	
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
	
	<!-- Favicon -->
	<link href="<?php echo e(asset('public/images/logo11.png')); ?>" rel="shortcut icon" type="image/x-icon" />
	
	<!-- Styles -->
	<link href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/css/fontawesome.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/css/custom.css')); ?>" rel="stylesheet" />
	<style type="text/css">
		.all-center{
			display: flex;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
				<img src="<?php echo e(asset('public/images/logo11.png')); ?>" width="30" height="30" class="d-inline-block align-top" alt="" />
				<?php echo e(config('app.name', 'Laravel')); ?>

			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<?php if(auth()->guard()->check()): ?>
					<?php if( auth()->user()->level == 1): ?>
					<li class="nav-item"><a class="nav-link" href="<?php echo e(route('danhmuc')); ?>"><i class="fal fa-home"></i> Danh Mục</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo e(route('sanpham')); ?>"><i class="fal fa-users"></i>Sản Phẩm</a></li>
					
					
					<li class="nav-item"><a class="nav-link" href="<?php echo e(route('list')); ?>"><i class="fal fa-users"></i> Mã giảm giá</a></li>
					<?php endif; ?>

					<li class="nav-item"><a class="nav-link" href="<?php echo e(route('bill')); ?>"><i class="fal fa-users"></i> Hóa Đơn</a></li>

					<li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact')); ?>"><i class="fal fa-users"></i> Liên hệ</a></li>
					<li class="nav-item" style="margin-right: 100px;">
						<form action="<?php echo e(url('/sanpham/tim')); ?>" method="get" enctype="multipart/form-data">
								<input type="text" name="searchString" />
								<input type="submit" value="tìm kiếm" />
						</form>
					</li>
					<?php endif; ?>
					
				</ul>
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item">
						<img src="<?php echo e(asset('public/images/icon/cart.svg')); ?>" width="60" height="30" alt="cart" />
						<a id="cart-text" class="nav-link" href="<?php echo e(route('cart')); ?>">Giỏ hàng</a>
					</li>
					<?php if(auth()->guard()->guest()): ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="fal fa-sign-in-alt"></i> Đăng nhập</a></li>
						<?php if(Route::has('register')): ?>
							<li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>"><i class="fal fa-user-plus"></i> Đăng ký</a></li>
						<?php endif; ?>
					<?php else: ?>
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fal fa-user-circle"></i> <?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i> Đăng xuất</a>
								<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post" style="display: none;"><?php echo csrf_field(); ?></form>
							</div>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>
		
		<main class="pt-2">
			<?php echo $__env->yieldContent('content'); ?>
		</main>
		
		<hr class="shadow-sm" />
		<footer>Thiết Kế -Thi Công Nội Thất &copy; <?php echo e(date('Y')); ?>  <?php echo e(config('app.name', 'Laravel')); ?>.</footer>
	</div>
</body>
</html><?php /**PATH D:\wamp\www\CNWeb\resources\views/layouts/app.blade.php ENDPATH**/ ?>