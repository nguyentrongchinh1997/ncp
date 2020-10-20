@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center"><h2>Thông tin tài khoản</h2></div>
		<div class="card-body">
			<p>
				{{-- <a href="{{ url('/khachhang/them') }}" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a>
				<a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-file-import"></i> Nhập từ Excel</a>
				<a href="{{ url('/khachhang/xuat') }}" class="btn btn-success"><i class="fal fa-upload"></i> Xuất từ Excel</a></p> --}}

			<table class="table table-bordered table-sm">
				<thead class="">
					<!-- xuất thông tin user -->
					@foreach($nguoidung as $value)
					<tr>
						<td>Họ và tên</td>
						<td>{{ $value->name }}</td>
					</tr>
						
					<tr>
						<td>Tên tài khoản</td>
						<td>{{ $value->username }}</td>
					</tr>
					<tr>
						<td>Điện thoại</td>
						<td>{{ $value->phone }}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>{{ $value->email }}</td>
					</tr>
					<tr>
						<td class="text-center">
							<a class="btn btn-primary" href="{{ url('/nguoidung/sua/' . $value->id) }}">Sửa thông tin
							<i class="fal fa-edit"></i>
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger" href="{{ url('/nguoidung/xoa/' . $value->id) }}">Xóa tài khoản 
							<i class="fal fa-trash-alt text-warning"></i>
							</a>
						</td>
					</tr>
				@endforeach

				{{-- Xuất domain - hosting của user --}}
				{{--	<table style="width: 100%">
						@foreach($khachhang as $key => $value)
									@foreach($value as $item)
										@if($item->domain_id != '')
											<tr>
												@if($item->hosting_id != '')
													<td>
														{{$item->Hosting->diachiip}}
													</td>
													
												@else
													<td>
														{{$item->Domain->tendomain}}
													</td>
												@endif
												<td>
													Thời hạn: từ
													<b>{{date('d/m/Y', strtotime($item->date_register))}}</b>
													đến <b>{{date('d/m/Y', strtotime($item->date_exprie))}}</b>
												</td>
											</tr>
										@endif
									@endforeach
								</table>
							</td>
							<td>
								<table style="width: 100%">
									@foreach($value as $item)
										@if($item->hosting_id != '')
											<tr>
												@if($item->hosting_id != '')
													<td>
														{{$item->Hosting->diachiip}}
													</td>
													
												@else
													<td>
														{{$item->Domain->tendomain}}
													</td>
												@endif
												<td>
													Thời hạn: từ
													<b>{{date('d/m/Y', strtotime($item->date_register))}}</b>
													đến <b>{{date('d/m/Y', strtotime($item->date_exprie))}}</b>
												</td>
												
											</tr>
										@endif
									@endforeach
								@endforeach
								</table>
								--}}
				</thead>
				
			</table>
		</div>
	</div>
@endsection