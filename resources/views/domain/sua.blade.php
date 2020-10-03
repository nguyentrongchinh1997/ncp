@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Sửa domain</div>
		<div class="card-body">
			<form action="{{ url('/domain/sua/' . $domain->id) }}" method="post">
				@csrf
				<div class="form-group">
					<label for="tendomain">Tên domain</label>
					<input type="text" class="form-control @error('tendomain') is-invalid @enderror" id="tendomain" name="tendomain" value="{{ $domain->tendomain }}" />
					@error('tendomain')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="giatien">Giá tiền</label>
					<input type="text" class="form-control @error('giatien') is-invalid @enderror" id="giatien" name="giatien" value="{{ $domain->giatien }}" />
					@error('giatien')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Cập nhật</button>
			</form>
		</div>
	</div>
@endsection