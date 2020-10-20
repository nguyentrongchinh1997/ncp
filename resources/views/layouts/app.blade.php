<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<base href="{{asset('')}}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	{{-- <script src="{{ asset('/js/jquery-3.5.1.slim.min.js') }}" defer></script> --}}
	<script src="{{ asset('/js/popper.min.js') }}" defer></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>
	@yield('javascript')
	
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
	
	<!-- Favicon -->
	<link href="{{ asset('/images/logo.png') }}" rel="shortcut icon" type="image/x-icon" />
	
	<!-- Styles -->
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/css/fontawesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/css/custom.css') }}" rel="stylesheet" />
	<script src="{{ asset('ckeditor_full/ckeditor.js') }}"></script>
	<script>
		CKEDITOR.replace('noidung', {height: 500});
	</script>
	<script src="https://truyen88.net/js/admin/sweetalert2@9.js"></script>

	<style>
		tr:hover {
			background-color:#f5f5f5;
		}
		footer {
		    position: fixed;
		    bottom: 0;
		    width: 100%;
		}
	</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('images/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" />
				{{ config('app.name', 'Laravel') }}
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					@auth
						<li class="nav-item"><a class="nav-link" href="{{ url('/domain') }}"><i class="fal fa-globe"></i> Tên miền</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/hosting') }}"><i class="fal fa-cloud"></i> Hosting</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/khachhang') }}"><i class="fal fa-users"></i> Khách Hàng</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/baiviet') }}"><i class="fal fa-edit"></i> Bài Viết</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/sanpham/giohang') }}"><i class="fal fa-shopping-bag"></i> Đơn hàng</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/contactdanhsach') }}"><i class="fal fa-envelope"></i> Danh sách liên hệ</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('doanhthu') }}"><i class="fal fa-envelope"></i> Doanh thu</a></li>
					@endauth
				</ul>
				<ul class="navbar-nav ml-auto">
					@guest
						<li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fal fa-sign-in-alt"></i> Đăng nhập</a></li>
						@if (Route::has('register'))
							<li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fal fa-user-plus"></i> Đăng ký</a></li>
						@endif
					@else
						<li>
						<a href="{{route('cart.list')}}">Giỏ hàng</a>
						</li>
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fal fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('nguoidung') }}"><i class="fal fa-sign-out"></i>Thông tin tài khoản</a>
								<a class="dropdown-item" href=""><i class="fal fa-sign-out"></i>Đổi mật khẩu</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i> Đăng xuất</a>
								<form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">@csrf</form>
							</div>
						</li>
					@endguest
				</ul>
			</div>
		</nav>
		
		<main class="pt-2">
			@yield('content')
		</main>
		
		

	<footer>
		<a class="footer-text" >Bản quyền &copy; {{ date('Y') }} bởi <a class="footer-text-in text-decoration-none" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}.</a></a>

		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="arrow up"></i></button>
			<style type="text/css">
				a.footer-text-in{
					color: black;
				}

				a.footer-text-in:hover{
					color: blue;
				}

				footer{
					background: #565551;
					font-size: 25px;
					text-align: center;
				}

				#myBtn {
				  display: none;
				  position: fixed;
				  bottom: 20px;
				  right: 30px;
				  z-index: 99;
				  font-size: 18px;
				  border: none;
				  outline: none;
				  background-color: red;
				  color: black;
				  cursor: pointer;
				  padding: 15px;
				  border-radius: 4px;
				}

				#myBtn:hover {
				  background-color: green;
				}

				.up {
			    transform: rotate(-135deg);
			    -webkit-transform: rotate(-135deg);
				}

			    i.up {
			    border: solid black;
			    border-width: 0 3px 3px 0;
			    display: inline-block;
			    padding: 3px;
			</style>
			<script>
			//Get the button
			var mybutton = document.getElementById("myBtn");

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			    mybutton.style.display = "block";
			  } else {
			    mybutton.style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
			</script>
	</footer>

	</div>
</body>
</html>