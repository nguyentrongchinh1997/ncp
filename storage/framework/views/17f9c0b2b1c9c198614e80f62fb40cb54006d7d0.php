

<?php $__env->startSection('content'); ?>
    <style type="text/css">
        .title-post{
            text-align: center;
            font-weight: bold;
        }

        .created-post{
            color: #096865;
        }

        .card-header{
            text-align: center;
        }

        i.text-danger{
            margin: 20px;
        }
    </style>
    <div class="card">
        <div class="card-header text-center"><h1>Tin Tức</h1></div>
        <div class="card-body">
        <?php if(auth()->guard()->check()): ?>
            <p><a href="<?php echo e(url('/baiviet/them')); ?>" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
        <?php endif; ?>
            <table class="table table-bordered table-sm">
                <thead>
                   
                </thead>
                <tbody>
                    <?php $__currentLoopData = $baiviet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="created-post">Ngày xuất bản <?php echo e($value->created_at); ?></div>
                            <div class="title-post"><h2><?php echo e($value->tieude); ?></h2></div>
                            <div class="d-flex" style="width: 500; height: 320; align-items: center; justify-content: center;">
                                <img class="rounded" src="<?php echo e(asset('/public/upload/'.$value->hinhanh)); ?>" width="500;" height="320;">
                            </div>
                            <div class="content-post"><?php echo e($value->noidung); ?></div>
                        <?php if(auth()->guard()->check()): ?>
                            <div class="text-right">
                                <a href="<?php echo e(url('/baiviet/sua/' . $value->id)); ?>"><i class="fal fa-edit"></i></a>
                                <a href="<?php echo e(url('/baiviet/xoa/' . $value->id)); ?>"><i class="fal fa-trash-alt text-danger"></i></a>
                            </div>
                        <?php endif; ?>
                        </div>
                        <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Wamp\www\laravel\resources\views/baiviet/danhsach.blade.php ENDPATH**/ ?>