

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
        chart.draw(data, {title: '',backgroundColor: '#404040',colors: ['#eaed1f'],
                        //   width: 400, height: 300,
                          vAxis: {title: "Rs.",textStyle: {color: '#ffffff'}, titleTextStyle: {color: "white"}},
                          hAxis: {title: "Date",textStyle: {color: '#ffffff'}, titleTextStyle: {color: "white"}},
                          lineWidth: 1}
                  );
    }
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>

<div>    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Files</h1>
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
                        <span class="title">FIND THE FILES</span>
                        <h2 style="color: #FFFFFF;">FILES</h2>
                    </div>

                    <!--Filter-->
                    <form action="<?php echo e(route('file.search')); ?>" method="get">
                    <div class="filters col-md-3">
                        <input class="form-group" type="text" placeholder="Search" name="search" style="position: relative; display: block; width: 100%; line-height: 28px; padding: 10px 20px; height: 50px;font-size: 14px; border: 1px solid #e0e0e0; border-radius: 6px;">
                    </div>
                    </form>
                    
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
                                        </ul>
                                        <h3><a href="#" style="color: #FFFFFF"><?php echo e($file->block); ?></a></h3>
                                        <ul class="property-info clearfix">
                                        <?php if($file->unit == 'Marla'): ?>
                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($file->area); ?> Marla
                                <?php else: ?>
                                    <?php if($file->unit != 'Marla'): ?>
                                        <?php if($file->unit == 'Square Feet'): ?>
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($file->area/225, 2)); ?> Marla
                                            <sup>
                                                <a class="la la-info-circle" 
                                                data-toggle="popover" 
                                                title="Area Conversion" 
                                                data-content="<?php echo e($file->unit); ?>: (<?php echo e($file->area); ?>)">
                                                </a>
                                            </sup>
                                        <?php endif; ?>
                                        <?php if($file->unit == 'Square Yards'): ?>
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($file->area/25, 2)); ?> Marla
                                            <sup>
                                                <a class="la la-info-circle" 
                                                data-toggle="popover" 
                                                title="Area Conversion" 
                                                data-content="<?php echo e($file->unit); ?>: (<?php echo e($file->area); ?>)">
                                                </a>
                                            </sup>
                                        <?php endif; ?>
                                        <?php if($file->unit == 'Square Meters'): ?>
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e(round($file->area/20.9, 2)); ?> Marla
                                            <sup>
                                                <a class="la la-info-circle" 
                                                data-toggle="popover" 
                                                title="Area Conversion" 
                                                data-content="<?php echo e($file->unit); ?>: (<?php echo e($file->area); ?>)">
                                                </a>
                                            </sup>
                                        <?php endif; ?>
                                        <?php if($file->unit == 'Kanal'): ?>
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($file->area*20); ?> Marla
                                            <sup>
                                                <a class="la la-info-circle" 
                                                data-toggle="popover" 
                                                title="Area Conversion" 
                                                data-content="<?php echo e($file->unit); ?>: (<?php echo e($file->area); ?>)">
                                                </a>
                                            </sup>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                        
                                <?php endif; ?>
                                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>Rs. <?php echo e($file->price); ?></li>
                                            <li style="color: #FFFFFF"><i class="flaticon-dimension"></i><?php echo e($file->city); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>

            </div>
        </div>
    </section>
    <!--End Property Filter Section -->


</div>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\22-10-20\defenceEstate1\resources\views/ads/files.blade.php ENDPATH**/ ?>