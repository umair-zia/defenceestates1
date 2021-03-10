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
                    You are logged in! as <strong><?php echo e(strtoupper(Auth::user()->type)); ?></strong>
                    <!-- Admin Page: <a href="<?php echo e(url('/')); ?>/adminOnlyPage"><?php echo e(url('/')); ?>/adminOnlyPage</a>
                    Super Admin Page: <a href="<?php echo e(url('/')); ?>/buyerOnlyPage"><?php echo e(url('/')); ?>/buyerOnlyPage</a>
                    Member Page: <a href="<?php echo e(url('/')); ?>/sellerOnlyPage"><?php echo e(url('/')); ?>/sellerOnlyPage</a> -->
                    Admin Page: <a href="<?php echo e(route('admin.index')); ?>"><?php echo e(url('/')); ?>/adminOnlyPage</a>
                    Super Admin Page: <a href="<?php echo e(url('/')); ?>/buyerOnlyPage"><?php echo e(url('/')); ?>/buyerOnlyPage</a>
                    Member Page: <a href="<?php echo e(url('/')); ?>/sellerOnlyPage"><?php echo e(url('/')); ?>/sellerOnlyPage</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\defenceEstate1\defenceEstate1\resources\views/home.blade.php ENDPATH**/ ?>