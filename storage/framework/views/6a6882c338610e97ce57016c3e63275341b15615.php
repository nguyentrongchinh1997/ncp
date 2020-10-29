<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
	
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
				<img src="<?php echo e(asset('images/logo.png')); ?>" width="30" height="30" class="d-inline-block align-top" alt="" />
				<?php echo e(config('app.name', 'Laravel')); ?>

			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<?php if(auth()->guard()->check()): ?>
					<?php if(auth()->user()->level==1): ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/domain')); ?>"><i class="fal fa-globe"></i> Tên miền</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/hosting')); ?>"><i class="fal fa-cloud"></i> Hosting</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/khachhang')); ?>"><i class="fal fa-users"></i> Khách Hàng</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/baiviet')); ?>"><i class="fal fa-edit"></i> Bài Viết</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/sanpham/giohang')); ?>"><i class="fal fa-shopping-bag"></i> Đơn hàng</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/contactdanhsach')); ?>"><i class="fal fa-envelope"></i> Danh sách liên hệ</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(route('doanhthu')); ?>"><i class="fal fa-envelope"></i> Doanh thu</a></li>
					<?php endif; ?>
					<?php endif; ?>
				</ul>
				<ul class="navbar-nav ml-auto">
					<?php if(auth()->guard()->guest()): ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="fal fa-sign-in-alt"></i> Đăng nhập</a></li>
						<?php if(Route::has('register')): ?>
							<li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>"><i class="fal fa-user-plus"></i> Đăng ký</a></li>
						<?php endif; ?>
					<?php else: ?>
						<li class="nav-item">
							<img src="<?php echo e(asset('images/cart.svg')); ?>" width="60" height="30" alt="cart" />
							<a id="cart-text" class="nav-link" href="<?php echo e(route('cart.list')); ?>">Giỏ hàng</a>
						</li>
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fal fa-user-circle"></i> <?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo e(route('nguoidung')); ?>"><i class="fal fa-sign-out"></i>Thông tin tài khoản</a>
								<a class="dropdown-item" href="<?php echo e(route('change.password')); ?>"><i class="fal fa-sign-out"></i>Đổi mật khẩu</a>
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
		
		
	
	</div>
</body>
</html>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/layouts/app.blade.php ENDPATH**/ ?>