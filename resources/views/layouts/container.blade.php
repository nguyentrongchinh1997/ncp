<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	<a class="navbar-brand" href="{{ url('/') }}">
		<img src="{{ asset('images/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" />
		{{ config('app.name', 'Laravel') }}
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			@auth()
			@if(auth()->user()->level==1)
				<li class="nav-item"><a class="nav-link" href="{{ url('/domain') }}"><i class="fal fa-globe"></i> Tên miền</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ url('/hosting') }}"><i class="fal fa-cloud"></i> Hosting</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ url('/khachhang') }}"><i class="fal fa-users"></i> Khách Hàng</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ url('/baiviet') }}"><i class="fal fa-edit"></i> Bài Viết</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ url('/sanpham/giohang') }}"><i class="fal fa-shopping-bag"></i> Đơn hàng</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ url('/contactdanhsach') }}"><i class="fal fa-envelope"></i> Danh sách liên hệ</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('doanhthu') }}"><i class="fal fa-envelope"></i> Doanh thu</a></li>
			@endif
			@endauth
		</ul>
		<ul class="navbar-nav ml-auto">
			@guest
				<li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fal fa-sign-in-alt"></i> Đăng nhập</a></li>
				@if (Route::has('register'))
					<li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fal fa-user-plus"></i> Đăng ký</a></li>
				@endif
			@else
				<li class="nav-item">
					<img src="{{ asset('images/cart.svg') }}" width="60" height="30" alt="cart" />
					<a id="cart-text" class="nav-link" href="{{route('cart.list')}}">Giỏ hàng</a>
				</li>
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fal fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('nguoidung') }}"><i class="fal fa-sign-out"></i>Thông tin tài khoản</a>
						<a class="dropdown-item" href="{{ route('change.password') }}"><i class="fal fa-sign-out"></i>Đổi mật khẩu</a>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i> Đăng xuất</a>
						<form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">@csrf</form>
					</div>
				</li>
			@endguest
		</ul>
	</div>
</nav>