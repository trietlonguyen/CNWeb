@extends('layouts.app')

@section('content')
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
			
			  	<img class="rounded" src="{{asset('/public/upload/'.$sanpham['hinhanh'])}}" height="400px">
			  	<h2>{{ $sanpham['tensanpham'] }}</h2>
			  	<p class="price btn btn-warning font-weight-bold">{{number_format($sanpham['giatien'])  }}VNĐ</p>
			  	<p>{{ $sanpham['mota'] }}</p>
			  	<a href="{{asset('/sanpham/add/'.$sanpham['id'])}}">
                                    <button type="submit" class="btn btn-warning">MUA NGAY <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                </a>
			
		</div>

		<div class="col">
			<h2 class="text-center">Thông số kỹ thuật</h2>
			@auth()
			@if(auth()->user()->level==1)
			@if(empty($chitietsp))
			<p><a href="{{ url('/chitietsp/them/'.$sanpham['id']) }}" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
			@endif
			@endif
			@endauth
			<table class="table table-bordered table-sm" >
				<thead>
					
					<tr>
						<td class="title-item">Màn hình</td>
						<td>{{ $chitietsp['manhinh'] }}</td>
					</tr>
					<tr>
						<td class="title-item">Hệ điều hành</td>
						<td>{{ $chitietsp['os'] }}</td>
					</tr>
					<tr>
						<td class="title-item">Camera sau</td>
						<td>{{ $chitietsp['camera_sau'] }}</td>
					</tr>
					<tr>
						<td class="title-item">Camera trước</td>
						<td>{{ $chitietsp['camera_truoc'] }}</td>
					</tr>
					<tr>
						<td class="title-item">CPU</td>
						<td>{{ $chitietsp['cpu'] }}</td>
					</tr>
					<tr>
						<td class="title-item">RAM</td>
						<td>{{ $chitietsp['ram'] }}</td>
					</tr>
					<tr>
						<td class="title-item">Bộ nhớ trong</td>
						<td>{{ $chitietsp['bonhotrong'] }}</td>
					</tr>
					<tr>
						<td class="title-item">Thẻ nhớ</td>
						<td>{{ $chitietsp['thenho'] }}</td>
					</tr>
					<tr>
						<td class="title-item">SIM</td>
						<td>{{ $chitietsp['sim'] }}</td>
					</tr>
					<tr>
						<td class="title-item">PIN</td>
						<td>{{ $chitietsp['pin'] }}</td>
					</tr>
					<tr>
						<td class="title-item">Sạc</td>
						<td>{{ $chitietsp['pk_sac'] }}</td>
					</tr>
					<tr>
						<td class="title-item">Tai Nghe</td>
						<td>{{ $chitietsp['pk_tainghe'] }}</td>
					</tr>
					<tr>
						@auth()
			@if(auth()->user()->level==1)
						<td class="text-center"><a href="{{ url('/chitietsp/sua/' . $chitietsp['id']) }}">Sửa <i class="fal fa-edit"></i></a></td>
						<td class="text-center"><a href="{{ url('/chitietsp/xoa/' . $chitietsp['id']) }}">Xóa <i class="fal fa-trash-alt text-danger"></i></a></td>
					</tr>@endif
					@endauth
				</thead>
			</table>
		</div>
	</div>
</div>
@endsection