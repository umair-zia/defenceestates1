@extends('layouts.admin')

@section('content')
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
			                            <form action="{{ route('files.update',$file->id) }}" method="POST" >
											@csrf
											@method('PUT')
										    <input type="hidden" value="yes" name="aproved">
                                                <div class="title" style="background-color: #2f4f4f"><h3>Update File Info</h3></div>
                                                    <div class="row">
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">File Name</label>
														<input type="text"  placeholder="File Name" name="filename" value="{{ isset($file) ? $file->filename : '' }}" required>
                                                        </div>

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">City</label>
                                                            <input type="text"  placeholder="City" name="city" value="{{ isset($file) ? $file->city : '' }}" required>
                                                        </div>
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">Phase</label>
                                                            <input type="text"  placeholder="Phase" name="phase" value="{{ isset($file) ? $file->block : '' }}" required>
                                                        </div>

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">File Type</label>
                                                            <select name="type" id="">
                                                                <option value="">Select Type</option>
                                                                <option >Commercial File</option>
                                                                <option >Residential File</option>
                                                            </select>
                                                        </div>
														
                                                        <!-- Form Group -->
														<div class="form-group col-lg-3 col-md-6 col-sm-12">
															<div class="range-slider-one clearfix">
																<label style="color: #FFFFFF">Land Area</label>
																<input type="text"  placeholder="Area" name="area" value="{{ isset($file) ? $file->area : '' }}" required>
															</div>
														</div>

														<!-- Form Group -->
														<div class="form-group col-lg-3 col-md-6 col-sm-12">
															<div class="range-slider-one clearfix">
																<label style="color: #FFFFFF">Unit</label>
																<select class="custom-select-box" name="unit" value="{{ isset($file) ? $file->unit : '' }}">
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
	            <p class="copyright-text" style="color: white;">© 2020 <a href="http://defenceestate.com/" style="color: #5ddaff">Defence Estate</a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>

@endsection