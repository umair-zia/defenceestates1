

<?php $__env->startSection('content'); ?>
<div class="wrapper create-ad">
<h1>Create new ad</h1>
<form action="<?php echo e(route('ads.index')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="title">Title</label>
    <input type="text" id="title" name="title">

    <label for="type">Chose ad type:</label>
    <select name="type" id="type">
        <option value="Flat">Flat</option>
        <option value="House">House</option>
        <option value="Appartment">Appartment</option>
    </select>
    <label for="adress">Adress</label>
    <input type="textbox" id="adress" name="adress">
    <input type="hidden"  name="status" value="true">
    <input type="submit" value="post ad">
</form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\laravel\pizzahouse\resources\views/ads/create.blade.php ENDPATH**/ ?>