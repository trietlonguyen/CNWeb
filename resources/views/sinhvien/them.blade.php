@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Thêm sinh viên</div>
		<div class="card-body">
			<form action="{{ url('/sinhvien/them') }}" method="post">
				@csrf
				<div class="form-group">
					<label for="lop_id">Mã lớp</label>
					<select class="form-control @error('lop_id') is-invalid @enderror" id="lop_id" name="lop_id">
						<option value="">-- Chọn lớp --</option>
						@foreach($lop as $value)
							<option value="{{ $value->id }}">{{ $value->id }}</option>
						@endforeach
					</select>
					@error('lop_id')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="id">MSSV</label>
					<input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" />
					@error('id')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="holot">Họ lót</label>
					<input type="text" class="form-control @error('holot') is-invalid @enderror" id="holot" name="holot" />
					@error('holot')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="ten">Tên</label>
					<input type="text" class="form-control @error('ten') is-invalid @enderror" id="ten" name="ten" />
					@error('ten')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="ngaysinh">Ngày sinh</label>
					<input type="text" class="form-control @error('ngaysinh') is-invalid @enderror" id="ngaysinh" name="ngaysinh" />
					@error('ngaysinh')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" />
					@error('email')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="dienthoai">Điện thoại</label>
					<input type="text" class="form-control @error('dienthoai') is-invalid @enderror" id="dienthoai" name="dienthoai" />
					@error('dienthoai')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="ghichu">Ghi chú</label>
					<input type="text" class="form-control @error('ghichu') is-invalid @enderror" id="ghichu" name="ghichu" />
					@error('ghichu')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
		</div>
	</div>
@endsection