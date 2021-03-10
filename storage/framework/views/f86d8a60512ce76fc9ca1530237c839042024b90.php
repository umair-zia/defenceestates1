

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


<div>
    <div class="dashboard" style="background-color: #2e2e2e">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style="color: #FFFFFF">File Price Chart</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    
	                                    <li class="active"> <a href="<?php echo e(route('files.create')); ?>" style="color: white;">Back</a></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="column col-lg-12">
	                    	<div class="properties-box">
	                    		<div class="inner-container">
	                    			<div class="property-submit-form">
			                            <form action="<?php echo e(route('files.data.store',[$file->id])); ?>" method="POST" >
                                         <?php echo csrf_field(); ?>
                                         <?php echo method_field('POST'); ?>
										    <input type="hidden" value="yes" name="aproved">
                                                <div class="title" style="background-color: #2f4f4f"><h3>Update Price</h3></div>
                                                    <div class="row">
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">Price</label>
                                                            <input type="text"  placeholder="New Price" name="price" required>
                                                        </div>

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <button type="submit" class="theme-btn btn-style-one">New dasdaPrice</button>
                                                        </div>
                                                    </div>

                                                <div class="title" style="background-color: #2f4f4f"><h3>Price Chart</h3></div>
                                                <div class="row">
                                                    <div class="container-fluid">
														<div id="chartdiv" style="width: auto; height: 60vh;"></div>
                                                    </div>
                                                </div>
                                            </div>
			                            </form>
			                        </div>
	                    		</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
	            <p class="copyright-text" style="color: white;">© 2020 <a href="http://defenceestate.com/" style="color: #5ddaff">Defence Estate</a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\22-10-20\defenceEstate1 - Copy (3)\resources\views/admin/fileChart.blade.php ENDPATH**/ ?>