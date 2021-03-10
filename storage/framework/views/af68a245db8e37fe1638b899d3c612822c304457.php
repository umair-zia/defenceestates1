<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Defense Estate | Admin</title>
<!-- Stylesheets -->
<link href="<?php echo e(asset('afile/css/bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('afile/css/style.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('afile/css/responsive.css')); ?>" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo e(asset('afile/images/favicon.png')); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo e(asset('afile/images/favicon.png')); ?>" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body style="background-color: #2e2e2e">


<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header">
        <div class="main-box clearfix" style="background: #2e2e2e">
        	<!-- Logo Box -->
            <div class="logo-box">
                <div class="logo"><a href="<?php echo e(route('admin.index')); ?>"><img src="<?php echo e(asset('afile/images/2.png')); ?>" alt="" title=""></a></div>
            </div>

            <!-- Upper Right-->
            <div class="upper-right">
                <ul class="clearfix">
                    <li class="dropdown option-box">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="color: #FFFFFF"> <img src="<?php echo e(asset('images/admin1.png')); ?>" alt="avatar" class="thumb">Admin</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo e(route('admin.index')); ?>">Dashboard</a>
                            
                            <!-- <a class="dropdown-item" href="#">My profile</a> -->
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Log out</a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
<!--                    <li class="submit-property">-->
<!--                    	<a href="submit-property.html" class="theme-btn btn-style-one">Submit Property <i class="pe-7s-up-arrow"></i></a>-->
<!--                    </li>-->
                    <li class="nav-toggler">
                    	<button class="toggler-btn nav-btn"><span class="bar bar-one" style="background-color: #FFFFFF"></span><span class="bar bar-two" style="background-color: #FFFFFF"></span><span class="bar bar-three" style="background-color: #FFFFFF"></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--End Main Header -->
    
    <!-- Hidden Bar -->
    <section class="hidden-bar">
        <div class="dashboard-inner">
        	<div class="cross-icon"><span class="pe-7s-close-circle"></span></div>
        	<ul class="navigation">
	            <li class="active"><a href="<?php echo e(route('admin.index')); ?>"><i class="pe-7s-culture"></i> Dashboard</a></li>
	            <li><a href="<?php echo e(route('admin.ads')); ?>"><i class="pe-7s-diamond"></i>My Properties</a></li>
	            <li><a href="<?php echo e(route('admin.create')); ?>"><i class="pe-7s-up-arrow"></i>Submit Property</a></li>
                <li><a href="<?php echo e(route('files.create')); ?>"><i class="pe-7s-up-arrow"></i>Submit Files</a></li>
	            <!-- <li><a href="my-profile.html"><i class="pe-7s-user"></i>My Profile</a></li> -->
	            <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="pe-7s-back-2"></i>Logout</a></li>
	        </ul>
	    </div>
    </section>
    <!--End Hidden Bar -->
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script src="<?php echo e(asset('afile/js/jquery.js')); ?>"></script> 
<script src="<?php echo e(asset('afile/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('afile/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('afile/js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('afile/js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('afile/js/dropzone.js')); ?>"></script>
<script src="<?php echo e(asset('afile/js/appear.js')); ?>"></script>
<script src="<?php echo e(asset('afile/js/script.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\Umair Zia\Documents\laravel\defenceEstate\resources\views/layouts/admin.blade.php ENDPATH**/ ?>