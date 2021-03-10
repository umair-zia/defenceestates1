<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3><?php echo e($name ?? 'n/a'); ?></h3>
                    <h3><?php echo e($type ?? 'n/a'); ?></h3>
                    <h3><?php echo e($phase ?? 'n/a'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xxx/Desktop/php/defenceEstate1/defenceEstate1/resources/views/result.blade.php ENDPATH**/ ?>