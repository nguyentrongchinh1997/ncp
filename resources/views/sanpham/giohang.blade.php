@extends('layouts.app')

@section('content')
<div class="card">
		<div class="card-header text-center"><h2>Quản lý giỏ hàng</h2></div>
		<div class="card-body">
			@if(session('error'))
				<div class="alert alert-danger">
					{{session('error')}}
				</div>
			@endif
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Khách hàng</th>
						<th>Loại hosting</th>
						<th>
							Domain (Host)
						</th>
						<th>Loại</th>
						<th>Trạng thái</th>
						<th>Ngày tạo - Hết hạn</th>
						@if($user->level == 0)
							<th>Sửa</th>
							<th>Xóa</th>
						@else
							<th>Xác nhận</th>
						@endif
					</tr>
				</thead>
				<tbody>
					@foreach($regishosting as $value)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>
								<p>
									Tên: <b>{{$value->nguoiDung->name}}</b>
								</p>
								<p>
									Email: <b>{{$value->nguoiDung->email}}</b>
								</p>
								<p>
									SĐT: <b>{{$value->nguoiDung->phone}}</b>
								</p>
							</td>
							<td>{{ $value->loaihosting }}</td>
							<td>
								@if(!empty($value->khachHang) && count($value->khachHang) > 0)
									@foreach($value->khachHang as $kh)
										{{($kh->domain_id == '') ? $kh->Hosting->diachiip : $kh->Domain->tendomain}}
									@endforeach
								@endif
							</td>
							<td>
								{{($value->type == 0 ? 'Domain' : 'Hosting')}}
							</td>
							<td>
								{{($value->status == 0 ? 'Chờ xử lý' : 'Đã được duyệt')}}
							</td>
							<td>{{ $value->created_at }}</td>
							@if($user->level == 0)
								<td class="text-center"><a href="{{ url('/sanpham/giohang/sua/' . $value->id) }}"><i class="fal fa-edit"></i></a></td>
								<td class="text-center"><a href="{{ url('/sanpham/giohang/xoa/' . $value->id) }}"><i class="fal fa-trash-alt text-danger"></i></a></td>
							@else
								<td align="center">
									@if($value->status == 0)
										<a href="{{route('accept-cart', ['id' => $value->id])}}">Duyệt đơn</a>
									@else
										Đã được duyệt
									@endif
								</td>
							@endif
							
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection