

<?php $__env->startSection('content'); ?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    google.charts.load('current', {packages: ['corechart', 'line']});
    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    google.charts.setOnLoadCallback(drawVisualization<?php echo e($file->id); ?>);
    
    function drawVisualization<?php echo e($file->id); ?>() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', '');

        <?php $__currentLoopData = $file->filesData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            data.addRow([new Date(<?php echo e($d->created_at->format('Y,m,d')); ?>), <?php echo e($d->price); ?>]);
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    
        // Create and draw the visualization.
        var chart = new google.visualization.ScatterChart(
            document.getElementById('chart_div<?php echo e($file->id); ?>'));
        chart.draw(data, {title: '',backgroundColor: '#404040',colors: ['#a52714'],
                        //   width: 400, height: 300,
                          vAxis: {title: "Rs.",textStyle: {color: '#ffffff'}, titleTextStyle: {color: "white"}},
                          hAxis: {title: "Date",textStyle: {color: '#ffffff'}, titleTextStyle: {color: "white"}},
                          lineWidth: 1}
                  );
    }
    
    
        // $(window).resize(function(){
        // 	drawBackgroundColor();
        // });
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>

<div>    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Files</h1>
                <ul class="bread-crumb clearfix">
                    <!-- <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Files</li>
                    <li>All Files</li> -->
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
                        <span class="title">FIND THE FILES</span>
                        <h2 style="color: #FFFFFF;">FILES</h2>
                    </div>

                    <!--Filter-->
                    
                </div>

                <div class="filter-list row">
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            
                            <!-- Property Block -->
                            <div class="property-block all mix lahore commercial col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                                    <div class="image-box">
                                    <div id="chart_div<?php echo e($file->id); ?>" style="width: auto; height: auto;"></div>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="tags">
                                            <!-- <li><a href="#">Commercial</a>,</li>
                                            <li><a href="#">Residential</a>,</li> -->
                                        </ul>
                                        <h3><a href="#" style="color: #FFFFFF"><?php echo e($file->filename); ?></a></h3>
                                        <div class="lucation" style="color: #FFFFFF"><i class="la la-map-marker"></i><?php echo e($file->location); ?></div>
                                        <ul class="property-info clearfix">
                                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($file->area); ?> <?php echo e($file->unit); ?></li>
                                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>Block <?php echo e($file->block); ?></li>
                                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>Rs. <?php echo e($file->price); ?></li>
                                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($file->city); ?></li>
                                        </ul>
                                        <!-- <div class="property-price clearfix">
                                            <div class="read-more"><a href="" class="theme-btn" style="background-color: #00c0ff;"><?php echo e($file->price); ?></a></div>
                                        </div> -->
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
    <!-- <section class="clients-section style-three mt-1" style="background: #2e2e2e">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo e(asset('images/clients/2.png')); ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo e(asset('images/clients/2.png')); ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo e(asset('images/clients/2.png')); ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo e(asset('images/clients/2.png')); ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo e(asset('images/clients/2.png')); ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo e(asset('images/clients/2.png')); ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo e(asset('images/clients/2.png')); ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo e(asset('images/clients/2.png')); ?>" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section> -->
    <!--End Clients Section-->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xxx/Desktop/php/defenceEstate1/defenceEstate1/resources/views/ads/files.blade.php ENDPATH**/ ?>