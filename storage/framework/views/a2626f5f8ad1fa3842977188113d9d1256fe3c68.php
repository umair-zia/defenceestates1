

<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    

    <div class="content">
        <div class="title m-b-md">
            Search Result
        </div>
        <!-- <?php for($i = 0; $i< count($ads); $i++): ?>
        <p> <?php echo e($ads[$i]['type']); ?> </p>
        <?php endfor; ?> -->
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <?php echo e($ad->type); ?> - <?php echo e($ad->status); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\laravel\pizzahouse\resources\views/search.blade.php ENDPATH**/ ?>