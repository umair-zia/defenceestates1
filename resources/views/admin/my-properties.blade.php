@extends('layouts.admin')

@section('content')
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
	                                    <!-- <li><a href="{{route('admin.index')}}" style="color: white;">Index</a></li>
	                                    <li><a href="{{route('admin.index')}}" style="color: white;">Dashboard</a></li>
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
								@foreach($ads as $ad)
									@if($ad->user_id == $user->id)
										<!-- Property Block -->
										<div class="property-block">
											<div class="inner-box clearfix">
												<div class="image-box">
													@foreach($ad->images as $index => $img)
													<figure class="image"><img src="https://defenceestates1.s3.us-east-2.amazonaws.com/{{$img}}" alt=""></figure>
													@endforeach
												</div>
												<div class="content-box">
													<h3 style="color: #FFFFFF">{{ $ad->title }}</h3>
													<div class="location" style="color: white;"><i class="la la-map-marker"></i > {{ $ad->adress }}</div>
													<ul class="property-info clearfix"style="color: #FFFFFF">
														<li style="color: #FFFFFF"><i class="flaticon-dimension"></i >{{ $ad->area }} {{ $ad->unit }}</li>
														<li style="color: #FFFFFF"><i class="flaticon-bed"></i> {{ $ad->bedroom }} Bedrooms</li>
														<li style="color: #FFFFFF"><i class="flaticon-full-screen"></i> {{ $ad->kitchen }} Kitchen</li>
														<li style="color: #FFFFFF"><i class="flaticon-bathtub"></i> {{ $ad->bathroom }} Bathroom</li>
														
													</ul>
													<div style="color: #FFFFFF" lass="price">Rs. {{ $ad->demand }}</div>
												</div>
												<div class="option-box">
													<div  style="color: #FFFFFF" class="expire-date">{{ $ad->updated_at }}</div>
													<ul style="color: #FFFFFF" class="action-list">
														<li style="color: #FFFFFF" ><a href="{{ route('admin.updateform', ['id' => $ad->id]) }}"style="color: #FFFFFF"><i style="color: #FFFFFF" class="la la-edit"></i>Edit</a></li>
														
														<form  style="color: #FFFFFF" action="{{ route('ads.destroy', ['id' => $ad->id]) }}" method="POST">
															@csrf
															@method('DELETE')
															<li style="color: #FFFFFF"><button type="submit" style="color: #FFFFFF;background-color: #2e2e2e"><i class="la la-trash-o" style="color: #FFFFFF"></i> Delete</button></li>
														</form>
														
													</ul>
												</div>
											</div>
										</div>
									@endif
                                @endforeach  
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