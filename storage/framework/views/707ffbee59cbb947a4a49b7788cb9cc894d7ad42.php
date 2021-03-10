

<?php $__env->startSection('content'); ?>
    <div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Properties</h1>
                <ul class="bread-crumb clearfix">
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Property Filter Section -->
    <section class="property-filter-section" style="background: #2e2e2e">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                        <h2 style="color: #FFFFFF;">PROPERTY TYPES</h2>
                    </div>

                    <!--Filter-->
                    <form action="<?php echo e(route('searchBar')); ?>" method="get">
                    <div class="filters col-md-3">
                        <input class="form-group" type="text"  placeholder="Search" name="search" style="position: relative; display: block; width: 100%; line-height: 28px; padding: 10px 20px; height: 50px;font-size: 14px; border: 1px solid #e0e0e0; border-radius: 6px;">
                    </div>
                </form>
                </div>

                <div class="filter-list row">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Property Block -->
                    <div class="property-block all mix house villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box"style="border: solid grey 3px; padding: 5px 5px;">
                            <div class="image-box">
                            <a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>">
                            <?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if( $loop->iteration == 1): ?>
                                <?php if(isset($img)): ?>
                                    <figure class="image"><img style="height: 280px" src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt=""></figure>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </a>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    
                                </ul>
                                <h3><a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" style="color: #FFFFFF"><?php echo e($ad->title); ?></a></h3>
                                <div class="lucation" style="color: #FFFFFF"><i class="la la-map-marker"></i><?php echo e($ad->adress); ?></div>
                                <ul class="property-info clearfix">
                                    <?php if($ad->unit == 'Marla'): ?>
                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($ad->area); ?> Marla
                                <?php else: ?>
                                    <?php if($ad->unit != 'Marla'): ?>
                                        <?php if($ad->unit == 'Square Feet'): ?>
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($ad->area/225, 2)); ?> Marla
                                            <sup>
                                                <a class="la la-info-circle" 
                                                data-toggle="popover" 
                                                title="Area Conversion" 
                                                data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                                </a>
                                            </sup>
                                        <?php endif; ?>
                                        <?php if($ad->unit == 'Square Yards'): ?>
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($ad->area/25, 2)); ?> Marla
                                            <sup>
                                                <a class="la la-info-circle" 
                                                data-toggle="popover" 
                                                title="Area Conversion" 
                                                data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                                </a>
                                            </sup>
                                        <?php endif; ?>
                                        <?php if($ad->unit == 'Square Meters'): ?>
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($ad->area/20.9, 2)); ?> Marla
                                            <sup>
                                                <a class="la la-info-circle" 
                                                data-toggle="popover" 
                                                title="Area Conversion" 
                                                data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                                </a>
                                            </sup>
                                        <?php endif; ?>
                                        <?php if($ad->unit == 'Kanal'): ?>
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($ad->area*20); ?> Marla
                                            <sup>
                                                <a class="la la-info-circle" 
                                                data-toggle="popover" 
                                                title="Area Conversion" 
                                                data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                                </a>
                                            </sup>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                        
                                <?php endif; ?>
                                    <li style="color: #FFFFFF"><i class="flaticon-bed"></i> <?php echo e($ad->bedroom); ?> Bedrooms</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i> <?php echo e($ad->kitchen); ?> Kitchen</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-bathtub"></i> <?php echo e($ad->bathroom); ?> Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" class="theme-btn btn-style-two" style="background: #2f4f4f">More Detail</a></div>
                                    <div class="price">Rs. <?php echo e($ad->demand); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div>

            </div>
        </div>
    </section>
    <!--End Property Filter Section -->


    <!--Clients Section-->

    <!--End Clients Section-->


    </div>
<script>
document.getElementById("searchBar").addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
    	document.getElementById("Sfrom").submit();
		return false;
    }
});

$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\22-10-20\defenceEstate1\resources\views/ads/index.blade.php ENDPATH**/ ?>