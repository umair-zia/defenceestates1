

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
	                                <h4><?php echo e($all ?? ''); ?></h4>
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
	                                <h4><?php echo e($active); ?></h4>
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
	                                <h4><?php echo e($pending); ?></h4>
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
	                                <h4>0</h4>
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
											<?php $__currentLoopData = $ads_pending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="<?php echo e(asset('storage').'/'.$ad->image1); ?>" alt=""></figure>
				                                        <a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" target="_blank" class="reply-btn">View</a>
														<a href="<?php echo e(route('admin.updateform', ['id' => $ad->id])); ?>" target="_blank" class="reply-btn">Update</a>
														<a href="#" target="_blank" class="reply-btn">Approve</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name text-white"><?php echo e($ad->title); ?></div>
				                                        <span class="date"><i class="la la-calendar"></i><?php echo e($ad->updated_at); ?></span>
				                                        <div class="text"><?php echo e($ad->detail); ?></div>
				                                    </div>
													
				                                </article>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					                        </div>
                                        </div>

                                    	<!-- Tab -->
                                        <div class="tab" id="approved">
                                            <div class="comments-area">
											<?php $__currentLoopData = $ads_aproved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="<?php echo e(asset('storage').'/'.$ad->image1); ?>" alt=""></figure>
				                                        <a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" target="_blank" class="reply-btn">View</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name text-white"><?php echo e($ad->title); ?></div>
				                                        <span class="date"><i class="la la-calendar"></i><?php echo e($ad->updated_at); ?></span>
				                                        <div class="text"><?php echo e($ad->detail); ?></div>
				                                    </div>
				                                </article>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-1.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Monija Moro</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>

				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-2.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Mibano Rests</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>

				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-3.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Cojari Barna</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>
					                        </div>
                                        </div>

                                    	<!-- Tab -->
                                        <!-- <div class="tab" id="approved-2">
                                            <div class="comments-area">
				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-1.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Monija Moro</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>

				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-2.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Mibano Rests</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>

				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-3.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Cojari Barna</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Umair Zia\Documents\laravel\defenceEstate\resources\views/admin/index.blade.php ENDPATH**/ ?>