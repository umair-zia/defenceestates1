

<?php $__env->startSection('content'); ?>
    <div class="dashboard">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style="color: #FFFFFF">My Properties</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    <!-- <li><a href="<?php echo e(route('admin.index')); ?>" style="color: white;">Index</a></li>
	                                    <li><a href="<?php echo e(route('admin.index')); ?>" style="color: white;">Dashboard</a></li>
	                                    <li class="active">Properties</li> -->
	                                </ul>
	                            </div> 
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="column col-lg-12">
	                    	<div class="properties-box">
	                    		<div class="title"><h3 style="color: #FFFFFF">My Properties List</h3></div>
	                    		<div class="inner-container">
								<?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($ad->user_id == $user->id): ?>
										<!-- Property Block -->
										<div class="property-block">
											<div class="inner-box clearfix">
												<div class="image-box">
													<figure class="image"><img src="<?php echo e(asset('storage').'/'.$ad->image1); ?>" alt=""></figure>
												</div>
												<div class="content-box">
													<h3 style="color: #FFFFFF"><?php echo e($ad->title); ?></h3>
													<div class="location" style="color: white;"><i class="la la-map-marker"></i > <?php echo e($ad->adress); ?></div>
													<ul class="property-info clearfix"style="color: #FFFFFF">
														<li style="color: #FFFFFF"><i class="flaticon-dimension"></i ><?php echo e($ad->area); ?> <?php echo e($ad->unit); ?></li>
														<li style="color: #FFFFFF"><i class="flaticon-bed"></i> <?php echo e($ad->bedroom); ?> Bedrooms</li>
														<li style="color: #FFFFFF"><i class="flaticon-full-screen"></i> <?php echo e($ad->kitchen); ?> Kitchen</li>
														<li style="color: #FFFFFF"><i class="flaticon-bathtub"></i> <?php echo e($ad->bathroom); ?> Bathroom</li>
														
													</ul>
													<div style="color: #FFFFFF" lass="price">Rs. <?php echo e($ad->demand); ?></div>
												</div>
												<div class="option-box">
													<div  style="color: #FFFFFF" class="expire-date"><?php echo e($ad->updated_at); ?></div>
													<ul style="color: #FFFFFF" class="action-list">
														<li style="color: #FFFFFF" ><a href="<?php echo e(route('admin.updateform', ['id' => $ad->id])); ?>"style="color: #FFFFFF"><i style="color: #FFFFFF" class="la la-edit"></i>Edit</a></li>
														
														<form  style="color: #FFFFFF" action="<?php echo e(route('ads.destroy', ['id' => $ad->id])); ?>" method="POST">
															<?php echo csrf_field(); ?>
															<?php echo method_field('DELETE'); ?>
															<li style="color: #FFFFFF"><button type="submit" style="color: #FFFFFF;background-color: #2e2e2e"><i class="la la-trash-o" style="color: #FFFFFF"></i> Delete</button></li>
														</form>
														
													</ul>
												</div>
											</div>
										</div>
									<?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/blackfire/Desktop/defenceEstate1 (copy)/resources/views/admin/my-properties.blade.php ENDPATH**/ ?>