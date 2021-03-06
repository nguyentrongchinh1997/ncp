
<?php $__env->startSection('content'); ?>
<style type="text/css"> 
    body{
        background-image: url(<?php echo e(asset('/images/banner.jpg')); ?>);
        background-repeat: no-repeat;
        background-size: 1520px 1200px;
    }

    main{
        min-height: 800px;
    }
    .box{
        position: relative;  
        overflow: hidden; 
        box-shadow: 0 0 5px #808080;
        width: 100%;
        min-height: 180px;
    }

    .box:before,
    .box:after{
        content: "";
        width: 0;
        height: 0;
        position: absolute;
        z-index: 1;
        transition: all 0.5s ease 0s;
    }
     
    .box:before{
        bottom: 5%;
        left: 5%;
        border-bottom: 2px solid #000;
        border-left: 2px solid #000;
    }
     
    .box:after{
    top: 5%;
    right: 5%;
    border-top: 2px solid #000;
    border-right: 2px solid #000;
    }
     
    .box:hover:before,
    .box:hover:after{
        opacity: 1;
        width: 90%;
        height: 90%;
    }
     
    .box img{
        width: 100%;
        height: auto;
        transform: scale(1);
        transition: all 0.5s ease 0s;
    }
     
    .box:hover img{
        transform: scale(1.05);
    }
     
    .box .box-content{
        width: 100%;
        position: absolute;
        bottom: 10%;
        left: 10%;
    }
     
    .box .title,
    .box .post{
        display: block;
        font-size: 25px;
        color: #000;
        font-weight: bold;
        line-height: 25px;
        margin: 0;
        position: absolute;
        bottom: 0;
        left: 0;
        opacity: 1;
        transition: all 0.5s ease 0s;
    }
     
     
    .box:hover .title,
    .box .post{
        opacity: 0;
    }
     
    .box:hover .post{
        opacity: 1;
    }

    @media  only screen and (max-width: 900px){
        .box{ 
            margin-bottom: 20px; 
        }
    }
    
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }

    .top-nav-collapse {
      background-color: #3f51b5 !important;
    }

    

    @media (max-width: 991px) {
      .navbar:not(.top-nav-collapse) {
        background: #3f51b5 !important;
      }
    }

    .rgba-gradient {
      background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
      background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%)));
      background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
    }

    .card {
      background-color: rgba(126, 123, 215, 0.2);
    }

    .md-form label {
      color: #ffffff;
    }

    h6 {
      line-height: 1.7;
    }

    .btn-regis-reset{
        border: 3px solid #1877f2;
        border-radius: 50px!important;
        font-size: 20px;
        line-height: 48px;
        padding: 0 16px;
        width: 332px;
        color: white;
        }

    .submit-login{
        font-weight: bold;
        border: 9px solid #1877f2;
        border-radius: 50px!important;
        font-size: 20px;
        line-height: 48px;
        padding: 0 16px;
        width: 332px;
        color: white;
        }

    .submit-login:hover{
        background: #1877f2;
        font-weight: bold;
    }
    .btn-regis-reset:hover{
        background: #1877f2;
        font-weight: bold;
        color: black;
    }

    div.form-regis{
        margin-left: 7%;
    }
    <?php if(auth()->guard()->check()): ?>
        div.form-regis{
            display: none;
        }
    <?php endif; ?>
