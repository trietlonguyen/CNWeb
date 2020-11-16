@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Thêm sản phẩm</div>
		<div class="card-body">
			<form action="{{ url('/sanpham/them') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="danhmuc_id">Danh mục</label>
					<select class="form-control @error('danhmuc_id') is-invalid @enderror" id="danhmuc_id" name="danhmuc_id">
						<option>Chọn danh mục</option>
						@foreach($sanpham as $value)
							<option value="{{ $value->id }}">{{ $value->tensanpham }}</option>
						@endforeach
					</select>
					@error('danhmuc_id')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="tensanpham">Tên sản phẩm</label>
					<input type="text" class="form-control @error('tensanpham') is-invalid @enderror" id="tensanpham" name="tensanpham" />
					@error('tensanpham')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="mota">Mô tả</label>
					<input type="text" class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" />
					@error('mota')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="hinhanh">Hình ảnh</label>
					<input  type="file" class="form-control @error('hinhanh') is-invalid @enderror" id="hinhanh" name="hinhanh" />
				</div>

				<div class="form-group">
					<label for="giatien">Giá tiền</label>
					<input type="number" class="form-control @error('giatien') is-invalid @enderror" id="giatien" name="giatien" />
					@error('giatien')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
		</div>
	</div>
@endsection