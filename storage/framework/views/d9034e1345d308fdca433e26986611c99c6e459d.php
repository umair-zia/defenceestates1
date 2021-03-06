

<?php $__env->startSection('content'); ?>
    <div class="dashboard" style="background-color: #2e2e2e">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style="color: #FFFFFF">Submit Property</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                   
	                                    <!-- <li class="active">Submit Property</li> -->
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
			                            <form action="<?php echo e(route('ads.store')); ?>" method="POST" enctype="multipart/form-data">
										 <?php echo csrf_field(); ?>
										 <input type="hidden" value="yes" name="aproved">
										<div class="title" style="background-color: #2f4f4f"><h3>Basic Info</h3></div>
			                                <div class="row">
			                                	
                                                
                                                <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Status</label>
			                                        <select class="custom-select-box" name="status">
			                                            <option>Rent</option>
			                                            <option>Sale</option>
			                                        </select>
			                                    </div>
                                                
                                                <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">City</label>
			                                        <select class="custom-select-box" name="city">
			                                            <option>DHA Lahore</option>
                                                        <option>DHA Raya(Lahore)</option>
                                                        <option>DHA Multan</option>
                                                        <option>DHA Bahawalpur</option>
                                                        <option>DHA Gujranwala</option>
                                                        <option>DHA Peshawar</option>
			                                            <option>DHA Quetta</option>
			                                        </select>
			                                    </div>
                                                
                                                <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Property Title</label>
			                                        <input type="text"  placeholder="Property Title" name="title" required>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Category</label>
			                                        <select name="category" id="mySelect" onchange="myFunction()" >
		                                                <option value="">Category</option>
		                                                <option value="Homes">Homes</option>
		                                                <option value="Commercial">Commercial</option>
                                                        <option value="Appartment">Appartment</option>
		                                                <option value="Plots">Plots</option>
                                                        <option value="Farm House">Farm House</option>
		                                            </select>
			                                    </div>
                                                
                                                
                                                
												<!-- Form Group -->
												<div class="form-group col-lg-3 col-md-6 col-sm-12">
													<label style="color: #FFFFFF">Property Type</label>
													<select id="status" name="type" >
														<option>Property Type</option>
                                                        <!--home-->
														
                                                        
                                                        
													</select>
                                                </div>

                                                <!-- Form Group -->

												<!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Phase</label>
			                                        <input type="text"  placeholder="Phase" name="phase" required>
			                                    </div>
			                                    <!-- <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Phases</label>
			                                        <select class="custom-select-box" name="phase">
		                                                <option>Phase</option>
		                                                <option>Phase 1</option>
		                                                <option>Phase 2</option>
		                                                <option>Phase 3</option>
														<option>Phase 4</option>
		                                                <option>Phase 5</option>
		                                                <option>Phase 6</option>
		                                            </select>
			                                    </div> -->
												
												<!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Kitchen</label>
			                                        <input type="text"  placeholder="Kitchen" name="kitchen" >
			                                    </div>

			                                    <!-- <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label style="color: #FFFFFF">Kitchen</label>
			                                         	<select class="custom-select-box" name="kitchen">
				                                            <option>Kitchen</option>
															<option>00</option>
				                                            <option>01</option>
				                                            <option>02</option>
				                                            <option>03</option>
				                                            <option>04</option>
				                                            <option>05</option>
				                                        </select>
			                                        </div>
			                                    </div> -->

			                                    <!-- Form Group -->
												<div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Bed Room</label>
			                                        <input type="text"  placeholder="Bed Room" name="bedroom" >
			                                    </div>
												
			                                    <!-- <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label style="color: #FFFFFF">Bed Room</label>
			                                         	<select class="custom-select-box" name="bedroom">
				                                            <option>Bed Room</option>
															<option>00</option>
				                                            <option>01</option>
				                                            <option>02</option>
				                                            <option>03</option>
				                                            <option>04</option>
				                                            <option>05</option>
				                                        </select>
			                                        </div>
			                                    </div> -->

			                                    <!-- Form Group -->

												<div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Bathroom</label>
			                                        <input type="text"  placeholder="Bathroom" name="bathroom" >
			                                    </div>
			                                    <!-- <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label style="color: #FFFFFF">Bathroom</label>
			                                         	<select class="custom-select-box" name="bathroom">
				                                            <option>Bathroom</option>
															<option>00</option>
				                                            <option>01</option>
				                                            <option>02</option>
				                                            <option>03</option>
				                                            <option>04</option>
				                                            <option>05</option>
				                                        </select>
			                                        </div>
			                                    </div> -->

												<!-- Form Group -->
												<div class="form-group col-lg-3 col-md-6 col-sm-12">
													<div class="range-slider-one clearfix">
														<label style="color: #FFFFFF">Demand (RS)</label>
														<input type="text"  placeholder="Rupees PKR" name="demand" required>
													</div>
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

			                                </div>

			                                <div class="title" style="background-color: #2f4f4f"><h3>Address</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Address</label>
			                                        <input type="text" name="adress" placeholder="Address" required>
			                                    </div>

												

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Postal Code</label>
			                                        <input type="text" name="postal" placeholder="Postal Code" required>
			                                    </div>

			                                </div>

											<?php if(session()->has('message')): ?>
												<div class="alert <?php echo e(session('alert') ?? 'alert-info'); ?>">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">??</span></button>
													<strong>Your listing</strong> <?php echo e(session('message')); ?>

												</div>
											<?php endif; ?>
			                                <div class="title" style="background-color: #2f4f4f"><h3>Property Gallery</h3></div>
			                                <div class="row col-lg-12 col-md-12 col-sm-12">
			                                	<!-- Form Group -->
			                                    
												<div class="custom-file pmd-custom-file">
													<input class="custom-file-input" type="file" name="photos[]" id="img" multiple="multiple" accept="image/*">
													<label class="custom-file-label" for="img">Choose Images</label>
												</div>

												
													

													
													
			                                </div>

			                                <div class="title" style="background-color: #2f4f4f"><h3>Detailed Information</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                    	<textarea name="detail" placeholder="Detailed Information"></textarea>
			                                    </div>
			                                </div>

			                                <div class="title" style="background-color: #2f4f4f"><h3>Features (optional)</h3></div>
			                                <div class="row">
                                                
                                                <!--Home,Appartment,Plot,Commercilas,Fram-house,Raya feature,-->
			                                	<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-1" value="Brand New">
					                                    <label for="service-1" style="background: #2e2e2e; color: #FFFFFF">Brand New</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-2" value="Used"> 
					                                    <label for="service-2" style="background: #2e2e2e; color: #FFFFFF">Used</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-3" value="DP, Poll, Transformer Clear"> 
					                                    <label for="service-3" style="background: #2e2e2e; color: #FFFFFF">DP, Poll, Transformer Clear</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-4" value="Non-Furnished"> 
					                                    <label for="service-4" style="background: #2e2e2e; color: #FFFFFF">Non-Furnished</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-5" value="Semi-Furnished"> 
					                                    <label for="service-5" style="background: #2e2e2e; color: #FFFFFF">Semi-Furnished</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-6" value="Furnished"> 
					                                    <label for="service-6" style="background: #2e2e2e; color: #FFFFFF">Furnished</label>
					                                </div>
					                            </div>
                                                
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-7" value="Floors"> 
					                                    <label for="service-7" style="background: #2e2e2e; color: #FFFFFF">Floors</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-8" value="Corner"> 
					                                    <label for="service-8" style="background: #2e2e2e; color: #FFFFFF">Corner</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-9" value="Servant Quarter"> 
                                                        <!-- Not Add in plot or COmmercial-->
					                                    <label for="service-9" style="background: #2e2e2e; color: #FFFFFF">Servant Quarter</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-10" value="Swimming Pool"> 
					                                    <label for="service-10" style="background: #2e2e2e; color: #FFFFFF">Swimming Pool</label>
					                                </div>
					                            </div>
                                                <!-- Extra Feature Home-->

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-11" value="Cenima"> 
					                                    <label for="service-11" style="background: #2e2e2e; color: #FFFFFF">Cenima</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-12" value="Gym"> 
					                                    <label for="service-12" style="background: #2e2e2e; color: #FFFFFF">Gym</label>
					                                </div>
					                            </div>
                                                <!-- Extra Feature Plot-->
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-13" value="Posession"> 
					                                    <label for="service-13" style="background: #2e2e2e; color: #FFFFFF">Posession</label>
					                                </div>
                                                    
                                                <!-- Extra Feature Appartment or Commercial-->    
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-14" value="Lift"> 
					                                    <label for="service-14" style="background: #2e2e2e; color: #FFFFFF">Lift</label>
					                                </div>
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-15" value="Electricity Backup"> 
					                                    <label for="service-15" style="background: #2e2e2e; color: #FFFFFF">Electricity Backup</label>
					                                </div>
                                                <!-- Farm-House-->
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-16" value="Lush Green Lawns"> 
					                                    <label for="service-16" style="background: #2e2e2e; color: #FFFFFF">Lush Green Lawns</label>
					                                </div>
                                                <!-- Raya-->
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-17" value="Golf Course View"> 
					                                    <label for="service-17" style="background: #2e2e2e; color: #FFFFFF">Golf Course View</label>
					                                </div>
					                            </div>
												<!--Same Feature All property-->
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-18" value="Facing Park"> 
					                                    <label for="service-18" style="background: #2e2e2e; color: #FFFFFF">Facing Park</label>
					                                </div>
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-19" value="DHA Security"> 
					                                    <label for="service-19" style="background: #2e2e2e; color: #FFFFFF">DHA Security</label>
					                                </div>
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-20" value="Nearby Restaurent"> 
					                                    <label for="service-20" style="background: #2e2e2e; color: #FFFFFF">Nearby Restaurent</label>
					                                </div>
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-21" value="Nearby School/College"> 
					                                    <label for="service-21" style="background: #2e2e2e; color: #FFFFFF">Nearby School/College</label>
					                                </div>
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-22" value="Nearby Hospital"> 
					                                    <label for="service-22" style="background: #2e2e2e; color: #FFFFFF">Nearby Hospital</label>
					                                </div>
					                            </div>
												<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-23" value="Nearby Shopping Mall"> 
					                                    <label for="service-23" style="background: #2e2e2e; color: #FFFFFF">Nearby Shopping Mall</label>
					                                </div>
					                            </div>
                                                
                                                
					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="shipping-option[]" id="service-24" value="Other Nearby Amenities"> 
					                                    <label for="service-24" style="background: #2e2e2e; color: #FFFFFF">Other Nearby Amenities</label>
					                                </div>
					                            </div>
			                                </div>

			                                <div class="title" style="background-color: #2f4f4f"><h3>Contact Info</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Name</label>
			                                        <input type="text" name="name" placeholder="Name" required>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Email</label>
			                                        <input type="email" name="email" placeholder="Email" required>
			                                    </div>

												<!-- Form Group -->
												<div class="form-group col-lg-3 col-md-6 col-sm-12">
													<label style="color: #FFFFFF">Phone Number</label>
													<input type="text" name="phone" placeholder="Phone Number" required>
												</div>

			                                    <!-- Form Group -->
			                                    <!-- <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label style="color: #FFFFFF">Phone</label>
			                                        <input type="text" name="phone" placeholder="Phone" required>
			                                    </div> -->

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                    	<button type="submit" class="theme-btn btn-style-one" style="background: #2f4f4f"> Submit Property</button>
			                                    </div>
			                                </div>
			                            </form>
			                        </div>
	                    		</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
	            <p class="copyright-text" style="color: white;">?? 2020 <a href="http://defenceestate.com/" style="color: #5ddaff">Defence Estate</a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>







