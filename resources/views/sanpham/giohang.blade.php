@extends('layouts.app')

@section('content')
<div class="card">
		<div class="card-header text-center"><h2>Quản lý đơn hàng</h2></div>
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
						<th>Sản phẩm</th>
						<th>Trạng thái</th>
						<th>Xác nhận</th>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $value)
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
							<td>
								<table>
									<tr>
										<th>
											Domain (Hosting)
										</th>
										<th>
											Giá
										</th>
										<th>Hết hạn</th>
										@if($value->status != 1)
										<th>Thao tác</th>
										@endif
									</tr>
									@php $tong = 0; @endphp
									@foreach($value->regishosting as $item)
										@php $tong+= $item->price; @endphp
										<tr>
											<td>
												{{$item->loaihosting}}
											</td>
											<td>
												{{number_format($item->price)}}
											</td>
											<td>
												{{date('d/m/Y', strtotime($item->created_at))}} - 
												@if($item->type == 0)
													{{date('d/m/Y', strtotime('+1 years', strtotime($item->created_at)))}}
												@else
													{{date('d/m/Y', strtotime("+$item->time month", strtotime($item->created_at)))}}
												@endif
											</td>
											@if($value->status != 1)
											<td>
												<a href="{{ url('/sanpham/giohang/sua/' . $item->id) }}"><i class="fal fa-edit"></i></a><a href="{{ url('/sanpham/giohang/xoa/' . $item->id) }}"><i class="fal fa-trash-alt text-danger"></i></a>
											</td>
											@endif
										</tr>
									@endforeach
									<tr>
										<th>Giảm giá</th>
										<th>
											@if($value->discount)
												@php $discount = $value->discount @endphp
											@else
											@php $discount = 0 @endphp
											@endif
											{{$discount}} %
										</th>
										<td></td>
									</tr>
									<tr>
										<th>Thành tiền</th>
										<th>
											{{number_format($tong - $tong * $discount/100)}}
										</th>
										<td></td>
									</tr>
								</table>
							</td>					
							<td>
								@if($value->status == 0)
									Chưa duyệt
								@elseif($value->status == 1)
									Đã được duyệt
								@else
									Đã hủy
								@endif
							</td>
							<td>
								@if($value->status == 0 && auth()->user()->level == 1)
								<a href="{{route('accept-cart', ['id' => $value->id])}}">
									Duyệt đơn
								</a>
								@endif
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection