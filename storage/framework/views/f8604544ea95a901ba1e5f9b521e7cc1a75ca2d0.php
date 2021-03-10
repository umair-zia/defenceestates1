

<?php $__env->startSection('content'); ?>
<div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo e(asset('images/main3.jpg')); ?>);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Property Detail</h1>
                <ul class="bread-crumb clearfix">
                    <!-- <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Properties</li>
                    <li>Property Detail</li> -->
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <?php if(session()->has('message')): ?>
    
    <div class="alert <?php echo e(session('alert') ?? 'alert-info'); ?>">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Your listing</strong> <?php echo e(session('message')); ?>

        
    </div>
    <?php endif; ?>
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="upper-info-box">
                <div class="row">
                    <div class="about-property col-lg-8 col-md-12 col-sm-12">
                        <h2 style="color: #FFFFFF"><?php echo e($ad->title); ?></h2>
                        <div class="location" style="color: #FFFFFF;"><i class="la la-map-marker"></i><?php echo e($ad->adress); ?></div>
                        <ul class="property-info clearfix">
                            <?php if($ad->unit == 'Marla'): ?>
                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($ad->area); ?> Marla
                                <?php else: ?>
                                <?php if($ad->unit != 'Marla'): ?>
                                <?php if($ad->unit == 'Square Feet'): ?>
                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($ad->area/225, 2)); ?> Marla
                                <sup>
                                    <a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                    </a>
                                </sup>
                                <?php endif; ?>
                                <?php if($ad->unit == 'Square Yards'): ?>
                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($ad->area/25, 2)); ?> Marla
                                <sup>
                                    <a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                    </a>
                                </sup>
                                <?php endif; ?>
                                <?php if($ad->unit == 'Square Meters'): ?>
                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($ad->area/20.9, 2)); ?> Marla
                                <sup>
                                    <a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                    </a>
                                </sup>
                                <?php endif; ?>
                                <?php if($ad->unit == 'Kanal'): ?>
                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($ad->area*20); ?> Marla
                                <sup>
                                    <a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                    </a>
                                </sup>
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php endif; ?>

                            <li style="color: #FFFFFF;"><i class="flaticon-dimension"></i> <?php echo e($ad->phase); ?></li>
                        </ul>
                    </div>
                    <div class="price-column col-lg-4 col-md-12 col-sm-12">
                        <span class="title" style="color: #FFFFFF;">Start From</span>
                        <div class="price">Rs. <?php echo e($ad->demand); ?></div>
                        <span class="status" style="color: #FFFFFF;">For <?php echo e($ad->status); ?></span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="property-detail">
                        <div class="upper-box">
                            <div class="carousel-outer">
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(isset($img)): ?>
                                    <li>
                                        <a href="<?php echo e(asset('storage/properties').'/'.$img); ?>" class="lightbox-image" title="Image Caption Here"><img style="height: 510px" src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt=""></a></li>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(isset($img)): ?>
                                    <li>
                                        <img style="height: 100px" src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt="">
                                    </li>
                                    <?php endif; ?>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                            </div>
                        </div>

                        <!-- Property Features -->
                        <div class="property-features">
                            <h3 style="color: #FFFFFF;">Essential Information</h3>
                            <ul class="list-style-one">
                                <li style="color: #FFFFFF;">Price: Rs. <?php echo e($ad->demand); ?></li>
                                <li style="color: #FFFFFF;">For: <?php echo e($ad->status); ?></li>
                                <li style="color: #FFFFFF;">Property Type: <?php echo e($ad->type); ?></li>
                                <?php if($ad->unit == 'Marla'): ?>
                                <li style="color: #FFFFFF"><?php echo e($ad->area); ?> Marla
                                    <?php else: ?>
                                    <?php if($ad->unit != 'Marla'): ?>
                                    <?php if($ad->unit == 'Square Feet'): ?>
                                <li style="color: #FFFFFF"><?php echo e(round($ad->area/225, 2)); ?> Marla
                                    <sup>
                                        <a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                        </a>
                                    </sup>
                                    <?php endif; ?>
                                    <?php if($ad->unit == 'Square Yards'): ?>
                                <li style="color: #FFFFFF"><?php echo e(round($ad->area/25, 2)); ?> Marla
                                    <sup>
                                        <a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                        </a>
                                    </sup>
                                    <?php endif; ?>
                                    <?php if($ad->unit == 'Square Meters'): ?>
                                <li style="color: #FFFFFF"><?php echo e(round($ad->area/20.9,2)); ?> Marla
                                    <sup>
                                        <a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                        </a>
                                    </sup>
                                    <?php endif; ?>
                                    <?php if($ad->unit == 'Kanal'): ?>
                                <li style="color: #FFFFFF"><?php echo e($ad->area*20); ?> Marla
                                    <sup>
                                        <a class="la la-info-circle" data-toggle="popover" title="Area Conversion" data-content="<?php echo e($ad->unit); ?>: (<?php echo e($ad->area); ?>)">
                                        </a>
                                    </sup>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php endif; ?>

                                <li style="color: #FFFFFF;">City: <?php echo e($ad->city); ?></li>
                                <li style="color: #FFFFFF;">Kitchen: <?php echo e($ad->kitchen); ?> </li>
                                <li style="color: #FFFFFF;">Bedrooms: <?php echo e($ad->bedroom); ?></li>
                                <li style="color: #FFFFFF;">Bathrooms: <?php echo e($ad->bathroom); ?></li>
                            </ul>
                        </div>

                        <!-- Property Features -->
                        <div class="property-features">
                            <h3 style="color: #FFFFFF;">Home Amenities</h3>
                            <ul class="list-style-one">
                                <?php $__currentLoopData = $ad->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li style="color: #FFFFFF;"><?php echo e($feature); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>

                        <div class="lower-content">
                            <h3 style="color: #FFFFFF;">Description</h3>
                            <p style="color: #FFFFFF;"><?php echo e($ad->detail); ?></p>

                            <!-- <blockquote style="color: #FFFFFF;">Main bath has been remodeled including a large shower with a tiled sitting bench. Back yard patio includes no-maintenance cover with built in lights. extra storage inside and out.</blockquote>
                            <p style="color: #FFFFFF;">Short sale approved at Rs. 440,000!! home with remodeled kitchen, upgraded cabinets and countertops, open floorplan with spacious layout including a huge separate family room. New windows and newer roof, new airconditioning, fully permitted additonal square footage to the original home. This is a beauty. Huge master with separate sitting/dressing area that would make a perfect nursery.Bonus walk in storage closet in family room.</p> -->
                        </div>

                        <div class="lower-content">
                            <h3 style="color: #FFFFFF;">Contact Us</h3>
                            <ul class="list-style-one">
                                <li style="color: #fff;"><strong>Name: </strong><?php echo e($ad->name); ?></li>
                                <li style="color: #fff;"><strong>Phone No: </strong><?php echo e($ad->phone); ?></li>
                                <li style="color: #fff;"><strong>E-mail: </strong><?php echo e($ad->email); ?></li>
                            </ul>

                            <!-- <a type="button" class="theme-btn btn-style-one" href="https://api.whatsapp.com/send?phone=923248809070" target="_blank" style="margin-bottom:15px; background-color:green;"><span class="la la-whatsapp" style="font-size: 15px;"></span> Whatsapp</a> -->

                        </div>


                        <!-- Nearest Places -->
                        <!-- <div class="nearest-places">
                            <h3 style="color: #FFFFFF;">Near By Place</h3>
                            <div class="outer-box clearfix">
                                <div class="places-column">
                                    <ul class="places-list">
                                        <li>
                                            <strong style="color: #FFFFFF;">City Center</strong>
                                            <div class="text" style="color: #FFFFFF;"><b style="color: #FFFFFF;">City Stars Mall</b> High Street, Lahore, Pakistan <span style="color: #FFFFFF;">2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>School</strong>
                                            <div class="text" style="color: #FFFFFF;"><b style="color: #FFFFFF;">LGS,</b> Main Street, Lahore, Pakistan <span style="color: #FFFFFF;">2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>Restaurant</strong>
                                            <div class="text" style="color: #FFFFFF;"><b style="color: #FFFFFF;"> Resturant & Cafe, </b>Street, Lahore, Pakistan <span style="color: #FFFFFF;">2.5 km</span></div>
                                            <div class="text" style="color: #FFFFFF;"><b style="color: #FFFFFF;"> Resturant, </b> Street, Lahore, Pakistan<span style="color: #FFFFFF;">2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>Bank</strong>
                                            <div class="text" style="color: #FFFFFF;"><b style="color: #FFFFFF;">United Bank</b> DHA, Lahore, Pakistan <span style="color: #FFFFFF;">2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>Airport</strong>
                                            <div class="text" style="color: #FFFFFF;"><b style="color: #FFFFFF;"> Allama Iqbal International Airport</b> Ring Road, Lahore, Pakistan <span style="color: #FFFFFF;">2.5 km</span></div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="map-column">
                                    <div class="map-outer"> -->
                        <!-- Map Canvas-->
                        <!-- <div class="map-canvas"
                                            data-zoom="12"
                                            data-lat="-37.817085"
                                            data-lng="144.955631"
                                            data-type="roadmap"
                                            data-hue="#ffc400"
                                            data-title="Envato"
                                            data-icon-path="images/icons/map-marker.png"
                                            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Review Box -->
                        <div class="review-area">
                            <!--Reviews Container-->
                            <div class="reviews-container">
                                <h3 style="color: #FFFFFF;">Reviews For Customer</h3>
                                <?php $__currentLoopData = $ad->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--Reviews-->
                                <article class="review-box">
                                    <div class="thumb-box">
                                        <figure class="thumb"><img src="images/resource/review-thumb-1.jpg" alt=""></figure>
                                        
                                    </div>
                                    <div class="content-box">
                                        <div class="name" style="color: #FFFFFF;"><?php echo e($comment->fullName); ?></div>
                                        <span class="date" style="color: #FFFFFF;"><i class="la la-calendar"></i> <?php echo e($comment->updated_at); ?></span>
                                        
                                        <div class="text" style="color: #FFFFFF;"><?php echo e($comment->msg); ?></div>
                                    </div>
                                </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                        </div>

                        <!-- Review Comment Form -->
                        <div class="review-comment-form">
                            <h3 style="color: #FFFFFF;">Leave A Review</h3>
                            <form action="<?php echo e(route('Comments.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="fullName" placeholder="Full Name" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="msg" placeholder="Massage"></textarea>
                                    </div>
                                    <input type="hidden" name="postId" value="<?php echo e($ad->id); ?>">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                        <!-- <div class="rating-box">
                                            <div class="text" style="color: #FFFFFF;"> Your Rating:</div>
                                            <div class="rating"><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 text-right">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form" style="background: #2f4f4f">Submit now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!-- Categories -->
                        <div class="sidebar-widget search-properties">
                            <div class="sidebar-title" style="background: #2f4f4f">
                                <h3>Search Properties</h3>
                            </div>
                            <!-- Property Search Form -->
                            <div class="property-search-form style-three">
                                <form action="<?php echo e(route('sideSearch')); ?>" method="POST" role="search">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="row no-gutters">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box" name="city">
                                                <option>DHA Lahore</option>
                                                <option value="Raya(Lahore)">DHA Raya(Lahore)</option>
                                                <option value="Multan">DHA Multan</option>
                                                <option value="Bahawalpur">DHA Bahawalpur</option>
                                                <option value="Gujranwala">DHA Gujranwala</option>
                                                <option value="Peshawar">DHA Peshawar</option>
                                                <option value="Quetta">DHA Quetta</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box" name="category">
                                                <option>Property Type</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Appartment</option>
                                                <option>Plots</option>
                                                <option>Homes</option>
                                                <option>Farm House</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box" name="status">
                                                <option>Property Status</option>
                                                <option value="Rent">For Rent</option>
                                                <option value="Sale">For Sale</option>
                                            </select>
                                        </div>



                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one" style="background: #2f4f4f">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Form -->
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title" style="background: #2f4f4f">
                                <h3>Category Properties</h3>
                            </div>
                            <ul class="cat-list">
                                <li><a href="<?php echo e(route('findBytype',['Apartments'])); ?>">Apartments <span><?php echo e($ad->where('category', 'Apartments')->count()); ?></span></a></li>
                                <li><a href="<?php echo e(route('findBytype',['Commercial'])); ?>">Commercial <span><?php echo e($ad->where('category', 'Commercial')->count()); ?></span></a></li>
                                <li><a href="<?php echo e(route('findBytype',['Homes'])); ?>">Homes <span><?php echo e($ad->where('category', 'Homes')->count()); ?></span></a></li>
                                <li><a href="<?php echo e(route('findBytype',['Plots'])); ?>">Plots <span><?php echo e($ad->where('category', 'Plots')->count()); ?></span></a></li>
                                <li><a href="<?php echo e(route('findBytype',['Farm House'])); ?>">Farm House <span><?php echo e($ad->where('category', 'Farm House')->count()); ?></span></a></li>
                            </ul>
                        </div>

                        <!-- Recent Properties -->
                        <div class="sidebar-widget recent-properties">
                            <div class="sidebar-title" style="background: #2f4f4f">
                                <h3>Recent Properties</h3>
                            </div>
                            <div class="widget-content">
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Post -->
                                <article class="post">
                                    <?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if( $loop->iteration == 1): ?>
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>">
                                            <img src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt="">
                                            <span class="status"><?php echo e($ad->status); ?></span>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <span class="location"><?php echo e($ad->adress); ?></span>
                                    <h3><a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>"><?php echo e($ad->title); ?></a></h3>
                                    <div class="price">Rs <?php echo e($ad->demand); ?></div>
                                </article>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    <!-- Main Footer -->

    <!-- End Main Footer -->


</div>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\defence\defenceEstate1\resources\views/ads/show.blade.php ENDPATH**/ ?>