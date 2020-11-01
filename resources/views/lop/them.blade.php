@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Thêm lớp</div>
		<div class="card-body">
			<form action="{{ url('/lop/them') }}" method="post">
				@csrf
				<div class="form-group">
					<label for="id">Mã lớp</label>
					<input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" />
					@error('id')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="tenlop">Tên lớp</label>
					<input type="text" class="form-control @error('tenlop') is-invalid @enderror" id="tenlop" name="tenlop" />
					@error('tenlop')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
		</div>
	</div>
@endsection