

<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    

    <div class="content">
        <div class="title m-b-md">
            Search Result
        </div>
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
              <?php echo e($ad->title); ?> - <a href="<?php echo e(route('ads.show', ['id' => $ad->id])); ?>">View</a> - 
              <form action="<?php echo e(route('ads.destroy', ['id' => $ad->id])); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button>Remove</button>
              </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\laravel\pizzahouse\resources\views/ads/index.blade.php ENDPATH**/ ?>