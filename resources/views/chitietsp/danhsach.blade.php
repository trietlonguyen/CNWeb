@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Chi tiết sản phẩm</div>
		<div class="card-body">
			<p><a href="{{ url('/chitietsp/them') }}" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
			<table class="table table-bordered table-sm">
				<thead>

					<tr>
						<th class="w-5">STT</th>
						<th class="w-10">Tên Sản Phẩm</th>
						<th>Màn hình</th>
						<th class="w-15">Hệ điều hành</th>
						<th class="w-15">Camera sau</th>
						<th class="w-15">Camera trước</th>
						<th class="w-15">CPU</th>
						<th class="w-15">RAM</th>
						<th class="w-15">Bộ nhớ trong</th>
						<th class="w-15">Thẻ nhớ</th>
						<th class="w-15">SIM</th>
						<th class="w-15">PIN</th>
						<th class="w-15">Sạc</th>
						<th class="w-15">Tai Nghe</th>
						<th class="w-15">Ngày Sửa</th>
						<th class="w-15">Ngày Xóa</th>
						<th class="w-5">Sửa</th>
						<th class="w-5">Xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($chitietsp as $value)
						<tr>
							<td>{{ $loop->iteration }}</td>

							@foreach($sanpham as $sp)
							
							<td>{{ $sp->tensanpham }}</td>

							@endforeach
							<td>{{ $value->manhinh }}</td>
							<td>{{ $value->os }}</td>
							<td>{{ $value->camera_sau }}</td>
							<td>{{ $value->camera_truoc }}</td>
							<td>{{ $value->cpu }}</td>
							<td>{{ $value->ram }}</td>
							<td>{{ $value->bonhotrong }}</td>
							<td>{{ $value->thenho }}</td>
							<td>{{ $value->sim }}</td>
							<td>{{ $value->pin }}</td>
							<td>{{ $value->pk_sac }}</td>
							<td>{{ $value->pk_tainghe }}</td>
							<td>{{ $value->created_at }}</td>
							<td>{{ $value->updated_at }}</td>
							<td class="text-center"><a href="{{ url('/chitietsp/sua/' . $value->id) }}"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="{{ url('/chitietsp/xoa/' . $value->id) }}"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection