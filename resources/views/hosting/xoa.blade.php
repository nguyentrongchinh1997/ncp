@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Xóa hosting</div>
		<div class="card-body">
			<form action="{{ url('/hosting/xoa/' . $hosting->id) }}" method="post">
				@csrf
				<p>Bạn có muốn xóa hosting {{ $hosting->diachiip }} không?</p>
				
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
@endsection