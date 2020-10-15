@extends('layouts.app')

@section('content')

<div>
    <div class="card">
		<div class="card-header">Đăng ký mua hosting</div>
		<div class="card-body">
			<form class="regishosting" action="{{ url('/sanpham/regishosting') }}" method="post">
				@csrf
				<input type="hidden" name="option" value="{{$option}}">		
				<div class="form-group">
					<label for="loaihosting">Loại Hosting</label>
					<select class="form-control @error('loaihosting') is-invalid @enderror" id="loaihosting" name="product">
						<option>-- Chọn loại hosting --</option>
						<option @if($option == 75){{'selected'}}@endif>Start - 75.000VND</option>
						<option @if($option == 175){{'selected'}}@endif>Professional - 175.000VND</option>
						<option @if($option == 350){{'selected'}}@endif>Enterprise - 350.000VND</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Số tháng</label>
					<select name="time" id="" class="form-control">
						<option value="6">6 tháng</option>
						<option value="12">12 tháng</option>
						<option value="18">18 tháng</option>
						<option value="24">24 tháng</option>
						<option value="30">30 tháng</option>
						<option value="36">36 tháng</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
			</form>
		</div>
	</div>
</div>
<script>
	@if(session('success'))
		Swal.fire({
			title: 'Cho vào giỏ hàng thành công',
			icon: 'success',
			confirmButtonText: 'OK'
		});
	@endif
</script>
@endsection