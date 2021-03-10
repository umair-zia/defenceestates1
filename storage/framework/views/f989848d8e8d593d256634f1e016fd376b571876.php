

<?php $__env->startSection('content'); ?>
    <div class="dashboard">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style=color:#ffffff;>Welcome <?php echo e($user->name); ?></h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
					
					<?php if(session()->has('message')): ?>
						<div class="alert <?php echo e(session('alert') ?? 'alert-info'); ?>">
	                    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	                    	<strong>Your listing</strong> <?php echo e(session('message')); ?>

						</div>
					<?php endif; ?>

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
						<?php if($user->type == 'admin'): ?>
							
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
						<?php endif; ?>
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
												<?php if($user->type == 'admin'): ?>
													<!--comment-->
													<article class="message-box">
														<?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<?php if( $loop->iteration == 1): ?>
																<div class="thumb-box">
																	<figure class="thumb"><img src="<?php echo e(asset('storage/properties').'/'.$img); ?>"  alt=""></figure>
																	<a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" target="_blank" class="reply-btn">View</a>
																	<a href="<?php echo e(route('admin.updateform', ['id' => $ad->id])); ?>" target="_blank" class="reply-btn">Update</a>
																	<?php if($user->type == 'admin'): ?>
																		<a href="<?php echo e(route('admin.aprovelist', ['id' => $ad->id])); ?>"  class="reply-btn">Approve</a>
																	<?php endif; ?>
																</div>
															<?php endif; ?>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<div class="content-box">
															<div class="name text-white"><?php echo e($ad->title); ?></div>
															<span class="date"><i class="la la-calendar"></i><?php echo e($ad->updated_at); ?></span>
															<div class="text"><?php echo e($ad->detail); ?></div>
														</div>
														
													</article>
												<?php else: ?>
													<?php if($ad->user_id == $user_id): ?>
													<!--comment-->
														<article class="message-box">
															<?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<?php if( $loop->iteration == 1): ?>
																	<div class="thumb-box">	
																		<figure class="thumb"><img src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt=""></figure>
																		<a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" target="_blank" class="reply-btn">View</a>
																		<a href="<?php echo e(route('admin.updateform', ['id' => $ad->id])); ?>" target="_blank" class="reply-btn">Update</a>
																	</div>
																<?php endif; ?>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															<div class="content-box">
																<div class="name text-white"><?php echo e($ad->title); ?></div>
																<span class="date"><i class="la la-calendar"></i><?php echo e($ad->updated_at); ?></span>
																<div class="text"><?php echo e($ad->detail); ?></div>
															</div>															
														</article>
													<?php endif; ?>
												<?php endif; ?>												
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                        </div>
                                        </div>

                                    	<!-- Tab -->
                                        <div class="tab" id="approved">
                                            <div class="comments-area">
											<?php $__currentLoopData = $ads_aproved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($user->type == 'admin'): ?>
												<article class="message-box">
													<?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if( $loop->iteration == 1): ?>
															<div class="thumb-box">	
																<figure class="thumb"><img src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt=""></figure>
																<a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" target="_blank" class="reply-btn">View</a>
															</div>
														<?php endif; ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<div class="content-box">
														<div class="name text-white"><?php echo e($ad->title); ?></div>
														<span class="date"><i class="la la-calendar"></i><?php echo e($ad->updated_at); ?></span>
														<div class="text"><?php echo e($ad->detail); ?></div>
													</div>
												</article>

												<?php else: ?>
													<?php if($ad->user_id == $user_id): ?>
														<!--comment-->
														<article class="message-box">
															<?php $__currentLoopData = json_decode($ad->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if( $loop->iteration == 1): ?>
															<div class="thumb-box">	
																<figure class="thumb"><img src="<?php echo e(asset('storage/properties').'/'.$img); ?>" alt=""></figure>
																<a href="<?php echo e(route('ads.show',['id' => $ad->id ])); ?>" target="_blank" class="reply-btn">View</a>
															</div>
														<?php endif; ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															<div class="content-box">
																<div class="name text-white"><?php echo e($ad->title); ?></div>
																<span class="date"><i class="la la-calendar"></i><?php echo e($ad->updated_at); ?></span>
																<div class="text"><?php echo e($ad->detail); ?></div>
															</div>
														</article>
													<?php endif; ?>
												<?php endif; ?>												
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					                        </div>
                                        </div>
                                    </div>
                                </div>
	                    	</div>
						</div>
							<?php if($user->type == 'admin'): ?>
								<div class="column col-lg-6 col-md-12">
										<div class="comments-tab">
											<h3 class="text-white">Files</h3>
											<div class="tabs-box">
												<ul class="tab-buttons">
													
												</ul>
												<div class="tabs-content" >
													<!-- Tab Active tab-->
													<div class="tab active-tab" id="pending-2">
														<div class="comments-area">
															<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<article class="message-box">
																		
																		<div class="name" style="color: #fff;"><?php echo e($file->filename); ?></div>
																		<div class="name" style="color: #fff;">Phase : <?php echo e($file->phase); ?></div>
																		<span class="date" style="color: #fff;"><i class="la la-calendar"></i>updated at: <?php echo e($file->updated_at); ?></span>
																		<span class="date" style="color: #fff;"><i class="la la-calendar"></i>created at: <?php echo e($file->created_at); ?></span>
																		<div class="text" style="color: #fff;">Price : Rs. <?php echo e($file->price); ?> </div>
																	</article>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
							<?php endif; ?>
						</div>
						
	                </div>
	            </div>
	            <p class="copyright-text" style="color: white;">© 2020 <a href="http://defenceestate.com/" style="color: #5ddaff">Defence Estate</a> All right reserved.</p>
	        </div>
	    </div>
	</div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\22-10-20\defenceEstate1\resources\views/admin/index.blade.php ENDPATH**/ ?>