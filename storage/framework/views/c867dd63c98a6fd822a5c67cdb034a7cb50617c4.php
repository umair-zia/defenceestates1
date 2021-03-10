

<?php $__env->startSection('content'); ?>
<div>
    <div class="dashboard" style="background-color: #2e2e2e">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style="color: #FFFFFF">Edit File</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <!-- <div class="breadcrumb-nav">
	                                <ul>
	                                    
	                                    <li class="active">Upload File</li>
	                                </ul>
	                            </div> -->
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="column col-lg-12">
	                    	<div class="properties-box">
	                    		<div class="inner-container">
	                    			<div class="property-submit-form">
			                            <form action="<?php echo e(route('files.update',$file->id)); ?>" method="POST" >
											<?php echo csrf_field(); ?>
											<?php echo method_field('PUT'); ?>
										    <input type="hidden" value="yes" name="aproved">
                                                <div class="title" style="background-color: #2f4f4f"><h3>Update File Info</h3></div>
                                                    <div class="row">
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">File Name</label>
														<input type="text"  placeholder="File Name" name="filename" value="<?php echo e(isset($file) ? $file->filename : ''); ?>" required>
                                                        </div>

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">City</label>
                                                            <input type="text"  placeholder="City" name="city" value="<?php echo e(isset($file) ? $file->city : ''); ?>" required>
                                                        </div>
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">Block</label>
                                                            <input type="text"  placeholder="Block" name="block" value="<?php echo e(isset($file) ? $file->block : ''); ?>" required>
														</div>
														
                                                        <!-- Form Group -->
														<div class="form-group col-lg-3 col-md-6 col-sm-12">
															<div class="range-slider-one clearfix">
																<label style="color: #FFFFFF">Land Area</label>
																<input type="text"  placeholder="Area" name="area" value="<?php echo e(isset($file) ? $file->area : ''); ?>" required>
															</div>
														</div>

														<!-- Form Group -->
														<div class="form-group col-lg-3 col-md-6 col-sm-12">
															<div class="range-slider-one clearfix">
																<label style="color: #FFFFFF">Unit</label>
																<select class="custom-select-box" name="unit" value="<?php echo e(isset($file) ? $file->unit : ''); ?>">
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
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">Location</label>
                                                            <input type="text"  placeholder="Location" name="location" value="<?php echo e(isset($file) ? $file->location : ''); ?>" required>
														</div>
														
														
                                                        

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <button type="submit" class="theme-btn btn-style-one">Edit File</button>
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
	            <p class="copyright-text" style="color: white;">© 2020 <a href="#" style="color: #5ddaff">Aztech</a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xxx/Desktop/php/defenceEstate1/defenceEstate1/resources/views/admin/update-file.blade.php ENDPATH**/ ?>