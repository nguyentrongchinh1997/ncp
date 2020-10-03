@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Thêm domain</div>
		<div class="card-body">
			@if(session('error'))
			<div class="alert alert-danger">
				{{session('error')}}
			</div>
			@endif
			<form action="{{ url('/domain/them') }}" method="post">
				@csrf				
				<div class="form-group">
					<label for="tendomain">Tên domain</label>
					<input type="text" class="form-control @error('tendomain') is-invalid @enderror" id="tendomain" name="tendomain" />
					@error('tendomain')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="giatien">Giá tiền</label>
					<input type="text" class="form-control @error('giatien') is-invalid @enderror" id="giatien" name="giatien"/>
					@error('giatien')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
		</div>
	</div>
@endsection