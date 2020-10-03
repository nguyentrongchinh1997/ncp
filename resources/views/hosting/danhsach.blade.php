@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center"><h1>Hosting</h1></div>
		<div class="card-body">
			<p><a href="{{ url('/hosting/them') }}" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th class="w-5">STT</th>
						<th>Mã hosting</th>
						<th>Địa chỉ IP</th>
						<th>Giá tiền</th>
						<th class="w-15">Ngày tạo</th>
						<th>Trạng thái</th>
						<th class="w-15">Ngày sửa</th>
						<th class="w-5">Sửa</th>
						<th class="w-5">Xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($hosting as $value)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $value->id }}</td>
							<td>{{ $value->diachiip }}</td>
							<td align="right">{{ $value->giatien }}</td>
							<td>{{ $value->created_at }}</td>
							<td>
								{{($value->status == 0) ? 'Chưa ai mua' : 'Đã được mua'}}
							</td>
							<td>{{ $value->updated_at }}</td>
							<td class="text-center"><a href="{{ url('/hosting/sua/' . $value->id) }}"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="{{ url('/hosting/xoa/' . $value->id) }}"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection