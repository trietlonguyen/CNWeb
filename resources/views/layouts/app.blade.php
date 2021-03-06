 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	
	<title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- Scripts -->
	<script src="{{ asset('public/js/jquery-3.5.1.slim.min.js') }}" defer></script>
	<script src="{{ asset('public/js/popper.min.js') }}" defer></script>
	<script src="{{ asset('public/js/bootstrap.min.js') }}" defer></script>
	@yield('javascript')
	
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
	
	<!-- Favicon -->
	<link href="{{ asset('public/images/logo11.png') }}" rel="shortcut icon" type="image/x-icon" />
	
	<!-- Styles -->
	<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/css/fontawesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/css/custom.css') }}" rel="stylesheet" />
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
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('public/images/logo11.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" />
				{{ config('app.name', 'Laravel') }}
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					@auth
					@if( auth()->user()->level == 1)
					<li class="nav-item"><a class="nav-link" href="{{ route('danhmuc') }}"><i class="fal fa-home"></i> Danh Mục</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('sanpham') }}"><i class="fal fa-users"></i>Sản Phẩm</a></li>
					
					
					<li class="nav-item"><a class="nav-link" href="{{ route('list') }}"><i class="fal fa-users"></i> Mã giảm giá</a></li>
					@endif

					<li class="nav-item"><a class="nav-link" href="{{ route('bill') }}"><i class="fal fa-users"></i> Hóa Đơn</a></li>

					<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"><i class="fal fa-users"></i> Liên hệ</a></li>
					<li class="nav-item" style="margin-right: 100px;">
						<form action="{{ url('/sanpham/tim') }}" method="get" enctype="multipart/form-data">
								<input type="text" name="searchString" />
								<input type="submit" value="tìm kiếm" />
						</form>
					</li>
					@endauth
					
				</ul>
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item">
						<img src="{{ asset('public/images/icon/cart.svg') }}" width="60" height="30" alt="cart" />
						<a id="cart-text" class="nav-link" href="{{route('cart')}}">Giỏ hàng</a>
					</li>
					@guest
						<li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fal fa-sign-in-alt"></i> Đăng nhập</a></li>
						@if (Route::has('register'))
							<li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fal fa-user-plus"></i> Đăng ký</a></li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fal fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i> Đăng xuất</a>
								<form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">@csrf</form>
							</div>
						</li>
					@endguest
				</ul>
			</div>
		</nav>
		
		<main class="pt-2">
			@yield('content')
		</main>
		
		<hr class="shadow-sm" />
		<footer>Thiết Kế -Thi Công Nội Thất &copy; {{ date('Y') }}  {{ config('app.name', 'Laravel') }}.</footer>
	</div>
</body>
</html>