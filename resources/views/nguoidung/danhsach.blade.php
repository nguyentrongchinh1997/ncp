@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center"><h2>Thông tin tài khoản</h2></div>
		<div class="card-body">
			@csrf


			
			{{--
			<form action="{{ url('/nguoidung/them/' . auth()->user()->id) }}" method="post" enctype="multipart/form-data">

				<div class="card w-50">
					
					<input  type="file" class="form-control @error('hinhanh') is-invalid @enderror" id="hinhanh" name="hinhanh"/>
					@error('hinhanh')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
					<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm ảnh đại diện</button>
				</div>
			</form>--}}

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
					
				</thead>
				
			</table>
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Domain</th>
						<th>Host</th>
						<th>Ngày đăng ký - Hết hạn</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $productItem)
						<tr>
							<td>{{ $loop->iteration }}</td>
							
							<td>
								@if($productItem->domain_id != '')
									{{$productItem->Domain->tendomain}}
								@endif
							</td>
							<td>
								@if($productItem->hosting_id != '')
									{{$productItem->Hosting->diachiip}}
								@endif
							</td>
							<td>
								{{date('d/m/Y', strtotime($productItem->date_register))}} - {{date('d/m/Y', strtotime($productItem->date_expire))}}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection