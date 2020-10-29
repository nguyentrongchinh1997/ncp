<!-- Page Footer-->
      <footer class="page-footer font-small blue pt-4">
        <div class="container-fluid text-center text-md-left footer-row1">
          <div class="container">
            <div class="row">
              <div class="col-6 col-md-4">
                <a href="text-center">
                    <img class="logo-footer" src="<?php echo e(asset('/images/logo.png')); ?>" width="20%" height="30%" /><a href="<?php echo e(config('app.name')); ?>" class="h1"><?php echo e(config('app.name')); ?></a>
                </a>
                
                <p class="text-footer">Công ty TNHH Công Nghệ NCP được thành lập từ tháng 10/2019 bởi các thành viên xuất thân từ các công ty hàng đầu về ISP, Datacenter, máy chủ và thiết bị tin học, mạng máy tính, truyền thông, và dịch vụ CNTT</p>
                <hr/>
                <p class="text-footer">Theo dõi chúng tôi tại</p>
                <div class="">
                      <ul class="">
                        <a href="https://www.facebook.com/htnghia.dh18pm/">
                            <img class="logo-footer" src="<?php echo e(asset('/images/icon/facebook.svg')); ?>" width="10%" height="10%" />
                        </a>
                        <a>
                            <img class="logo-footer" src="<?php echo e(asset('/images/icon/youtube.svg')); ?>" width="10%" height="10%" />
                        </a>
                        <a>
                            <img class="logo-footer" src="<?php echo e(asset('/images/icon/twitter.svg')); ?>" width="10%" height="10%" />
                        </a>
                        <a>
                            <img class="logo-footer" src="<?php echo e(asset('/images/icon/ins.svg')); ?>" width="10%" height="10%" />
                        </a>
                      </ul>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <h4 class="text-footer">ABOUT US</h4>
                <form class="">
                    <div class="list-us">
                        <img class="logo-footer" src="<?php echo e(asset('/images/icon/adress.svg')); ?>" width="10%" height="10%" />
                        <a class="text-footer" href="#">Long Xuyên, An Giang</a>
                    </div>
                    <div class="list-us">
                        <img class="logo-footer" src="<?php echo e(asset('/images/icon/phone.svg')); ?>" width="10%" height="10%" />
                        <a class="text-footer" href="tel:0332691871">Hotline: 0332691871</a>
                    </div>
                    <div class="list-us">
                        <img class="logo-footer" src="<?php echo e(asset('/images/icon/email.svg')); ?>" width="10%" height="10%" />
                        <a class="text-footer" href="mailto:trongnghia.cl.tb.ag@gmail.com">Email: leo.angel.tb@gmail.com</a>
                    </div>
                    <div class="list-us">
                        <img class="logo-footer" src="<?php echo e(asset('/images/icon/form.svg')); ?>" width="10%" height="10%" />
                        <a class="text-footer" href="<?php echo e(route('contact')); ?>">Form liên hệ</a>
                    </div>
                </form>
              </div>
              <div class="col-6 col-md-4">
                <h4 class="text-footer">Chính sách</h4>
                <ul>
                    <a href="#"><p class="text-footer">Chính sách bảo mật</p></a>
                    <a href="#"><p class="text-footer">Chính sách đổi trả</p></a>
                    <a href="#"><p class="text-footer">Chính sách đại lý</p></a>
                    <img class="logo-footer" src="<?php echo e(asset('/images/icon/bct.svg')); ?>" width="100%" height="100%" />
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-row2">
          <div class="container">
            <div class="row row-10 align-items-center justify-content-sm-between">
              <div class="col-md-auto">
                <p class="rights"><span>Copy right <?php echo e(date('Y')); ?> &copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span><?php echo e(config('app.name', 'Laravel')); ?></span><span>.&nbsp; All rights reserved</span></p>
              </div>
              <div class="col-md-auto order-md-1">Hosted by <a target="_blank"
                href="https://giayphut.com">Giayphut.com</a></div>
              <div class="col-md-auto">
                    Power by <a href=""><?php echo e(config('app.name')); ?></a>
              </div>
            </div>

            
          </div>
        </div>
      </footer><?php /**PATH E:\Wamp\www\ncp\resources\views/layouts/footer.blade.php ENDPATH**/ ?>