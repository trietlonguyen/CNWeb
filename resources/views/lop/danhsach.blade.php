@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Lớp</div>
		<div class="card-body">
			<p><a href="{{ url('/lop/them') }}" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
			<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th class="w-5">#</th>
						<th class="w-10">Mã lớp</th>
						<th>Tên lớp</th>
						<th class="w-15">Ngày tạo</th>
						<th class="w-15">Ngày sửa</th>
						<th class="w-5">Sửa</th>
						<th class="w-5">Xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($lop as $value)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $value->id }}</td>
							<td>{{ $value->tenlop }}</td>
							<td>{{ $value->created_at }}</td>
							<td>{{ $value->updated_at }}</td>
							<td class="text-center"><a href="{{ url('/lop/sua/' . $value->id) }}"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="{{ url('/lop/xoa/' . $value->id) }}"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection