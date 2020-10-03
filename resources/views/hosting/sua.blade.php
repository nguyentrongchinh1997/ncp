@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Sửa hosting</div>
		<div class="card-body">
			<form action="{{ url('/hosting/sua/' . $hosting->id) }}" method="post">
				@csrf
				<div class="form-group">
					<label for="diachiip">Địa chỉ IP</label>
					<input type="text" class="form-control @error('diachiip') is-invalid @enderror" id="diachiip" name="diachiip" value="{{ $hosting->diachiip }}" />
					@error('diachiip')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="giatien">Giá tiền</label>
					<input type="text" class="form-control @error('giatien') is-invalid @enderror" id="giatien" name="giatien" value="{{ $hosting->giatien }}" />
					@error('giatien')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Cập nhật</button>
			</form>
		</div>
	</div>
@endsection