@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center"><h2>Khách hàng</h2></div>
		<div class="card-body">
			<p>
				<a href="{{ url('/khachhang/them') }}" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a>
				<a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-file-import"></i> Nhập từ Excel</a>
				<a href="{{ url('/khachhang/xuat') }}" class="btn btn-success"><i class="fal fa-upload"></i> Xuất từ Excel</a></p>

			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Khách hàng</th>
						<th>Domain (Host)</th>
						<th>Ngày đăng ký</th>
						<th>Ngày hết hạn</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($khachhang as $value)
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
								@if($value->hosting_id != '')
									{{$value->Hosting->diachiip}}
								@else
									{{$value->Domain->tendomain}}
								@endif
							</td>
							<td>
								{{date('d/m/Y', strtotime($value->date_register))}}
							</td>
							<td>
								{{date('d/m/Y', strtotime($value->date_exprie))}}
							</td>
							<td class="text-center"><a href="{{ url('/khachhang/sua/' . $value->id) }}"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="{{ url('/khachhang/xoa/' . $value->id) }}"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<form action="{{url('/khachhang/nhap')}}" method="post" enctype="multipart/form-data">
	@csrf
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Nhập từ excel</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			
			  <div class="form-group">
				<label for="recipient-name" class="col-form-label">Chọn tập tin excel</label>
				<input type="file" class="form-control-file" id="TapTinExcel" name="TapTinExcel">
			  </div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Hùy bỏ</button>
			<button type="submit" class="btn btn-primary">Nhập</button>
		  </div>
		</div>
	  </div>
	</div>
</form>
@endsection