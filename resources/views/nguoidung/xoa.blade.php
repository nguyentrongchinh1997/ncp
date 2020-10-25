@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Xóa sinh viên</div>
		<div class="card-body">
			<form action="{{ url('/nguoidung/xoa/' . $nguoidung->id) }}" method="post">
				@csrf
				<p>Bạn có muốn xóa người dùng {{ $nguoidung->hoten }} không?</p>
				
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
@endsection