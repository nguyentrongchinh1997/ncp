@extends('layouts.app')

@section('content')

<div>
    <div class="card">
		<div class="card-header">Nhập số điện thoại để xác nhận mua tên miền</div>
		<div class="card-body">
			<form class="regishosting" action="{{route('buy-domain')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="dienthoai">Điện thoại</label>
					<input type="text" required class="form-control @error('dienthoai') is-invalid @enderror" id="dienthoai" name="dienthoai" />
					@error('dienthoai')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                <input type="hidden" name="domain" value="{{$domain}}">
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