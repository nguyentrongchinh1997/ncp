@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Xóa bài viết</div>
		<div class="card-body">
			<form action="{{ url('/baiviet/xoa/' . $baiviet->id) }}" method="post">
				@csrf
				<p>Bạn có muốn xóa bài viết {{ $baiviet->tieude }} không?</p>
				
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
@endsection