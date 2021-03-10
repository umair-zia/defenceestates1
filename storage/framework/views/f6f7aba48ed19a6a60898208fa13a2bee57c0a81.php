<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                    You are logged in! as <strong><?php echo e(strtoupper(Auth::user()->type)); ?></strong>
                    Admin Page: <a href="<?php echo e(url('/')); ?>/adminOnlyPage"><?php echo e(url('/')); ?>/adminOnlyPage</a>
                    Super Admin Page: <a href="<?php echo e(url('/')); ?>/buyerOnlyPage"><?php echo e(url('/')); ?>/buyerOnlyPage</a>
                    Member Page: <a href="<?php echo e(url('/')); ?>/sellerOnlyPage"><?php echo e(url('/')); ?>/sellerOnlyPage</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\laravel\pizzahouse\resources\views/home.blade.php ENDPATH**/ ?>