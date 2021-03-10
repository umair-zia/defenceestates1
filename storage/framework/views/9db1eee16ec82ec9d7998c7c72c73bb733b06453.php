<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="content">
        <div class="title m-b-md">
        <img src="/img/logo.jpg" alt="Logo">
            Defence Estates
        </div>
        <p class="msg"><?php echo e(session('msg')); ?></p>
        <div class="links">
            <a  href="<?php echo e(route('ads.create')); ?>">Post ad</a>
            <a  href="<?php echo e(route('ads.index')); ?>">View ad</a>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\laravel\pizzahouse\resources\views/welcome.blade.php ENDPATH**/ ?>