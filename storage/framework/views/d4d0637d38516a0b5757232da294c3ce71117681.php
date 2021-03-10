<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Defence Estate</title>
<!-- Stylesheets -->
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
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

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

        <!-- Main Header-->
    <header class="main-header header-style-seven">
        <!--Header Top-->
        <div class="header-top" style="background: #2e2e2e">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <div class="text" style="color: #FFFFFF"><span>Welcome</span> to Defense Estate - Making Business Better</div>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="clearfix">
                            <li><a href="<?php echo e(route('login')); ?>" style="color: #FFFFFF">Login</a></li>
                            <li><a href="<?php echo e(route('login')); ?>" style="color: #FFFFFF">Register</a></li>
                        </ul>
                        <div class="btn-box">
                            <a href="<?php echo e(route('ads.create')); ?>" class="theme-btn btn-style-two" class="theme-btn btn-style-two" style="background: #2f4f4f">Add Property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

         <!-- Header Upper -->
        <div class="header-upper" style="background: #2e2e2e;">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="logo-outer my-2">
                        <div class="logo"><a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('images/2.png')); ?>" alt="" title=""></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->


        <!-- Header Lower -->
        <div class="header-lower" style="background: #2e2e2e">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-dark">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                                    <li><a href="<?php echo e(route('ads.index')); ?>">Properties</a></li>
                                    <li><a href="<?php echo e(route('files')); ?>">Files</a></li>
                                    
                                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                    <li class="dropdown"><a href="#">Maps</a>
                                        <ul>
                                            <li><a href="<?php echo e(route('maps')); ?>">Maps</a></li>
                                            <li><a href="https://maps.dhalahore.org/" target="_blank">GIS Map</a></li>
                                            <!-- <li><a href="#">Transfer Document</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo e(route('forms')); ?>">Forms</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <!-- <div class="outer-box">
                           <div class="btn-box">
                               <a href="contact.html" class="theme-btn btn-style-one">Get Appointment</a>
                           </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header" style="background: linear-gradient(to bottom, #2e2e2e 0%,#2e2e2e 100%);">
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
                                <li><a href="<?php echo e(route('index')); ?>" style="color: #FFFFFF;background-color: transparent">Home</a></li></li>
                                <li><a href="<?php echo e(route('about')); ?>" style="color: #FFFFFF;background-color: transparent">About</a></li>
                                <li><a href="<?php echo e(route('ads.index')); ?>" style="color: #FFFFFF;background-color: transparent">Properties</a></li>
                                <li><a href="<?php echo e(route('files')); ?>"style="color: #FFFFFF;background-color: transparent">Files</a></li>
                                <li><a href="<?php echo e(route('contact')); ?>" style="color: #FFFFFF;background-color: transparent">Contact</a></li>
                                <li class="dropdown"><a href="#" style="color: #FFFFFF;background-color: transparent">Maps</a>
                                    <ul>
                                        <li><a href="<?php echo e(route('maps')); ?>">Maps</a></li>
                                        <li><a href="https://maps.dhalahore.org/" target="_blank">GIS Map</a></li>
                                        <!-- <li><a href="#">Transfer Document</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('forms')); ?>" style="color: #FFFFFF;background-color: transparent">Forms</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->
    <?php echo $__env->yieldContent('content'); ?>
        <!-- Main Footer -->
        <footer class="main-footer style-three">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row">
                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-logo">
                            <figure class="image"><a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('images/2.png')); ?>" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                        <div class="subscribe-form">
                            <!-- <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                                    <button type="submit" class="theme-btn btn-style-four"><i class="icon la la-paper-plane"></i></button>
                                </div>
                            </form> -->
                        </div>
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="social-links">
                            <ul class="social-icon-two">
                                <li><a href="https://www.facebook.com/DefenceEstateDHALahore/" target="_blank"><span class="la la-facebook-f"></span></a></li>
                                <li><a href="https://twitter.com/Defence_Estate" target="_blank"><span class="la la-twitter"></span></a></li>
                                <!-- <li><a href="#"><span class="la la-google-plus"></span></a></li> -->
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
                                            <div class="thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                            <h4><a href="blog-detail.html">Modern Design Building </a></h4>
                                            <span class="date">1 October, 2020</span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                            <h4><a href="blog-detail.html">Real Estate Expo 2020</a></h4>
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
                                            <li><a href="properties.html">Browse all Categories</a></li>
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
                                            <li><span class="la la-phone"></span>+92 42 111-127-127</li>
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
                    <div class="copyright-text">
                    <p class="copyright-text" style="color: white;">© 2020 <a href="http://defenceestate.com/" style="color: #5ddaff">Defence Estate</a> All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
    </div>
<!--End pagewrapper-->

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>

<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.fancybox.js')); ?>"></script>
<script src="<?php echo e(asset('js/owl.js')); ?>"></script>
<script src="<?php echo e(asset('js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('js/validate.js')); ?>"></script>
<script src="<?php echo e(asset('js/isotope.js')); ?>"></script>
<script src="<?php echo e(asset('js/mixitup.js')); ?>"></script>
<script src="<?php echo e(asset('js/appear.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<!-- Color Setting -->
<script src="<?php echo e(asset('js/color-settings.js')); ?>"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeEODj4mnpmSCoPcBVOIPzzHXRZLHHd3Q"></script>
<script src="<?php echo e(asset('js/map-script.js')); ?>"></script>
<!--End Google Map APi-->
</body>
</html><?php /**PATH /home/blackfire/Desktop/defenceEstate1 (copy)/resources/views/layouts/ads.blade.php ENDPATH**/ ?>