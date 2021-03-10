<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Defence Estate</title>
<!-- Stylesheets -->
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('plugins/revolution/css/settings.css')); ?>" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="<?php echo e(asset('plugins/revolution/css/layers.css')); ?>" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="<?php echo e(asset('plugins/revolution/css/navigation.css')); ?>" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="<?php echo e(asset('css/color-themes/default-theme.css')); ?>" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<script src="http://code.jquery.com/jquery-latest.js"></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="la la-home"></i> A-45 Commercial, Phase 6 DHA,
                                Lahore, Pakistan</li>
                            <li><i class="la la-envelope-o"></i><a href="#">info@defenceestate.com
                            </a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <div class="btn-box"><a href="<?php echo e(route('admin.index')); ?>" class="theme-btn btn-style-four" style="background: #2f4f4f;">Submit Property</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="main-box" style="background: linear-gradient(to bottom, #2f4f4f 0%,#2f4f4f 100%)">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('images/2.png')); ?>" alt="" title=""></a></div>
                        </div>

                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                                        <li><a href="<?php echo e(route('about')); ?>" style="color: #FFFFFF;">About</a></li>
                                        <li><a href="<?php echo e(route('ads.index')); ?>" style="color: #FFFFFF;">Properties</a></li>
                                        <li><a href="<?php echo e(route('files')); ?>" style="color: #FFFFFF;">Files</a></li>
                                        
                                        <li><a href="<?php echo e(route('contact')); ?>" style="color: #FFFFFF;">Contact Us</a></li>
                                        <li class="dropdown"><a href="#" style="color: #FFFFFF;">Maps</a>
                                            <ul>
                                                <li><a href="<?php echo e(route('maps')); ?>">Maps</a></li>
                                                <li><a href="https://maps.dhalahore.org/" target="_blank" style="color: #FFFFFF;">GIS Map</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo e(route('forms')); ?>" style="color: #FFFFFF;">Forms</a></li>


                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->

                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">
                                <!--Search Box-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header"style="background: linear-gradient(to bottom, #2e2e2e 0%,#2e2e2e 100%);">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="<?php echo e(route('index')); ?>" title=""><img src="<?php echo e(asset('images/2.png')); ?>" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="<?php echo e(route('index')); ?>" style="background-color: transparent">Home</a></li>
                                <li><a href="<?php echo e(route('about')); ?>" style="color: #FFFFFF;background-color: transparent">About</a></li>
                                <li><a href="<?php echo e(route('ads.index')); ?>" style="color: #FFFFFF;background-color: transparent">Properties</a></li>
                                <li><a href="<?php echo e(route('files')); ?>" style="color: #FFFFFF; background-color: transparent">Files</a></li>

                                <li><a href="<?php echo e(route('contact')); ?>" style="color: #FFFFFF;background-color: transparent">Contact Us</a></li>
                                <li class="dropdown"><a href="#" style="color: #FFFFFF; background-color: transparent">Maps</a>
                                    <ul>
                                        <li><a href="<?php echo e(route('maps')); ?>">Maps</a></li>
                                        <li><a href="https://maps.dhalahore.org/" target="_blank" style="color: #FFFFFF;">GIS Map</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="<?php echo e(route('forms')); ?>" style="color: #FFFFFF; background-color: transparent">Forms</a></li>

                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" src="images/main.jpg">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-text-align="center"
                        data-hoffset="['10','50','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'>
                            <div class="content-box">
                                
                            </div>
                        </div>
                    </li>

                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat"  data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" src="images/main2.jpg">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-text-align="center"
                        data-hoffset="['10','50','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'>
                            <div class="content-box">
                                
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
 
    <!-- Property Search Section -->
    <section class="property-search-section" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="property-search-tabs tabs-box">
                <ul class="tab-buttons">
                    <li data-tab="#sale" class="tab-btn active-btn">Sale</li>
                    <li data-tab="#rent" class="tab-btn">Rent</li>
                </ul>

                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="sale">
                        <div class="property-search-form">
                            
                            <form action="/find" method="POST" role="search">
                                
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" value="Sale" name="status">

                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">city</label>
                                        <select class="custom-select-box" name="city">
                                            <option>DHA Lahore</option>
                                            <option>DHA Raya(Lahore)</option>
                                            <option>DHA Multan</option>
                                            <option>DHA Bahawalpur</option>
                                            <option>DHA Gujranwala</option>
                                            <option>DHA Peshawar</option>
			                                <option>DHA Quetta</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                            <label style="color: #FFFFFF">Category</label>
			                                <select name="category" id="mySelect" onchange="myFunction()" >
		                                        <option value="">Category</option>
		                                        <option value="Homes">Homes</option>
		                                        <option value="Commercial">Commercial</option>
                                                <option value="Appartment">Appartment</option>
		                                        <option value="Plots">Plots</option>
                                                <option value="Farm House">Farm House</option>
		                                    </select>
			                        </div>
                                                
                                                
                                            
									<!-- Form Group -->
									<div class="form-group col-lg-3 col-md-6 col-sm-12">
										<label style="color: #FFFFFF">Property Type</label>
										    <select  id="status" name="type" >
												<option>Property Type</option>
                                                    <!--home-->       
										    </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Phase</label>
                                        <input type="text"  placeholder="Phase" name="phase" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Bedrooms</label>
                                        <input type="text"  placeholder="Bedrooms" name="bedroom" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Price from</label>
                                        <input type="text"  placeholder="Price From" name="priceFrom" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Price To</label>
                                        <input type="text"  placeholder="Price To" name="priceTo" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two" style="background: #2f4f4f">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Tab -->
                    <div class="tab" id="rent">
                        <div class="property-search-form">
                            <form action="/find" method="POST" role="search">
                                
                                <?php echo e(csrf_field()); ?>

                            
                                <input type="hidden" value="Rent" name="status">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">city</label>
                                        <select class="custom-select-box" name="city">
                                            <option>DHA Lahore</option>
                                            <option>DHA Raya(Lahore)</option>
                                            <option>DHA Multan</option>
                                            <option>DHA Bahawalpur</option>
                                            <option>DHA Gujranwala</option>
                                            <option>DHA Peshawar</option>
			                                <option>DHA Quetta</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                            <label style="color: #FFFFFF">Category</label>
			                                <select name="category"  id="mySelect1" onchange="myFunction1()" >
		                                        <option value="">Category</option>
		                                        <option value="Homes">Homes</option>
		                                        <option value="Commercial">Commercial</option>
                                                <option value="Appartment">Appartment</option>
		                                        <option value="Plots">Plots</option>
                                                <option value="Farm House">Farm House</option>
		                                    </select>
			                        </div>
                                                
                                                
                                                
									<!-- Form Group -->
									<div class="form-group col-lg-3 col-md-6 col-sm-12">
										<label style="color: #FFFFFF">Property Type</label>
										    <select id="status1" name="type" >
												<option>Property Type</option>
                                                    <!--home-->       
										    </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Phase</label>
                                        <input type="text"  placeholder="Phase" name="phase" required>
                                    </div>                 

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Price from</label>
                                        <input type="text"  placeholder="Price From" name="priceFrom" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Price To</label>
                                        <input type="text"  placeholder="Price To" name="priceTo" required>
                                    </div>    

                                    <!-- Form Group -->
									<div class="form-group col-lg-3 col-md-6 col-sm-12">
										<div class="range-slider-one clearfix">
											<label style="color: #FFFFFF">Land Area</label>
											<input type="text"  placeholder="Area" name="area" required>
									    </div>
									</div>

									<!-- Form Group -->
									<div class="form-group col-lg-3 col-md-6 col-sm-12">
										<div class="range-slider-one clearfix">
											<label style="color: #FFFFFF">Unit</label>
												<select class="custom-select-box" name="unit" placeholder="Unit" required>
                                                    <option>Unit</option>
													<option>Square Feet</option>
													<option>Square Yards</option>
													<option>Square Meters</option>
													<option>Marla</option>
													<option>Kanal</option>
												</select>
										</div>
									</div>              

                                    

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="theme-btn btn-style-two" style="background: #2f4f4f">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Property Search Section -->

    <!-- Recent Section -->
    <section class="property-section" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2 style="color: #FFFFFF">RECENT PROPERTIES</h2>
            </div>

            <div class="row">


                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Property Block -->
                <div class="property-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                        <?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if( $loop->iteration == 1): ?>
                                <?php if(isset($img)): ?>
                                    <div class="image-box">
                                        <a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>">
                                            <figure class="image"><img style="height: 280px" src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt=""></figure>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="lower-content">
                            
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
                            

                              
                                </li>
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

            <div class="load-more-btn text-center">
                <a href="<?php echo e(route('ads.index')); ?>" class="theme-btn btn-style-two" style="background: #2f4f4f">Load More</a>
            </div>

        </div>
    </section>
    <!--End Property Section -->

    <!-- Recent Commercial Section -->
    <section class="property-section" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND COMMERCIAL PROPERTY</span>
                <h2 style="color: #FFFFFF">RECENT COMMERCIAL PROPERTIES</h2>
            </div>

            <div class="row">
                <?php $__currentLoopData = $Cads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Property Block -->
                    <div class="property-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                            <?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( $loop->iteration == 1): ?>
                                    <?php if(isset($img)): ?>
                                        <div class="image-box">
                                            <a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>">
                                                <figure class="image"><img style="height: 280px" src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt=""></figure>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="lower-content">
                                
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
                                
    
                                  
                                    </li>
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

            <div class="load-more-btn text-center">
                <a href="<?php echo e(route('ads.index')); ?>" class="theme-btn btn-style-two" style="background: #2f4f4f">Load More</a>
            </div>
        </div>
    </section>
    <!--End Commercial Property Section -->

    <!-- Recent Plot Section -->
    <section class="property-section" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE</span>
                <h2 style="color: #FFFFFF">RECENT RESIDENTIAL PROPERTIES</h2>
            </div>

            <div class="row">
                <?php $__currentLoopData = $Rads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Property Block -->
                    <div class="property-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                            <?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( $loop->iteration == 1): ?>
                                    <?php if(isset($img)): ?>
                                        <div class="image-box">
                                            <a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>">
                                                <figure class="image"><img style="height: 280px" src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt=""></figure>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="lower-content">
                                
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
                                
    
                                  
                                    </li>
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

            <div class="load-more-btn text-center">
                <a href="<?php echo e(route('ads.index')); ?>" class="theme-btn btn-style-two" style="background: #2f4f4f">Load More</a>
            </div>
        </div>
    </section>
    <!--End Plot Section -->

    <!-- About Us -->
    <section class="about-us" style="background-color: #777777;">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">THE BEST PLACE TO FIND THE HOUSE YOU WANT</span>
                            <h2>WELL TO DEFENCE REAL ESTATE</h2>
                        </div>

                        <div class="text" style="color: #FFFFFF"><strong>DEFENCE REAL ESTATE</strong> is the best place for buying beatiful apartments, houses, flats in Pakistan within the best prices.</div>

                        <div class="row features">
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-1"></span>
                                    <h4><a href="#">Buy Property</a></h4>
                                    <div class="text" style="color: #FFFFFF">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="#">Rent Property</a></h4>
                                    <div class="text" style="color: #FFFFFF">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-5"></span>
                                    <h4><a href="#">Real Estate Kit</a></h4>
                                    <div class="text" style="color: #FFFFFF">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-apartment"></span>
                                    <h4><a href="#">Sale Property</a></h4>
                                    <div class="text" style="color: #FFFFFF">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image"><img src="<?php echo e(asset('images/property/6.jpg')); ?>" alt=""></figure>
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon la la-play" aria-hidden="true"></i><span class="ripple"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!--Popular Places Section-->
    <section class="popular-places-section" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR DREAM HOUSE IN YOUR CITY</span>
                <h2 style="color: #FFFFFF">MOST POPULAR PLACES</h2>
            </div>

            <div class="masonry-items-container clearfix">
                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/4.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <h3 class="place"><a href="<?php echo e(route('findByLocation',['Lahore'])); ?>">Lahore</a></h3>
                            <div class="view-all"><a href="<?php echo e(route('findByLocation',['Lahore'])); ?>">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/7.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <h3 class="place"><a href="<?php echo e(route('findByLocation',['Islamabad'])); ?>">Islamabad</a></h3>
                            <div class="view-all"><a href="<?php echo e(route('findByLocation',['Islamabad'])); ?>">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/6.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <h3 class="place"><a href="<?php echo e(route('findByLocation',['Karachi'])); ?>">Karachi</a></h3>
                            <div class="view-all"><a href="<?php echo e(route('findByLocation',['Karachi'])); ?>">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/14.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <h3 class="place"><a  href="<?php echo e(route('findByLocation',['Bahawalpur'])); ?>">Bahawalpur</a></h3>
                            <div class="view-all"><a href="<?php echo e(route('findByLocation',['Bahawalpur'])); ?>">View All</a></div>
                        </div>
                    </div>
                </div>


                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/12.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <h3 class="place"><a href="<?php echo e(route('findByLocation',['Peshawar'])); ?>">Peshawar</a></h3>
                            
                            <div class="view-all"><a href="<?php echo e(route('findByLocation',['Peshawar'])); ?>">View All</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More -->
            <div class="load-more-btn text-center">
                <a href="<?php echo e(route('ads.index')); ?>" class="theme-btn btn-style-two" style="background: #2f4f4f">Load More</a>
            </div>
        </div>
    </section>
    <!--Portfolio Section-->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(<?php echo e(asset('images/main3.jpg')); ?>);">
        <div class="auto-container">
            <div class="clearfix">
                <!-- Title Column -->
                <div class="title-column">
                    <div class="sec-title light">
                        <span class="title">IN FEW SECONDS WITH WILLES</span>
                        <h2>BUY OR SALE YOUR HOUSE</h2>
                    </div>
                </div>

                <!-- Button Column -->
                <div class="button-column">
                    <a href="<?php echo e(route('ads.create')); ?>" class="theme-btn btn-style-three">SUBMIT PROPERTY</a>
                    <a href="<?php echo e(route('ads.index')); ?>" class="theme-btn btn-style-one" style="background: #2f4f4f">BROWSE PROPERTY</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Agents Section -->
    <div class="agents-section" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">MEET OUR PROFESSIONAL AGENTS</span>
                <h2 style="color: #FFFFFF">MEET OUR AGENTS</h2>
            </div>

            <div class="agents-carousel owl-carousel owl-theme">
                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/team-1.jpg')); ?>" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">ABD</a></h4>
                            <span class="designation" style="color: #FFFFFF">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/team-1.jpg')); ?>" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">ABD</a></h4>
                            <span class="designation" style="color: #FFFFFF">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/team-1.jpg')); ?>" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">ABD</a></h4>
                            <span class="designation" style="color: #FFFFFF">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/team-1.jpg')); ?>" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">ABD</a></h4>
                            <span class="designation" style="color: #FFFFFF">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/team-1.jpg')); ?>" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">ABD</a></h4>
                            <span class="designation" style="color: #FFFFFF">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/team-1.jpg')); ?>" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="#" style="color: #FFFFFF">ABD</a></h4>
                            <span class="designation" style="color: #FFFFFF">Real Estate Agent</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Agents Section -->

    <!--Clients Section-->
    
    <!--End Clients Section-->

    <!-- News Section -->
    
    <!--End News Section -->

    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(../images/icons/footer-bg.png);">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row">
                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-logo">
                            <figure class="image"><a href="<?php echo e(asset('images/2.png')); ?>"><img src="<?php echo e(asset('images/2.png')); ?>" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                        
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="social-links">
                            <ul class="social-icon-two">
                                <li><a href="https://www.facebook.com/DefenceEstateDHALahore/" target="_blank"><span class="la la-facebook-f"></span></a></li>
                                <li><a href="https://twitter.com/Defence_Estate" target="_blank"><span class="la la-twitter"></span></a></li>
                                <li><a href="https://www.instagram.com/defence_estate/" target="_blank"><span class="la la-instagram"></span></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=923248809070" target="_blank"><span class="la la-whatsapp"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
 

                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget cities-widget">
                                    <h2 class="widget-title">PROPERTY CITIES</h2>
                                    <div class="widget-content">
                                        <ul class="list clearfix">
                                            <li><a  href="<?php echo e(route('findByLocation',['Karachi'])); ?>">Karachi</a></li>
                                            <li><a  href="<?php echo e(route('findByLocation',['Multan'])); ?>">Multan</a></li>
                                            <li><a  href="<?php echo e(route('findByLocation',['Gujranwala'])); ?>">Gujranwala</a></li>
                                            <li><a  href="<?php echo e(route('findByLocation',['Lahore'])); ?>">Lahore</a></li>
                                            <li><a  href="<?php echo e(route('findByLocation',['Bahawalpur'])); ?>">Bahawalpur</a></li>
                                            <li><a  href="<?php echo e(route('findByLocation',['Peshawar'])); ?>">Peshawar</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget popular-posts">
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">


                            <!--Footer Column-->
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Get in Touch</h2>
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li><span class="la la-map-marker"></span><address>A-45 Commercial (Opposite DHA Office), Phase 6, DHA Lahore, Pakistan</address> </li>
                                            <li><span class="la la-phone"></span><a href="tel:+92 42 111-127-127">+92 42 111-127-127</a></li>
                                            <li><span class="la la-envelope"></span><a href="mailto:info@defenceestate.com">info@defenceestate.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <!--Scroll to top-->
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>

                <div class="inner-container clearfix">
                    

                    <div class="inner-container clearfix">
                    <div class="copyright-text">
                    <p class="copyright-text" style="color: white;">© 2020 <a href="http://defenceestate.com/" style="color: #5ddaff">Defence Estate</a> All right reserved.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>
<!--End pagewrapper-->

<script>
function myFunction() {
	
  var x = document.getElementById("mySelect").value;


  if(x === "Homes"){
	document.getElementById("status").options[0]=new Option("Full House","Full House");
	document.getElementById("status").options[1]=new Option("Flat","Flat");

  }
  else if(x === "Commercial"){
	document.getElementById("status").options[0]=new Option("Commercial Building (Full)","Commercial Building (Full)");
	document.getElementById("status").options[1]=new Option("Shop","Shop");
	document.getElementById("status").options[2]=new Option("Factory","Factory");
  }
  else if(x === "Plots"){
	var select = document.getElementById("status");
		var length = select.options.length;
		for (i = length-1; i >= 0; i--) {
		select.options[i] = null;
		}
	document.getElementById("status").options[0]=new Option("Residential Plot","Residential Plot");
	document.getElementById("status").options[1]=new Option("Commercial Plot","Commercial Plot");

  }
  else if(x === "Farm House"){
	var select = document.getElementById("status");
		var length = select.options.length;
		for (i = length-1; i >= 0; i--) {
		select.options[i] = null;
		}
	document.getElementById("status").options[0]=new Option("Farm House","Farm House");
	document.getElementById("status").options[1]=new Option("Farm-Plot","Farm-Plot");
  }

  else if(x === "Appartment"){
	var select = document.getElementById("status");
		var length = select.options.length;
		for (i = length-1; i >= 0; i--) {
		select.options[i] = null;
		}
	document.getElementById("status").options[0]=new Option("Appartment","Appartment");
	
  }
  else if(x === ""){
	var select = document.getElementById("status");
		var length = select.options.length;
		for (i = length-1; i >= 0; i--) {
		select.options[i] = null;
		}
	
	
  }
}
</script>

<script>
    function myFunction1() {
        
    var x = document.getElementById("mySelect1").value;


    if(x === "Homes"){
        document.getElementById("status1").options[0]=new Option("Full House","Full House");
        document.getElementById("status1").options[1]=new Option("Flat","Flat");
        document.getElementById("status1").options[2]=new Option("Upper Portion","Upper Portion");
        document.getElementById("status1").options[3]=new Option("Lower Portion","Lower Portion");
        document.getElementById("status1").options[4]=new Option("Room","Room");
        document.getElementById("status1").options[5]=new Option("Seperate Gate","Seperate Gate");
        document.getElementById("status1").options[6]=new Option("Upper Lock Lower Portion","Upper Lock Lower Portion");
        document.getElementById("status1").options[7]=new Option("Lower Lock Upper Portion","Lower Lock Upper Portion");

    }
    else if(x === "Commercial"){
        document.getElementById("status1").options[0]=new Option("Commercial Building (Full)","Commercial Building (Full)");
        document.getElementById("status1").options[1]=new Option("Shop","Shop");
        document.getElementById("status1").options[2]=new Option("Factory","Factory");
        document.getElementById("status1").options[3]=new Option("Building (Basement)","Building (Basement)");
        document.getElementById("status1").options[4]=new Option("Building (Ground Floor)","Building (Ground Floor)");
        document.getElementById("status1").options[5]=new Option("Building (Mazinine)","Building (Mazinine)");
        document.getElementById("status1").options[6]=new Option("Building (1st Floor)","Building (1st Floor)");
        document.getElementById("status1").options[7]=new Option("Building (2nd Floor)","Building (2nd Floor)");
        document.getElementById("status1").options[8]=new Option("Building (3rd Floor)","Building (3rd Floor)");
        document.getElementById("status1").options[9]=new Option("Building (4th Floor)","Building (4th Floor)");
    }
    else if(x === "Plots"){
        var select = document.getElementById("status1");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
        document.getElementById("status1").options[0]=new Option("Residential Plot","Residential Plot");
        document.getElementById("status1").options[1]=new Option("Commercial Plot","Commercial Plot");

    }
    else if(x === "Farm House"){
        var select = document.getElementById("status1");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
        document.getElementById("status1").options[0]=new Option("Farm House","Farm House");
        document.getElementById("status1").options[1]=new Option("Farm-Plot","Farm-Plot");
    }

    else if(x === "Appartment"){
        var select = document.getElementById("status1");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
        document.getElementById("status1").options[0]=new Option("Appartment","Appartment");
        
    }
    else if(x === ""){
        var select = document.getElementById("status1");
            var length = select.options.length;
            for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
            }
        
        
    }
    }
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>


<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<!--Revolution Slider-->
<script src="<?php echo e(asset('plugins/revolution/js/jquery.themepunch.revolution.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/jquery.themepunch.tools.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.migration.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/revolution/js/extensions/revolution.extension.video.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/main-slider-script.js')); ?>"></script>
<!--End Revolution Slider-->
<script src="<?php echo e(asset('js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.fancybox.js')); ?>"></script>
<script src="<?php echo e(asset('js/owl.js')); ?>"></script>
<script src="<?php echo e(asset('js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('js/isotope.js')); ?>"></script>
<script src="<?php echo e(asset('js/appear.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<!-- Color Setting -->
<script src="<?php echo e(asset('js/color-settings.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Umair Zia\Documents\defence\defenceEstate1\resources\views/index.blade.php ENDPATH**/ ?>