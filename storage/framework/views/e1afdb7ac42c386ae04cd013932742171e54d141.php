

<?php $__env->startSection('content'); ?>




    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <script>
        am4core.useTheme(am4themes_dark);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.XYChart);

        // Add data
        chart.data = generateChartData();

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.minGridDistance = 50;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueY = "visits";
        series.dataFields.dateX = "date";
        series.strokeWidth = 2;
        series.minBulletDistance = 10;
        series.tooltipText = "{valueY}";
        series.tooltip.pointerOrientation = "vertical";
        series.tooltip.background.cornerRadius = 20;
        series.tooltip.background.fillOpacity = 0.5;
        series.tooltip.label.padding(12, 12, 12, 12)

        // Add scrollbar
        chart.scrollbarX = new am4charts.XYChartScrollbar();
        chart.scrollbarX.series.push(series);

        // Add cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.xAxis = dateAxis;
        chart.cursor.snapToSeries = series;

        function generateChartData() {
        var chartData = [];
        var firstDate = new Date();
        firstDate.setDate(firstDate.getDate() - 1000);
        var visits = 1200;
        for (var i = 0; i < 500; i++) {
            // we create date objects here. In your data, you can have date strings
            // and then set format of your dates using chart.dataDateFormat property,
            // however when possible, use date objects, as this will speed up chart rendering.
            var newDate = new Date(firstDate);
            newDate.setDate(newDate.getDate() + i);

            visits += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);

            chartData.push({
            date: newDate,
            visits: visits
            });
        }
        return chartData;
        }
    </script>

    <script>
        am4core.useTheme(am4themes_dark);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv1", am4charts.XYChart);

        // Add data
        chart.data = generateChartData();

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.minGridDistance = 50;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueY = "visits";
        series.dataFields.dateX = "date";
        series.strokeWidth = 2;
        series.minBulletDistance = 10;
        series.tooltipText = "{valueY}";
        series.tooltip.pointerOrientation = "vertical";
        series.tooltip.background.cornerRadius = 20;
        series.tooltip.background.fillOpacity = 0.5;
        series.tooltip.label.padding(12, 12, 12, 12)

        // Add scrollbar
        chart.scrollbarX = new am4charts.XYChartScrollbar();
        chart.scrollbarX.series.push(series);

        // Add cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.xAxis = dateAxis;
        chart.cursor.snapToSeries = series;

        function generateChartData() {
        var chartData = [];
        var firstDate = new Date();
        firstDate.setDate(firstDate.getDate() - 1000); //Can Change the date
        var visits = 1200; // Initial value
        for (var i = 0; i < 500; i++) { //Total number of values
            // we create date objects here. In your data, you can have date strings
            // and then set format of your dates using chart.dataDateFormat property,
            // however when possible, use date objects, as this will speed up chart rendering.
            var newDate = new Date(firstDate);
            newDate.setDate(newDate.getDate() + i);

            visits += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10); //Generate random values

            chartData.push({
            date: newDate,
            visits: visits
            });
        }
        return chartData;
        }
    </script>

    <script>
        am4core.useTheme(am4themes_dark);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv2", am4charts.XYChart);

        // Add data
        chart.data = generateChartData();

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.minGridDistance = 50;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueY = "visits";
        series.dataFields.dateX = "date";
        series.strokeWidth = 2;
        series.minBulletDistance = 10;
        series.tooltipText = "{valueY}";
        series.tooltip.pointerOrientation = "vertical";
        series.tooltip.background.cornerRadius = 20;
        series.tooltip.background.fillOpacity = 0.5;
        series.tooltip.label.padding(12, 12, 12, 12)

        // Add scrollbar
        chart.scrollbarX = new am4charts.XYChartScrollbar();
        chart.scrollbarX.series.push(series);

        // Add cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.xAxis = dateAxis;
        chart.cursor.snapToSeries = series;

        function generateChartData() {
        var chartData = [];
        var firstDate = new Date();
        firstDate.setDate(firstDate.getDate() - 1000);
        var visits = 1200;
        for (var i = 0; i < 500; i++) {
            // we create date objects here. In your data, you can have date strings
            // and then set format of your dates using chart.dataDateFormat property,
            // however when possible, use date objects, as this will speed up chart rendering.
            var newDate = new Date(firstDate);
            newDate.setDate(newDate.getDate() + i);

            visits += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);

            chartData.push({
            date: newDate,
            visits: visits
            });
        }
        return chartData;
        }
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
                    <!-- Property Block -->
                    <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                            <div class="image-box">
                                <div id="chartdiv" style="width: auto; height: 50vh;"></div>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                </ul>
                                <h3><a href="#" style="color: #FFFFFF">City</a></h3>
                                   
                                <ul class="property-info clearfix">
                                    
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>20 Marla</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>Block AA</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                            <div class="image-box">
                                <div id="chartdiv1" style="height: 50vh;"></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#" style="color: #FFFFFF">City</a></h3>
                                   
                                <ul class="property-info clearfix">
                                    
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>20 Marla</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>Block AA</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                            <div class="image-box">
                                <div id="chartdiv2" style="width: auto; height: 50vh;"></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#" style="color: #FFFFFF">City</a></h3>
                                   
                                <ul class="property-info clearfix">
                                    
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>20 Marla</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>Block AA</li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
<?php echo $__env->make('layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\22-10-20\defenceEstate1 - Copy (3)\resources\views/ads/files.blade.php ENDPATH**/ ?>