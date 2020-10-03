@extends('layouts.app')

@section('content')

<div>
    <div class="card">
		<div class="card-header">Đăng ký mua hosting</div>
		<div class="card-body">
			<form class="regishosting" action="{{ url('/sanpham/regishosting') }}" method="post">
				@csrf
				<div class="form-group">
					<label for="dienthoai">Điện thoại</label>
					<input type="text" class="form-control @error('dienthoai') is-invalid @enderror" id="dienthoai" name="dienthoai" />
					@error('dienthoai')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="loaihosting">Loại Hosting</label>
					<select class="form-control @error('loaihosting') is-invalid @enderror" id="loaihosting" name="loaihosting">
						<option>-- Chọn loại hosting --</option>
						<option>Start - 75.000VND</option>
						<option>Professional - 175.000VND</option>
						<option>Enterprise - 350.000VND</option>
					</select>
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
			@if(Session::has('success'))
				<style type="text/css">
					.regishosting{
						display: none;
					}
				</style>
	            <div class="alert alert-success">
	                {{Session::get('success')}}
	                <a class="btn btn-primary" href="/sanpham/sanphamhosting">Quay lại</a>
	            </div>
        	@endif
		</div>
	</div>
</div>
@endsection