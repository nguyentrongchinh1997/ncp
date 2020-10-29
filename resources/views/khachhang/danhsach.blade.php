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
						<th>Domain</th>
						<th>Host</th>
					</tr>
				</thead>
				<tbody>
					@foreach($khachhang as $key => $value)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>
								<p>
									{{\App\Helpers\helper::getUser($key)->name}}
								</p>
								<p>
									{{\App\Helpers\helper::getUser($key)->phone}}
								</p>
								<p>
									{{\App\Helpers\helper::getUser($key)->email}}
								</p>
							</td>
							<td>
								<table style="width: 100%">
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
								</table>
							</td>
							{{-- <td>
								@foreach($value as $item)
									<p>
										{{date('d/m/Y', strtotime($item->date_register))}}
									</p>
								@endforeach
							</td>
							<td>
								@foreach($value as $item)
									<p>
										{{date('d/m/Y', strtotime($item->date_exprie))}}
									</p>
								@endforeach
							</td> --}}
							{{-- <td class="text-center"><a href="{{ url('/khachhang/sua/' . $value->id) }}"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="{{ url('/khachhang/xoa/' . $value->id) }}"><i class="fal fa-trash-alt text-danger"></i></a></td> --}}
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