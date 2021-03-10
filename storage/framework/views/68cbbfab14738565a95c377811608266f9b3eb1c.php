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
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
        $("#divshow").click(function(){
            $("#mydiv").css("display","block");
        });
        $("#divhide").click(function(){
            $("#mydiv").css("display","none");
        });
    });
</script>
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
                        <div class="btn-box"><a href="<?php echo e(route('ads.create')); ?>" class="theme-btn btn-style-four">Submit Property</a></div>
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
                                        <!-- <li><a href="#" style="color: #FFFFFF;">Agents</a></li> -->
                                        <li><a href="<?php echo e(route('ads.index')); ?>" style="color: #FFFFFF;">Properties</a></li>
                                        <li class="dropdown"><a href="#" style="color: #FFFFFF;">Files</a>
                                            <ul>
                                                <li><a href="<?php echo e(route('files')); ?>">All Files</a></li>
                                                <li><a href="<?php echo e(route('maps')); ?>">Maps</a></li>
                                                <!-- <li><a href="#">Transfer Document</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo e(route('contact')); ?>" style="color: #FFFFFF;">Contact Us</a></li>
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
                                <!-- <li><a href="#" style="color: #FFFFFF;background-color: transparent">Agents</a></li> -->
                                <li><a href="<?php echo e(route('ads.index')); ?>" style="color: #FFFFFF;background-color: transparent">Properties</a></li>
                                <li class="dropdown"><a href="#" style="color: #FFFFFF;background-color: transparent">Files</a>
                                    <ul>
                                        <li><a href="<?php echo e(route('files')); ?>">All Files</a></li>
                                        <li><a href="<?php echo e(route('maps')); ?>">Maps</a></li>
                                        <!-- <li><a href="#">Transfer Document</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('contact')); ?>" style="color: #FFFFFF;background-color: transparent">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
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
                                <!-- <div class="inner-box">
                                    <div class="title-box">
                                        <h3>Luxurious Home</h3>
                                        <p>2-Kanals Bungalow Y-Block Phase-3 DHA,Lahore</p>
                                    </div>
                                    <ul class="info-list">
                                        <li><span>2340</span>Area Sq-ft</li>
                                        <li><span>04</span>Bed Room</li>
                                        <li><span>02</span>Kitchen</li>
                                    </ul>
                                    <div class="price">Rs. 4 Crore</div>
                                    <div class="btn-box"><a href="#" class="theme-btn btn-style-one">CONTACT AGENT</a></div>
                                </div> -->
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
                                <!-- <div class="inner-box">
                                    <div class="title-box">
                                        <h3>Luxurious Home</h3>
                                        <p>At Y - Block / DHA - Lahore.</p>
                                    </div>
                                    <ul class="info-list">
                                        <li><span>2340</span>Area Sq-ft</li>
                                        <li><span>04</span>Bed Room</li>
                                        <li><span>02</span>Kitchen</li>
                                    </ul>
                                    <div class="price">Rs. 4 Crore</div>
                                    <div class="btn-box"><a href="#" class="theme-btn btn-style-one">CONTACT AGENT</a></div>
                                </div> -->
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
                            <form method="post" action="index.html">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">city</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Lahore</option>
                                            <option>Islamabad</option>
                                            <option>Multan</option>
                                            <option>Karachi</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">search by property id</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Search by Address</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Location</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Lahore</option>
                                            <option>Islamabad</option>
                                            <option>Multan</option>
                                            <option>Karachi</option>
                                        </select>
                                    </div>


                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Price from</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Rs. 1000000</option>
                                            <option>Rs. 2000000</option>
                                            <option>Rs. 4000000</option>
                                            <option>Rs. 6000000</option>
                                            <option>Rs. 8000000</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Price To</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Rs. 2000000</option>
                                            <option>Rs. 3000000</option>
                                            <option>Rs. 5000000</option>
                                            <option>Rs. 7000000</option>
                                            <option>Rs. 9000000</option>
                                        </select>
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
                            <form method="post" action="index.html">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">city</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Lahore</option>
                                            <option>Islamabad</option>
                                            <option>Multan</option>
                                            <option>Karachi</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Search by property id</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Search by Address</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Location</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Lahore</option>
                                            <option>Islamabad</option>
                                            <option>Multan</option>
                                            <option>Karachi</option>
                                        </select>
                                    </div>                                   

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <div class="range-slider-one clearfix">
                                            <label style="color: #FFFFFF">Area</label>
                                            <div class="area-range-slider"></div>
                                            <div class="input" style="color: #FFFFFF"><input type="text" class="property-amount" name="field-name" style="color: #FFFFFF" readonly></div>
                                            <div class="title" style="color: #FFFFFF">m<sup>2</sup></div>
                                        </div>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <div class="range-slider-one clearfix">
                                            <label style="color: #FFFFFF">Price Filter</label>
                                            <div class="price-range-slider"></div>
                                            <div class="input" style="color: #FFFFFF"><input type="text" class="price-amount" name="field-name readonly" style="color: #FFFFFF"></div>
                                            <div class="title" style="color: #FFFFFF">PK Rupees</div>
                                        </div>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two" style="background: #2f4f4f">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                        <button type="submit" id="divshow" class="theme-btn btn-style-two" style="background: #2f4f4f">Advance Search</button>
                    </div>
                    
                        
                        <div id="mydiv" style="display: none;">
                        <div class="property-search-form">
                            <form method="post" action="index.html">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">city</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Lahore</option>
                                            <option>Islamabad</option>
                                            <option>Multan</option>
                                            <option>Karachi</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">search by property id</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Search by Address</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Location</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Lahore</option>
                                            <option>Islamabad</option>
                                            <option>Multan</option>
                                            <option>Karachi</option>
                                        </select>
                                    </div>


                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Price from</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Rs. 1000000</option>
                                            <option>Rs. 2000000</option>
                                            <option>Rs. 4000000</option>
                                            <option>Rs. 6000000</option>
                                            <option>Rs. 8000000</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Price To</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>Rs. 2000000</option>
                                            <option>Rs. 3000000</option>
                                            <option>Rs. 5000000</option>
                                            <option>Rs. 7000000</option>
                                            <option>Rs. 9000000</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two" style="background: #2f4f4f">Search</button>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button id="divhide" class="theme-btn btn-style-two" style="background: #2f4f4f">Hide</button>
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
    <section class="property-section mt-1" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2 style="color: #FFFFFF">RECENT PROPERTIES</h2>
            </div>

            <div class="row">


                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Property Block -->
                <div class="property-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo e(asset('storage').'/'.$ad->image1); ?>" alt=""></figure>
                        </div>
                        <div class="lower-content">
                            
                            <h3><a href="#" style="color: #FFFFFF"><?php echo e($ad->title); ?></a></h3>
                            <div class="lucation" style="color: #FFFFFF"><i class="la la-map-marker"></i><?php echo e($ad->adress); ?></div>
                            <ul class="property-info clearfix">
                                <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($ad->area); ?> <?php echo e($ad->unit); ?></li>
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

            <div class="load-more-btn text-center">
                <a href="<?php echo e(route('ads.index')); ?>" class="theme-btn btn-style-two">Load More</a>
            </div>
        </div>
    </section>
    <!--End Property Section -->

    <!-- About Us -->
    <section class="about-us mt-1" style="background-color: #777777;">
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
    <section class="popular-places-section mt-1" style="background: #2e2e2e">
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
                            <!-- <span class="category">Apartment</span> -->
                            <h3 class="place"><a href="<?php echo e(route('ads.index')); ?>">Lahore</a></h3>
                            <!-- <div class="properties"><a href="#">7 Properties</a></div> -->
                            <div class="view-all"><a href="<?php echo e(route('ads.index')); ?>">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/7.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <!-- <span class="category">House</span> -->
                            <h3 class="place"><a href="<?php echo e(route('ads.index')); ?>">Islamabad</a></h3>
                            <!-- <div class="properties"><a href="#">9 Properties</a></div> -->
                            <div class="view-all"><a href="<?php echo e(route('ads.index')); ?>">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/6.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <!-- <span class="category">Restaurant</span> -->
                            <h3 class="place"><a href="<?php echo e(route('ads.index')); ?>">Karachi</a></h3>
                            <!-- <div class="properties"><a href="#">5 Properties</a></div> -->
                            <div class="view-all"><a href="<?php echo e(route('ads.index')); ?>">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/14.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <!-- <span class="category">Farm</span> -->
                            <h3 class="place"><a href="<?php echo e(route('ads.index')); ?>">Hyderabad</a></h3>
                            <!-- <div class="properties"><a href="#">12 Properties</a></div> -->
                            <div class="view-all"><a href="<?php echo e(route('ads.index')); ?>">View All</a></div>
                        </div>
                    </div>
                </div>


                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo e(asset('images/property/12.jpg')); ?>" alt=""></figure>
                        <div class="info-box">
                            <!-- <span class="category">Villa</span> -->
                            <h3 class="place"><a href="<?php echo e(route('ads.index')); ?>">Faisalabad</a></h3>
                            <!-- <div class="properties"><a href="#">6 Properties</a></div> -->
                            <div class="view-all"><a href="<?php echo e(route('ads.index')); ?>">View All</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More -->
            <div class="load-more-btn text-center">
                <a href="#" class="theme-btn btn-style-two">Load More</a>
            </div>
        </div>
    </section>
    <!--Portfolio Section-->

    <!-- Call To Action -->
    <section class="call-to-action mt-1" style="background-image: url(<?php echo e(asset('images/main3.jpg')); ?>);">
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
                    <a href="<?php echo e(route('ads.index')); ?>" class="theme-btn btn-style-one">BROWSE PROPERTY</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Agents Section -->
    <div class="agents-section mt-1" style="background: #2e2e2e">
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
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/resource/agent-1.jpg')); ?>" alt=""></a></figure>
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
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/resource/agent-2.jp')); ?>g" alt=""></a></figure>
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
                            <figure class="image"><a href="agent-detail.html"><img src="<?php echo e(asset('images/resource/agent-3.jpg')); ?>" alt=""></a></figure>
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
                        <!-- <div class="subscribe-form">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                                    <button type="submit" class="theme-btn btn-style-four">Submit</button>
                                </div>
                            </form>
                        </div> -->
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="social-links">
                            <ul class="social-icon-two">
                                <li><a href="https://www.facebook.com/DefenceEstateDHALahore/"><span class="la la-facebook-f"></span></a></li>
                                <li><a href="https://twitter.com/Defence_Estate"><span class="la la-twitter"></span></a></li>
                                <!-- <li><a href="#"><span class="la la-google-plus"></span></a></li> -->
                                <li><a href="https://www.instagram.com/defence_estate/"><span class="la la-instagram"></span></a></li>
                                <!-- <li><a href="#"><span class="la la-pinterest"></span></a></li> -->
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
                                            <!-- <li><a href="properties.html">Islamabad</a></li> -->
                                            <li><a href="#">Karachi</a></li>
                                            <li><a href="#">Multan</a></li>
                                            <li><a href="#">Gujranwala</a></li>
                                            <li><a href="#">Lahore</a></li>
                                            <li><a href="#">Bahawalpur</a></li>
                                            <li><a href="#">Peshawar</a></li>
                                            <!-- <li><a href="properties.html">Faisalabad</a></li> -->
                                            <!-- <li><a href="properties.html">Hyderabad</a></li> -->
                                            <!-- <li><a href="properties.html">Sakhar</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget popular-posts">
                                    <!-- <h2 class="widget-title">Popular Posts</h2> -->
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <!-- <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src="<?php echo e(asset('images/resource/post-thumb-1.jpg')); ?>" alt=""></a></div>
                                            <h4><a href="blog-detail.html">Modern Design Building </a></h4>
                                            <span class="date">1 October, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src="<?php echo e(asset('images/resource/post-thumb-2.jpg')); ?>" alt=""></a></div>
                                            <h4><a href="blog-detail.html">Real Eatate Expo 2020</a></h4>
                                            <span class="date">10 October, 2020</span>
                                        </div> -->
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
                                <!-- <div class="footer-widget links-widget">
                                    <h2 class="widget-title">USEFUL LINKS</h2>
                                    <div class="widget-content">
                                        <ul class="list clearfix">
                                            <li><a href="properties.html">Rental Builidngs</a></li>
                                            <li><a href="properties.html">Browe all Categories</a></li>
                                            <li><a href="properties.html">Mortagages Rates</a></li>
                                            <li><a href="properties.html">Terms of use</a></li>
                                            <li><a href="properties.html">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Get in Touch</h2>
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li><span class="la la-map-marker"></span> A-45 Commercial (Opposite DHA Office), Phase 6, DHA Lahore, Pakistan</li>
                                            <li><span class="la la-phone"></span>+92 324-8809070, +92 42 111-127-127, +92 42 37189686-90</li>
                                            <li><span class="la la-envelope"></span><a href="#">info@defenceestate.com</a></li>
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
                    <!-- <div class="footer-nav">
                        <ul class="clearfix">
                           <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                           <li><a href="<?php echo e(route('ads.index')); ?>">Properties</a></li>
                           <li><a href="#">Agencies</a></li>
                           <li><a href="#">Agent</a></li>
                           <li><a href="#">Blogs</a></li>
                           <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                        </ul>
                    </div> -->

                    <div class="inner-container clearfix">
                    <div class="copyright-text">
                    <p class="copyright-text" style="color: white;">© 2020 <a href="#" style="color: #5ddaff">Aztech</a> All right reserved.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>
<!--End pagewrapper-->


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
<?php /**PATH C:\Users\Umair Zia\Documents\laravel\defenceEstate\resources\views/index.blade.php ENDPATH**/ ?>