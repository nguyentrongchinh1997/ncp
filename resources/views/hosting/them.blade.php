@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Thêm hosting</div>
		<div class="card-body">
			@if(session('error'))
			<div class="alert alert-danger">
				{{session('error')}}
			</div>
			@endif
			<form action="{{ url('/hosting/them') }}" method="post">
				@csrf

				<div class="form-group">
					<label for="diachiip">Địa chỉ IP</label>
					<input type="text" class="form-control @error('diachiip') is-invalid @enderror" id="diachiip" name="diachiip"/>
					@error('diachiip')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="giatien">Giá tiền</label>
					<select class="form-control" name="giatien">
						<option value="75000">75.000</option>
						<option value="175000">175.000</option>
						<option value="350000">350.000</option>
					</select>
					@error('giatien')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
		</div>
	</div>
@endsection