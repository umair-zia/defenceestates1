@extends('layouts.admin')

@section('content')
    <div class="dashboard">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style=color:#ffffff;>Welcome {{$user->name}}</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
					
					@if(session()->has('message'))
	                {{-- <div class="alert alert-success" role="alert"> --}}
						<div class="alert {{session('alert') ?? 'alert-info'}}">
	                    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	                    	<strong>Your listing</strong> {{ session('message') }}
	                    {{-- <strong>Your listing</strong> YOUR LISTING HAS BEEN APPROVED! --}}
						</div>
					@endif

	                <div class="row">
	                    <div class="col-lg-3 col-md-6 col-sm-6">
	                        <div class="ui-item bg-success">
	                            <div class="left">
	                                <h4>{{$total_listing ?? ''}}</h4>
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
	                                <h4>{{$active ?? '' }}</h4>
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
	                                <h4>{{$pending ?? ''}}</h4>
	                                <p>Pending Listings</p>
	                            </div>
	                            <div class="right">
	                                <i class="la la-comments-o"></i>
	                            </div>
	                        </div>
						</div>
						@if ($user->type == 'admin')
							
	                    <div class="col-lg-3 col-md-6 col-sm-6">
							<div class="ui-item bg-dark">
								<div class="left">
									<h4>{{$all ?? ''}}</h4>
	                                <p>Total Files</p>
	                            </div>
	                            <div class="right">
									<i class="la la-heart-o"></i>
	                            </div>
	                        </div>
	                    </div>
						@endif
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
											@foreach($ads_pending as $ad)
												@if($user->type == 'admin')
													<!--comment-->
													<article class="message-box">
														@foreach (json_decode($ad->images) as $img)
															@if ( $loop->iteration == 1)
																<div class="thumb-box">
																	<figure class="thumb"><img src="https://defenceestates1.s3.us-east-2.amazonaws.com/{{$img}}"  alt=""></figure>
																	<a href="{{ route('ads.show',['id' => $ad->id ])}}" target="_blank" class="reply-btn">View</a>
																	<a href="{{ route('admin.updateform', ['id' => $ad->id]) }}" target="_blank" class="reply-btn">Update</a>
																	@if($user->type == 'admin')
																		<a href="{{ route('admin.aprovelist', ['id' => $ad->id]) }}"  class="reply-btn">Approve</a>
																	@endif
																</div>
															@endif
														@endforeach
														<div class="content-box">
															<div class="name text-white">{{$ad->title}}</div>
															<span class="date"><i class="la la-calendar"></i>{{ $ad->updated_at }}</span>
															<div class="text">{{ $ad->detail }}</div>
														</div>
														
													</article>
												@else
													@if($ad->user_id == $user_id)
													<!--comment-->
														<article class="message-box">
															@foreach (json_decode($ad->images) as $img)
																@if ( $loop->iteration == 1)
																	<div class="thumb-box">	
																		<figure class="thumb"><img src="https://defenceestates1.s3.us-east-2.amazonaws.com/{{$img}}" alt=""></figure>
																		<a href="{{ route('ads.show',['id' => $ad->id ])}}" target="_blank" class="reply-btn">View</a>
																		<a href="{{ route('admin.updateform', ['id' => $ad->id]) }}" target="_blank" class="reply-btn">Update</a>
																	</div>
																@endif
															@endforeach
															<div class="content-box">
																<div class="name text-white">{{$ad->title}}</div>
																<span class="date"><i class="la la-calendar"></i>{{ $ad->updated_at }}</span>
																<div class="text">{{ $ad->detail }}</div>
															</div>															
														</article>
													@endif
												@endif												
											@endforeach
					                        </div>
                                        </div>

                                    	<!-- Tab -->
                                        <div class="tab" id="approved">
                                            <div class="comments-area">
											@foreach($ads_aproved as $ad)
												@if($user->type == 'admin')
												<article class="message-box">
													@foreach (json_decode($ad->images) as $img)
														@if ( $loop->iteration == 1)
															<div class="thumb-box">	
																<figure class="thumb"><img src="https://defenceestates1.s3.us-east-2.amazonaws.com/{{$img}}" alt=""></figure>
																<a href="{{route('ads.show',['id' => $ad->id ])}}" target="_blank" class="reply-btn">View</a>
															</div>
														@endif
													@endforeach
													<div class="content-box">
														{{-- <h3>{{$loop->iteration}}</h3> --}}
														<div class="name text-white">{{$ad->title}}</div>
														<span class="date"><i class="la la-calendar"></i>{{ $ad->updated_at }}</span>
														<div class="text">{{ $ad->detail }}</div>
													</div>
												</article>

												@else
													@if($ad->user_id == $user_id)
														<!--comment-->
														<article class="message-box">
															@foreach (json_decode($ad->images) as $img)
														@if ( $loop->iteration == 1)
															<div class="thumb-box">	
																<figure class="thumb"><img src="https://defenceestates1.s3.us-east-2.amazonaws.com/{{$img}}" alt=""></figure>
																<a href="{{route('ads.show',['id' => $ad->id ])}}" target="_blank" class="reply-btn">View</a>
															</div>
														@endif
													@endforeach
															<div class="content-box">
																<div class="name text-white">{{$ad->title}}</div>
																<span class="date"><i class="la la-calendar"></i>{{ $ad->updated_at }}</span>
																<div class="text">{{ $ad->detail }}</div>
															</div>
														</article>
													@endif
												@endif												
											@endforeach

					                        </div>
                                        </div>
                                    </div>
                                </div>
	                    	</div>
						</div>
							@if ($user->type == 'admin')
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
															@foreach ($files as $file)
																	<article class="message-box">
																		{{-- <div class="content-box"> --}}
																		<div class="name" style="color: #fff;">{{$file->filename}}</div>
																		<div class="name" style="color: #fff;">Phase : {{$file->phase}}</div>
																		<span class="date" style="color: #fff;"><i class="la la-calendar"></i>updated at: {{$file->updated_at}}</span>
																		<span class="date" style="color: #fff;"><i class="la la-calendar"></i>created at: {{$file->created_at}}</span>
																		<span class="text" style="color: #fff;"><i  style="color: #01C0DE;" class="la la-money"></i> Rs. {{$file->price }} </span>
																	</article>
															@endforeach
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
							@endif
						</div>
						{{-- </div> --}}
	                </div>
	            </div>
	            <p class="copyright-text" style="color: white;">© 2020 <a href="http://defenceestate.com/" style="color: #5ddaff">Defence Estate</a> All right reserved.</p>
	        </div>
	    </div>
	</div>
</div>
    
@endsection