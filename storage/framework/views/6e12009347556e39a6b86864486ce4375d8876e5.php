

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
                    <div class="filters">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All</li>
                            <li class="filter" data-role="button" data-filter=".apprtment" style="color: #FFFFFF">Apartment</li>
                            <li class="filter" data-role="button" data-filter=".house" style="color: #FFFFFF">House</li>
                            <li class="filter" data-role="button" data-filter=".villa" style="color: #FFFFFF">Villa</li>
                            <li class="filter" data-role="button" data-filter=".form" style="color: #FFFFFF">Form</li>
                            <li class="filter" data-role="button" data-filter=".restaurent" style="color: #FFFFFF">Restaurant</li>
                        </ul>
                    </div>
                </div>

                <div class="filter-list row">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Property Block -->
                    <div class="property-block all mix house villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box"style="border: solid grey 3px; padding: 5px 5px;">
                            <div class="image-box">
                            <a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>">
                            <figure class="image"><img src="<?php echo e(asset('storage').'/'.$ad->image1); ?>" alt=""></figure>
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
                                    <li style="color: #FFFFFF"><i class="flaticon-dimension"></i> <?php echo e($ad->area); ?> <?php echo e($ad->unit); ?></li>
                                    <li style="color: #FFFFFF"><i class="flaticon-bed"></i> <?php echo e($ad->bedroom); ?> Bedrooms</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i> <?php echo e($ad->kitchen); ?> Kitchen</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-bathtub"></i> <?php echo e($ad->bathroom); ?> Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" class="theme-btn">More Detail</a></div>
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

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\defenceEstate1\defenceEstate1\resources\views/ads/index.blade.php ENDPATH**/ ?>