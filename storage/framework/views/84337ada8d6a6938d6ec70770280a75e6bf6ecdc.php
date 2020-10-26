

<?php $__env->startSection('content'); ?>
        <style>
            html, body {
                background-color: #BEEEED;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            nav{
                display: none!important;
            }
            main{
                min-height: 365px!important;
            }
        </style>

<div class="flex-center position-ref">
         <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Trang Quản Lý</a>

                        
                            <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Đăng Nhập</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Đăng Ký</a>
                        <?php endif; ?>
                        

                    <?php endif; ?>
                </div>
            <?php endif; ?>
       
            <div class="content">
                <div class="title m-b-md">
                    NCP Xin Chào !!!
                </div>

                <div class="links">
                    <a href="<?php echo e(route('sanphamdomain')); ?>">Mua Domain</a>
                    <a href="<?php echo e(route('sanphamhosting')); ?>">Mua Hosting</a>
                    <a href="<?php echo e(route('contact')); ?>">Liên Hệ</a>
                    <a href="<?php echo e(route('baiviet')); ?>">Tin Tức</a>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/welcome.blade.php ENDPATH**/ ?>