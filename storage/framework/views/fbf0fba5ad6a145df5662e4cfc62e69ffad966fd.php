

<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Thay đổi mật khẩu</div>

                <!-- Success message -->
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
            <!--Section heading-->

                <div class="card-body">

                    <form method="POST" action="<?php echo e(route('change.password')); ?>">

                        <?php echo csrf_field(); ?> 

   

                         <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <p class="text-danger"><?php echo e($error); ?></p>

                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

  

                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu cũ</label>

  

                            <div class="col-md-6">

                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">

                            </div>

                        </div>

  

                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu mới</label>

  

                            <div class="col-md-6">

                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">

                            </div>

                        </div>

  

                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Xác nhận mật khẩu mới</label>

    

                            <div class="col-md-6">

                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">

                            </div>

                        </div>

   

                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-4">

                                <button type="submit" class="btn btn-primary">

                                    Update Password

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\ncp\resources\views/changePassword.blade.php ENDPATH**/ ?>