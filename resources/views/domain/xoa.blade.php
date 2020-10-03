@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Xóa domain</div>
		<div class="card-body">
			<form action="{{ url('/domain/xoa/' . $domain->id) }}" method="post">
				@csrf
				<p>Bạn có muốn xóa domain {{ $domain->tendomain }} không?</p>
				
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
@endsection