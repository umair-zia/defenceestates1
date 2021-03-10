

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

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="upper-info-box">
                <div class="row">
                    <div class="about-property col-lg-8 col-md-12 col-sm-12">
                        <h2 style="color: #FFFFFF"><?php echo e($ad->title); ?></h2>
                        <div class="location" style="color: #FFFFFF;"><i class="la la-map-marker"></i><?php echo e($ad->adress); ?></div>
                        <ul class="property-info clearfix">
                            <li style="color: #FFFFFF;"><i class="flaticon-dimension"></i> <?php echo e($ad->area); ?> <?php echo e($ad->unit); ?></li>
                            <li style="color: #FFFFFF;"><i class="flaticon-bed"></i> <?php echo e($ad->bedroom); ?> Bedrooms</li>
                            <li style="color: #FFFFFF;"><i class="flaticon-board"></i> <?php echo e($ad->kitchen); ?> Kitchen</li>
                            <li style="color: #FFFFFF;"><i class="flaticon-bathtub"></i> <?php echo e($ad->bathroom); ?> Bathroom</li>
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
                                    <?php if(isset($ad->image1)): ?>
                                    <li><a href="<?php echo e(asset('storage').'/'.$ad->image1); ?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo e(asset('storage').'/'.$ad->image1); ?>" alt=""></a></li>
                                    <?php endif; ?>
                                    <?php if(isset($ad->image2)): ?>
                                    <li><a href="<?php echo e(asset('storage').'/'.$ad->image2); ?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo e(asset('storage').'/'.$ad->image2); ?>" alt=""></a></li>
                                    <?php endif; ?>
                                    <?php if(isset($ad->image3)): ?>
                                    <li><a href="<?php echo e(asset('storage').'/'.$ad->image3); ?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo e(asset('storage').'/'.$ad->image3); ?>" alt=""></a></li>
                                    <?php endif; ?>
                                    <?php if(isset($ad->image4)): ?>
                                    <li><a href="<?php echo e(asset('storage').'/'.$ad->image4); ?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo e(asset('storage').'/'.$ad->image4); ?>" alt=""></a></li>
                                    <?php endif; ?>
                                    
                                </ul>

                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <?php if(isset($ad->image1)): ?>
                                    <li><img src="<?php echo e(asset('storage').'/'.$ad->image1); ?>" alt=""></li>
                                    <?php endif; ?>
                                    <?php if(isset($ad->image2)): ?>
                                    <li><img src="<?php echo e(asset('storage').'/'.$ad->image2); ?>" alt=""></li>
                                    <?php endif; ?>
                                    <?php if(isset($ad->image3)): ?>
                                    <li><img src="<?php echo e(asset('storage').'/'.$ad->image3); ?>" alt=""></li>
                                    <?php endif; ?>
                                    <?php if(isset($ad->image4)): ?>
                                    <li><img src="<?php echo e(asset('storage').'/'.$ad->image4); ?>" alt=""></li>
                                    <?php endif; ?>
                                    
                                </ul>
                            </div>
                        </div>

                        <!-- Property Features -->
                        <div class="property-features">
                            <h3 style="color: #FFFFFF;">Essential Information</h3>
                            <ul class="list-style-one">
                                <li style="color: #FFFFFF;">Price: Rs. <?php echo e($ad->demand); ?></li>
                                <li style="color: #FFFFFF;">For: <?php echo e($ad->status); ?></li>
                                <li style="color: #FFFFFF;">Property Types: <?php echo e($ad->type); ?></li>
                                <li style="color: #FFFFFF;">Area: <?php echo e($ad->area); ?> <?php echo e($ad->unit); ?></li>
                                <li style="color: #FFFFFF;">Country: Pakistan </li>
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


                        <!-- Nearest Places -->
                        

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
                                        
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 text-right">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit now</button>
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
                            <div class="sidebar-title" style="background: #2f4f4f"><h3>Search Properties</h3></div>
                            <!-- Property Search Form -->
                            <div class="property-search-form style-three">
                                <form method="post" action="#">
                                    <div class="row no-gutters">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Location</option>
                                                <option>Lahore</option>
                                                <option>Islamabad</option>
                                                <option>Karachi</option>
                                                <option>Multan</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Property Type</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Industrial</option>
                                                <option>Apartments</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Property Status</option>
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                            </select>
                                        </div>



                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Form -->
                        </div>

                         <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title" style="background: #2f4f4f"><h3>Category Properties</h3></div>
                            <ul class="cat-list">
                                <li><a href="#">Apartments <span>22</span></a></li>
                                <li><a href="#">Villas <span>45</span></a></li>
                                <li><a href="#">Open Houses <span>62</span></a></li>
                                <li><a href="#">Offices <span>70</span></a></li>
                                <li><a href="#">Residentals <span>90</span></a></li>
                                <li><a href="#">Co-Working <span>65</span></a></li>
                                <li><a href="#">Flat <span>48</span></a></li>
                                <li><a href="#">Cottage <span>24</span></a></li>
                            </ul>
                        </div>

                        <!-- Recent Properties -->
                        <div class="sidebar-widget recent-properties">
                            <div class="sidebar-title" style="background: #2f4f4f"><h3>Recent Properties</h3></div>
                            <div class="widget-content">
                            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="blog-detail.html">
                                            <img src="<?php echo e(asset('storage').'/'.$ad->image1); ?>" alt="">
                                            <span class="status"><?php echo e($ad->status); ?></span>
                                        </a>
                                    </div>
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
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\laravel\defenceEstate\resources\views/ads/show.blade.php ENDPATH**/ ?>