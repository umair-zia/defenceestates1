<?php $__env->startSection('content'); ?>
    <div class="dashboard">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style=color:#ffffff;>WELCOME ADMIN</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	                <div class="alert alert-success" role="alert">
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	                    <strong>Your listing</strong> YOUR LISTING HAS BEEN APPROVED!
	                </div>

	                <div class="row">
	                    <div class="col-lg-3 col-md-6 col-sm-6">
	                        <div class="ui-item bg-success">
	                            <div class="left">
	                                <h4><?php echo e($total_listing ?? ''); ?></h4>
	                                <p>Total Listings</p>
	                            </div>
	                            <div class="right">
	                                <i class="la la-map-marker"></i>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-md-6 col-sm-6">
	                        <div class="ui-item bg-warning">
	                            <div class="left">
	                                <h4><?php echo e($active ?? ''); ?></h4>
	                                <p>Active Listings</p>
	                            </div>
	                            <div class="right">
	                                <i class="la la-eye"></i>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-md-6 col-sm-6">
	                        <div class="ui-item bg-active">
	                            <div class="left">
	                                <h4><?php echo e($pending ?? ''); ?></h4>
	                                <p>Pending Listings</p>
	                            </div>
	                            <div class="right">
	                                <i class="la la-comments-o"></i>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-md-6 col-sm-6">
	                        <div class="ui-item bg-dark">
	                            <div class="left">
									<h4><?php echo e($all ?? ''); ?></h4>
	                                <p>Total Files</p>
	                            </div>
	                            <div class="right">
	                                <i class="la la-heart-o"></i>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="column col-lg-6 col-md-12">
	                    	<div class="comments-tab">
	                    		<h3 class='text-white'>Properties</h3>
                                <div class="tabs-box">
                                	<ul class="tab-buttons">
					                    <li data-tab="#pending" class="tab-btn active-btn">Pending</li>
					                    <li data-tab="#approved" class="tab-btn">Approved</li>
					                </ul>

                                    <div class="tabs-content" >
                                    	<!-- Tab Active tab-->
                						<div class="tab active-tab" id="pending">
                                            <div class="comments-area">
											
				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="<?php echo e(asset('storage').'/'); ?>" alt=""></figure>
				                                        <a href=""" target="_blank" class="reply-btn">View</a>
														<a href="" target="_blank" class="reply-btn">Update</a>
														<a href=""  class="reply-btn">Approve</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name text-white">title</div>
				                                        <span class="date"><i class="la la-calendar"></i>updated_at</span>
				                                        <div class="text">detail</div>
				                                    </div>
													
				                                </article>
											

					                        </div>
                                        </div>

                                    	<!-- Tab -->
                                        <div class="tab" id="approved">
                                            <div class="comments-area">
											
				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="<?php echo e(asset('storage').'/'); ?>" alt=""></figure>
				                                        <a href="" target="_blank" class="reply-btn">View</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name text-white">title</div>
				                                        <span class="date"><i class="la la-calendar"></i>updated_at</span>
				                                        <div class="text">detail</div>
				                                    </div>
				                                </article>
											


					                        </div>
                                        </div>
                                    </div>
                                </div>
	                    	</div>
	                    </div>
	                    <div class="column col-lg-6 col-md-12">
	                    	<div class="comments-tab">
	                    		<h3 class="text-white">Files</h3>
                                <div class="tabs-box">
                                	<ul class="tab-buttons">
					                    <!-- <li data-tab="#pending-2" class="tab-btn active-btn">Pending</li> -->
					                    <!-- <li data-tab="#approved-2" class="tab-btn">Approved</li> -->
					                </ul>

                                    <div class="tabs-content" >
                                    	<!-- Tab Active tab-->
                						<div class="tab active-tab" id="pending-2">
                                            <div class="comments-area">

												
													
														
														
														<article class="message-box">
															
																
																
															
															
															<div class="name">filename</div>
															<span class="date"><i class="la la-calendar"></i>updated at:</span>
															<span class="date"><i class="la la-calendar"></i>created at:</span>
															<div class="text">Price : </div>
														</article>
														
												
				                                <!--comment-->
				                                
					                        </div>
                                        </div>

                                    	<!-- Tab -->
                                        <!-- <div class="tab" id="approved-2">
                                            <div class="comments-area"> -->
				                                <!--comment-->
				                                
					                        </div>
                                        </div> 
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xxx/Desktop/php/defenceEstate1/defenceEstate1/resources/views/seller/index.blade.php ENDPATH**/ ?>