<script>
function myFunction() {
	
  var x = document.getElementById("mySelect").value;


  if(x === "Homes"){
	document.getElementById("status").options[0]=new Option("Full House","Full House");
	document.getElementById("status").options[1]=new Option("Flat","Flat");
	document.getElementById("status").options[2]=new Option("Upper Portion","Upper Portion");
	document.getElementById("status").options[3]=new Option("Lower Portion","Lower Portion");
	document.getElementById("status").options[4]=new Option("Room","Room");
	document.getElementById("status").options[5]=new Option("Seperate Gate","Seperate Gate");
	document.getElementById("status").options[6]=new Option("Upper Lock Lower Portion","Upper Lock Lower Portion");
	document.getElementById("status").options[7]=new Option("Lower Lock Upper Portion","Lower Lock Upper Portion");

  }
  else if(x === "Commercial"){
	document.getElementById("status").options[0]=new Option("Commercial Building (Full)","Commercial Building (Full)");
	document.getElementById("status").options[1]=new Option("Shop","Shop");
	document.getElementById("status").options[2]=new Option("Factory","Factory");
	document.getElementById("status").options[3]=new Option("Building (Basement)","Building (Basement)");
	document.getElementById("status").options[4]=new Option("Building (Ground Floor)","Building (Ground Floor)");
	document.getElementById("status").options[5]=new Option("Building (Mazinine)","Building (Mazinine)");
	document.getElementById("status").options[6]=new Option("Building (1st Floor)","Building (1st Floor)");
	document.getElementById("status").options[7]=new Option("Building (2nd Floor)","Building (2nd Floor)");
	document.getElementById("status").options[8]=new Option("Building (3rd Floor)","Building (3rd Floor)");
	document.getElementById("status").options[9]=new Option("Building (4th Floor)","Building (4th Floor)");
  }
  else if(x === "Plots"){
	var select = document.getElementById("status");
		var length = select.options.length;
		for (i = length-1; i >= 0; i--) {
		select.options[i] = null;
		}
	document.getElementById("status").options[0]=new Option("Residential Plot","Residential Plot");
	document.getElementById("status").options[1]=new Option("Commercial Plot","Commercial Plot");

  }
  else if(x === "Farm House"){
	var select = document.getElementById("status");
		var length = select.options.length;
		for (i = length-1; i >= 0; i--) {
		select.options[i] = null;
		}
	document.getElementById("status").options[0]=new Option("Farm House","Farm House");
	document.getElementById("status").options[1]=new Option("Farm-Plot","Farm-Plot");
  }

  else if(x === "Appartment"){
	var select = document.getElementById("status");
		var length = select.options.length;
		for (i = length-1; i >= 0; i--) {
		select.options[i] = null;
		}
	document.getElementById("status").options[0]=new Option("Appartment","Appartment");
	
  }
  else if(x === ""){
	var select = document.getElementById("status");
		var length = select.options.length;
		for (i = length-1; i >= 0; i--) {
		select.options[i] = null;
		}
	
	
  }
}
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\22-10-20\defenceEstate1\resources\views/admin/submit-property.blade.php ENDPATH**/ ?>