</style>
<div class="container bg-img">
    <div class="row">
        <div class="col-md-3 col-sm-6" onclick="window.open('<?php echo e(route('sanphamdomain')); ?>','mywindow');">
            <div class="box">
                <img class="rounded" src="<?php echo e(asset('/images/domain.jpg')); ?>" alt="domain">
                <div class="box-content">
                    <h3 class="title">Domain</h3>
                    <span class="post">Tìm tên miền ngay</span>
                </div>   
            </div>             
        </div>
        <div class="col-md-3 col-sm-6" onclick="window.open('<?php echo e(route('sanphamhosting')); ?>','mywindow');">
            <div class="box">
                <img class="rounded" src="<?php echo e(asset('/images/host.jpg')); ?>" alt="giay phut">
                <div class="box-content links">  
                    <h3 class="title">Hosting</h3>
                    <span class="post">Hosting giá rẻ</span>
                </div>
            </div>             
        </div>
        <div class="col-md-3 col-sm-6" onclick="window.open('<?php echo e(route('contact')); ?>','mywindow');">
            <div class="box">
                <img class="rounded" src="<?php echo e(asset('/images/contact.jpg')); ?>" alt="contacts">
                <div class="box-content">
                    <h3 class="title">Liên hệ CSKH</h3> 
                    <span class="post">Liên hệ ngay</span>
                </div>   
            </div>             
        </div>
        <div class="col-md-3 col-sm-6" onclick="window.open('<?php echo e(route('baiviet')); ?>','mywindow');">
            <div class="box">
                <img class="rounded" src="<?php echo e(asset('/images/posts.png')); ?>" alt="bài viết">
                <div class="box-content">
                    <h3 class="title">Bài viết</h3>
                    <span class="post">Xem bài viết</span>
                </div>   
            </div>             
        </div>
    </div>
</div>

<div class="container">
                <!--Grid row-->
                <div class="row mt-5">
                  <!--Grid column-->
                  <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now! </h1>
                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                    <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
                    nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
                    dolor molestiae, quisquam iste, maiores. Nulla.</h6>
                    <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-6 col-xl-5 mb-4 form-regis">
                    <!--Form-->
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                      <div class="card-body">
                        <!--Header-->
                        <div class="text-center">
                          <h3 class="white-text">
                            <i class="fas fa-user white-text"></i> Đăng Nhập</h3>
                          <hr class="hr-light">
                        </div>
                        <!--Body-->
                        <form method="post" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="" for="email">Tài khoản</label>
                            <i class="fas fa-envelope prefix white-text active"></i>
                            <input type="text" class="white-text form2 form-control<?php echo e(($errors->has('email') || $errors->has('username')) ? ' is-invalid' : ''); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email address or Username" required />
                            <?php if($errors->has('email') || $errors->has('username')): ?>
                                <span class="invalid-feedback" role="alert"><strong><?php echo e(empty($errors->first('email')) ? $errors->first('username') : $errors->first('email')); ?></strong></span>
                            <?php endif; ?>
                        </div>


                        <div class="form-group">
                            <label for="form4">Mật khẩu</label>
                            <i class="fas fa-lock prefix white-text active"></i>
                            <input type="password" class="white-text form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" placeholder="Password" required />
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="remember" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> />
                                <label class="custom-control-label" for="remember">Nhớ mật khẩu</label>
                            </div>
                        </div>
                        <div class="text-center mt-4 form-group mb-0">
                            <button type="submit" class="submit-login btn btn-indigo">Đăng nhập</button>
                            <hr class="hr-light mb-3 mt-4">
                        </div>

                        <div class="inline-ul text-center">
                            <a class="btn-regis-reset text-decoration-none" href="<?php echo e(asset('register')); ?>">Tạo tài khoản</a>
                            <?php if(Route::has('password.request')): ?>
                            <a class="btn-regis-reset text-decoration-none" href="<?php echo e(route('password.request')); ?>">Quên mật khẩu?</a>
                            <?php endif; ?>
                        </div>
                        
                        <div class="row mt-4 form-group mb-0">
                            <div class="col-md-4 col-sm-6 all-center">
                                <img src="<?php echo e(asset('/images/icon/facebook.svg')); ?>" width="30%" />
                            </div>
                            <div class="col-md-4 col-sm-6 all-center">
                                <img src="<?php echo e(asset('/images/icon/twitter.svg')); ?>" width="30%"/>
                            </div>
                            <div class="col-md-4 col-sm-6 all-center">
                                <img src="<?php echo e(asset('/images/icon/ins.svg')); ?>" width="30%"/>
                            </div>
                        </div>
                        
                        </form>
                      </div>
                    </div>
                    <!--/.Form-->
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
<?php $__env->stopSection(); ?>











<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/welcome.blade.php ENDPATH**/ ?>