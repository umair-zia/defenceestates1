

<?php $__env->startSection('content'); ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    google.charts.load('current', {packages: ['corechart', 'line']});
    google.charts.setOnLoadCallback(drawVisualization);
    
    function drawVisualization() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Price');

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            data.addRow([new Date(<?php echo e($d->created_at->format('Y,m,d')); ?>), <?php echo e($d->price); ?>]);
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    
        // Create and draw the visualization.
        var chart = new google.visualization.ScatterChart(
            document.getElementById('chart_div'));
        chart.draw(data, {title: 'Defence Estate',
                        //   width: 400, height: 300,
                          vAxis: {title: "Price", titleTextStyle: {color: "green"}},
                          hAxis: {title: "Date", titleTextStyle: {color: "green"}},
                          lineWidth: 1}
                  );
    }
    
    
        // $(window).resize(function(){
        // 	drawBackgroundColor();
        // });
    
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
                                                            <button type="submit" class="theme-btn btn-style-one">New Price</button>
                                                        </div>
                                                    </div>

                                                <div class="title" style="background-color: #2f4f4f"><h3>Price Chart</h3></div>
                                                <div class="row">
                                                    <div class="container-fluid">
														<div id="chart_div" style="width: auto; height: 60vh;"></div>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/blackfire/Desktop/proj_05/defenceEstate1 (copy)/resources/views/admin/fileChart.blade.php ENDPATH**/ ?>