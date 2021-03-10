

<?php $__env->startSection('content'); ?>
<div>
    <div class="dashboard" style="background-color: #2e2e2e">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style="color: #FFFFFF">Upload File</h4></div>
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
			                            <form action="<?php echo e(route('files.store')); ?>" method="POST">
										 <?php echo csrf_field(); ?>
										    <input type="hidden" value="yes" name="aproved">
                                                <div class="title" style="background-color: #2f4f4f"><h3>Basic Info</h3></div>
                                                    <div class="row">
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">File Name</label>
                                                            <input type="text"  placeholder="File Name" name="filename" required>
                                                        </div>

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">City</label>
                                                            <input type="text"  placeholder="City" name="city" required>
                                                        </div>
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">Phase</label>
                                                            <input type="text"  placeholder="Phase" name="phase" required>
                                                        </div>

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">File Type</label>
                                                            <select class="custom-select-box" name="type">
                                                                <option >Select Type</option>
                                                                <option >Commercial File</option>
                                                                <option >Residential File</option>
                                                            </select>
                                                        </div>

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">Initial Price</label>
                                                            <input type="text"  placeholder="Price" name="price" required>
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
                                                                <select class="custom-select-box" name="unit">
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
                                                        <!-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">Location</label>
                                                            <input type="text"  placeholder="Location" name="location" required>
                                                        </div> -->

                                                        

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <button type="submit" class="theme-btn btn-style-one">Add File</button>
                                                        </div>
                                                    
                                                    </div>
                                                </form>
                                                <div class="title" style="background-color: #2f4f4f"><h3>Files Info</h3></div>
                                                <div class="row">
                                                    <div class="container-fluid">
                                                    <table class="table table-dark">
                                                        <thead style="color:#FFFFFF; font-size: bold;">
                                                            <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">File Name</th>
                                                            <th scope="col">City</th>
                                                            <th scope="col">Phase</th>
                                                            <th scope="col">File Type</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Land Area</th>
                                                            <th scope="col">Unit</th>
                                                            <!-- <th scope="col">Location</th> -->
                                                            
                                                            <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                
                                                                    
                                                                        <tr>
                                                                            <th scope="row"><?php echo e($file->id); ?></th>
                                                                            <td><?php echo e($file->filename ? $file->filename : 'N/A'); ?></td>
                                                                            <td><?php echo e($file->city ? $file->city : 'N/A'); ?></td>
                                                                            <td><?php echo e($file->phase ?? 'N/A'); ?></td>
                                                                            <td><?php echo e($file->type ?? 'N/A'); ?></td>
                                                                            <td>Rs.<?php echo e($file->price ? $file->price : 'N/A'); ?></td>
                                                                            <td><?php echo e($file->area ? $file->area : 'N/A'); ?></td>
                                                                            <td><?php echo e($file->unit ? $file->unit : 'N/A'); ?></td>
                                                                            
                                                                            
                                                                            <td>
                                                                                <a class="theme-btn btn-style-one" href="<?php echo e(route('files.show',[$file->id])); ?>" style="padding: 5px 15px">Add</a>
                                                                                <a class="theme-btn btn-style-one ml-1" href="<?php echo e(route('files.edit',[$file->id])); ?>" style="padding: 5px 15px"> Edit</a>
                                                                                <form class="ml-1"  style="display:inline;color: #FFFFFF" action="<?php echo e(route('files.destroy',[$file->id])); ?>" method="POST">
                                                                                    <?php echo csrf_field(); ?>
                                                                                    <?php echo method_field('DELETE'); ?>
                                                                                    <button type="submit" class="theme-btn btn-style-one " style="padding: 5px 15px"> Delete</button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    
                                                                
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    
                                                </div>
                                            </div>
			                            
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\22-10-20\defenceEstate1 - Copy (3)\resources\views/admin/submit-file.blade.php ENDPATH**/ ?>