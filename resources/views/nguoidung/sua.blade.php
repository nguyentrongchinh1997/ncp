@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Sửa khách hàng</div>
		<div class="card-body">
			<form action="{{ url('/nguoidung/sua/' . $nguoidung->id) }}" method="post">
				@csrf
				<div class="form-group">
					<label for="id">Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $nguoidung->name }}"/>
					@error('id')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="id">Username</label>
					<input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $nguoidung->username }}"/>
					@error('username')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="id">Phone</label>
					<input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $nguoidung->phone }}"/>
					@error('phone')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="id">Email</label>
					<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $nguoidung->email }}"/>
					@error('email')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Cập nhật</button>
			</form>
		</div>
	</div>
@endsection