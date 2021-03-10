

<?php $__env->startSection('content'); ?>
<div class="container">

You cannot access this page! This is for only ‘<?php echo e($role); ?>’”
<a href="<?php echo e(route('login')); ?>">log in as <?php echo e($role); ?></a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xxx/Desktop/php/defenceEstate1/defenceEstate1/resources/views/unauthorized.blade.php ENDPATH**/ ?>