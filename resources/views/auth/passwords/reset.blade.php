@extends('layouts.app')

@section('pagetitle')
	Reset password
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Khôi phục mật khẩu</div>
				<div class="card-body">
					<form method="post" action="{{ route('password.update') }}">
						@csrf
						<input type="hidden" name="token" value="{{ $token }}" />
						<div class="form-group">
							<label for="email">Địa chỉ email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $email ?? old('email') }}" required />
							@error('email')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu mới</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required />
							@error('password')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password-confirm">Xác nhận mật khẩu</label>
							<input type="password" class="form-control" id="password-confirm" name="password_confirmation" required />
							@error('password_confirmation')
								<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="form-group mb-0">
							<button type="submit" class="btn btn-primary"><i class="fal fa-exchange-alt"></i>Đặt lại mật khẩu</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection