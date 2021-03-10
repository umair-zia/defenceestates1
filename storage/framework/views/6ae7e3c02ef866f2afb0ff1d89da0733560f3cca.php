

<?php $__env->startSection('content'); ?>
<div class="wrapper ad-details">
    <h1> Property Details </h1>
    <p class="type">Title - <?php echo e($ad->title); ?></p>
    <p class="type">Type - <?php echo e($ad->type); ?></p>
    <p class="type">Adress - <?php echo e($ad->adress); ?></p>
    <p class="status">Status - <?php echo e($ad->status); ?></p>

</div>
<a href="<?php echo e(route('ads.index')); ?>" class="back"> <- Back to property</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\laravel\pizzahouse\resources\views/ads/show.blade.php ENDPATH**/ ?>