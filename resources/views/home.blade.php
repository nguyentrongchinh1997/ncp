@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center"><h2>Trang chủ</h2></div>
		<div class="card-body">
			@if(session('status'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('status') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
			Trang web quản lý domain & hosting.
		</div>
	</div>
@endsection