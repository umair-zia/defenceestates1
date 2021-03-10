

<?php $__env->startSection('content'); ?>
    <div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Properties</h1>
                <ul class="bread-crumb clearfix">
                    <!-- <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Properties</li> -->
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
                                    <!-- <li><a href="#">Apartment</a>,</li>
                                    <li><a href="#">Bar</a>,</li>
                                    <li><a href="#">House</a>,</li> -->
                                </ul>
                                <h3><a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" style="color: #FFFFFF"><?php echo e($ad->title); ?></a></h3>
                                <div class="lucation" style="color: #FFFFFF"><i class="la la-map-marker"></i><?php echo e($ad->adress); ?></div>
                                <ul class="property-info clearfix">
                                    <li style="color: #FFFFFF"><i class="flaticon-dimension"></i> <?php echo e($ad->area); ?> <?php echo e($ad->unit); ?><sup><a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="Marla: (Some Values)"> </a></sup></li>
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

                <!-- Load More -->
                <!-- <div class="load-more-btn text-center">
                    <a href="#" class="theme-btn btn-style-two">Load More</a>
                </div> -->
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



<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/blackfire/Desktop/proj_05/defenceEstate1 (copy)/resources/views/ads/index.blade.php ENDPATH**/ ?>