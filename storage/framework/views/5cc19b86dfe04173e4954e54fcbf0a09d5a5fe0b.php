<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
	
	<title><?php echo e(config('app.name', 'Laravel')); ?></title>
	
	<!-- Scripts -->
	<script src="<?php echo e(asset('public/js/jquery-3.5.1.slim.min.js')); ?>" defer></script>
	<script src="<?php echo e(asset('public/js/popper.min.js')); ?>" defer></script>
	<script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>" defer></script>
	<?php echo $__env->yieldContent('javascript'); ?>
	
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
	
	<!-- Favicon -->
	<link href="<?php echo e(asset('public/images/logo.png')); ?>" rel="shortcut icon" type="image/x-icon" />
	
	<!-- Styles -->
	<link href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/css/fontawesome.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/css/custom.css')); ?>" rel="stylesheet" />

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
			<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
				<img src="<?php echo e(asset('public/images/logo.png')); ?>" width="30" height="30" class="d-inline-block align-top" alt="" />
				<?php echo e(config('app.name', 'Laravel')); ?>

			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<?php if(auth()->guard()->check()): ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/domain')); ?>"><i class="fal fa-globe"></i> Tên miền</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/hosting')); ?>"><i class="fal fa-cloud"></i> Hosting</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/khachhang')); ?>"><i class="fal fa-users"></i> Khách Hàng</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/baiviet')); ?>"><i class="fal fa-edit"></i> Bài Viết</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/sanpham/giohang')); ?>"><i class="fal fa-shopping-bag"></i> Đơn hàng</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/contactdanhsach')); ?>"><i class="fal fa-envelope"></i> Danh sách liên hệ</a></li>
					<?php endif; ?>
				</ul>
				<ul class="navbar-nav ml-auto">
					<?php if(auth()->guard()->guest()): ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="fal fa-sign-in-alt"></i> Đăng nhập</a></li>
						<?php if(Route::has('register')): ?>
							<li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>"><i class="fal fa-user-plus"></i> Đăng ký</a></li>
						<?php endif; ?>
					<?php else: ?>
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fal fa-user-circle"></i> <?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i> Đăng xuất</a>
								<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post" style="display: none;"><?php echo csrf_field(); ?></form>
							</div>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>
		
		<main class="pt-2">
			<?php echo $__env->yieldContent('content'); ?>
		</main>
		
		

	<footer>
		<a class="footer-text" >Bản quyền &copy; <?php echo e(date('Y')); ?> bởi <a class="footer-text-in text-decoration-none" href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'Laravel')); ?>.</a></a>

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
</html><?php /**PATH E:\Wamp\www\resources\views/layouts/app.blade.php ENDPATH**/ ?>