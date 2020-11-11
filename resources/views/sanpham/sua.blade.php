@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Sửa lớp</div>
		<div class="card-body">
			<form action="{{ url('/lop/sua/' . $lop->id) }}" method="post">
				@csrf
				<div class="form-group">
					<label for="id">Mã lớp</label>
					<input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ $lop->id }}" />
					@error('id')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="tenlop">Tên lớp</label>
					<input type="text" class="form-control @error('tenlop') is-invalid @enderror" id="tenlop" name="tenlop" value="{{ $lop->tenlop }}" />
					@error('tenlop')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Cập nhật</button>
			</form>
		</div>
	</div>
@endsection