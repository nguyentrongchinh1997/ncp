

<?php $__env->startSection('content'); ?>
    <!--Section: Contact v.2-->
<section class="mb-4">
     <!-- Success message -->
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Liên Hệ Chúng Tôi</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Bạn có câu hỏi nào không? Xin đừng ngần ngại liên hệ trực tiếp với chúng tôi. Nhóm của chúng tôi sẽ trả lời với bạn trong vòng vài giờ để giúp bạn.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Long Xuyên, An Giang, Việt Nam</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p><a href="tel:0332691871">+ 84 332 691 871</a></p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p><a href="mailto:leo.angel.tb@gmail.com">leo.angel.tb@gmail.com</a></p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-8 mb-md-0 mb-5">
            <form class="" action="" method="post" action="<?php echo e(route('contact.store')); ?>">
                <?php echo csrf_field(); ?>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Họ và tên</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập họ tên...">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Địa chỉ email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Nhập email...">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="phone" class="">Điện thoại</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại...">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Tiêu đề</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Nhập tiêu đề...">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Nội dung</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Nhập nội dung"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <input type="submit" name="send" value="Gửi" class="btn btn-dark btn-block">
            </form>
            <div class="status"></div>
        </div>
        <!--Grid column-->

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\resources\views/contact.blade.php ENDPATH**/ ?>