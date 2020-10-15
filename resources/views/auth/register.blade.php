@extends('layouts.app')

@section('pagetitle')
	Register
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Đăng ký</div>
				<div class="card-body">
					<form method="post" action="{{ route('register') }}">
						@csrf
						<div class="form-group">
							<label for="name">Họ và nên</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required />
							@error('name')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group">
							<label for="username">Tên tài khoản</label>
							<input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required />
							@error('username')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group">
							<label for="email">Địa chỉ email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required />
							@error('email')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group">
							<label for="phone">Số điện thoại</label>
							<input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required />
							@error('phone')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required />
							@error('password')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password-confirm">Xác nhận mật khẩu</label>
							<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password-confirm" name="password_confirmation" required />
							@error('password_confirmation')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group mb-0">
							<button type="submit" class="btn btn-primary"><i class="fal fa-user-plus"></i>Đăng ký</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection