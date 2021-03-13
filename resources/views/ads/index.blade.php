@extends('layouts.ads')

@section('content')
    <div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Properties</h1>
                <ul class="bread-crumb clearfix">
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Property Filter Section -->
    <section class="property-filter-section" style="background: #2e2e2e">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                        <h2 style="color: #FFFFFF;">PROPERTY TYPES</h2>
                    </div>

                    <!--Filter-->
                    <form action="{{ route('searchBar') }}" method="get">
                        <div class="filters col-md-3">
                            <input class="form-group" type="text"  placeholder="Search" name="search" style="position: relative; display: block; width: 100%; line-height: 28px; padding: 10px 20px; height: 50px;font-size: 14px; border: 1px solid #e0e0e0; border-radius: 6px;">
                        </div>
                    </form>
                </div>

                <div class="property-search-form" style="border: 4px solid #808080; padding: 15px; margin-bottom: 10px;">
                            <form action="/findP" method="POST" role="search">
                                
                                {{ csrf_field() }}
                            
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">city</label>
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
			                            <label style="color: #FFFFFF">Category</label>
			                                <select name="category"  id="mySelect1" onchange="myFunction1()" >
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
										    <select id="status1" name="type" >
												<option>Property Type</option>
                                                    <!--home-->       
										    </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Land Area</label>
											<input type="text"  placeholder="Area" name="area"> 
                                    {{--    <label style="color: #FFFFFF">Size</label>
                                        <select class="custom-select-box" name="size" id="size">
                                            <option value="1">1</option>
                                            <option value="2">2 Marla</option>
                                            <option value="5">5 Marla</option>
                                            <option value="7">7 Marla</option>
                                            <option value="10">10 Marla</option>
                                            <option value="20">20 Marla</option>
                                            <option value="1">1 Kanal</option>
                                            <option value="2">2 Kanal</option>
                                        </select> --}}
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label style="color: #FFFFFF">Unit</label>
												<select class="custom-select-box" name="unit" placeholder="Unit">
                                                    <option>Unit</option>
													<option>Square Feet</option>
													<option>Square Yards</option>
													<option>Square Meters</option>
													<option>Marla</option>
													<option>Kanal</option>
												</select>
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 text-center" style="margin-bottom: 0px">
                                        <button type="submit" class="theme-btn btn-style-two" style="background: #2f4f4f">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                
                    @if (count($ads) != 0)
                    <div class="filter-list row">
                        @foreach($ads as $ad)
                        <!-- Property Block -->
                        <div class="property-block all mix house villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box"style="border: solid #808080 3px; padding: 5px 5px;">
                                <div class="image-box">
                                <a href="{{route('ads.show',['id' => $ad->id ])}}">
                                @foreach(json_decode($ad->images) as $img)
                                @if ( $loop->iteration == 1)
                                    @if(isset($img))
                                        <figure class="image"><img style="height: 280px" src="https://defenceestates1.s3.us-east-2.amazonaws.com/{{$img}}" alt=""></figure>
                                    @endif
                                @endif
                                @endforeach
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <ul class="tags">
                                        
                                    </ul>
                                    <h3><a href="{{route('ads.show',['id' => $ad->id ])}}" style="color: #FFFFFF">{{$ad->title}}</a></h3>
                                    <div class="lucation" style="color: #FFFFFF"><i class="la la-map-marker"></i>{{$ad->adress}}</div>
                                    <ul class="property-info clearfix">
                                        @if ($ad->unit == 'Marla')
                                        <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>{{ $ad->area }} Marla
                                        @else
                                            @if ($ad->unit != 'Marla')
                                                @if ($ad->unit == 'Square Feet')
                                                <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>{{ round($ad->area/225, 2) }} Marla
                                                    <sup>
                                                        <a class="la la-info-circle" 
                                                        data-toggle="popover" 
                                                        title="Area Conversion" 
                                                        data-content="{{$ad->unit}}: ({{$ad->area}})">
                                                        </a>
                                                    </sup>
                                                @endif
                                                @if ($ad->unit == 'Square Yards')
                                                <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>{{ round($ad->area/25, 2) }} Marla
                                                    <sup>
                                                        <a class="la la-info-circle" 
                                                        data-toggle="popover" 
                                                        title="Area Conversion" 
                                                        data-content="{{$ad->unit}}: ({{$ad->area}})">
                                                        </a>
                                                    </sup>
                                                @endif
                                                @if ($ad->unit == 'Square Meters')
                                                <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>{{ round($ad->area/20.9, 2) }} Marla
                                                    <sup>
                                                        <a class="la la-info-circle" 
                                                        data-toggle="popover" 
                                                        title="Area Conversion" 
                                                        data-content="{{$ad->unit}}: ({{$ad->area}})">
                                                        </a>
                                                    </sup>
                                                @endif
                                                @if ($ad->unit == 'Kanal')
                                                <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>{{ $ad->area*20 }} Marla
                                                    <sup>
                                                        <a class="la la-info-circle" 
                                                        data-toggle="popover" 
                                                        title="Area Conversion" 
                                                        data-content="{{$ad->unit}}: ({{$ad->area}})">
                                                        </a>
                                                    </sup>
                                                @endif
                                            @endif
                                                
                                        @endif
                                        <li style="color: #FFFFFF"><i class="flaticon-bed"></i> {{$ad->bedroom}} Bedrooms</li>
                                        <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i> {{$ad->kitchen}} Kitchen</li>
                                        <li style="color: #FFFFFF"><i class="flaticon-bathtub"></i> {{$ad->bathroom}} Bathroom</li>
                                    </ul>
                                    <div class="property-price clearfix">
                                        <div class="read-more"><a href="{{route('ads.show',['id' => $ad->id ])}}" class="theme-btn btn-style-two" style="background: #2f4f4f">More Detail</a></div>
                                        <div class="price">Rs. {{$ad->demand}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="text-center">
                            <span  style="background: #2f4f4f"> {{ $ads->links() }}</span>
                        </div> --}}
    
    
                    </div>
    
                    @else
                    @csrf
                    @if(!$ads->isEmpty())
                        @foreach ($ads as $ad)
                            {{-- <div class="card-header">{{$ad->id}} -> {{$ad->title ?? "no date"}}</div> --}}
                            @endforeach
                            
                            <div class="result row">
                                    @php($last_id = $ad->id)
                            </div>
                        
                            <div class="load-more-btn text-center text-center">
                                <a  style="color: #FFFFFF" class="theme-btn btn-style-two" data-id="{{$last_id}}" id="loadMoreButton">Load More</a>
                            </div>
                    @else 
                        <h4 class="">No data</h4>
                    @endif
                    @endif
            </div>
        </div>
    </section>
    <!--End Property Filter Section -->


    <!--Clients Section-->

    <!--End Clients Section-->


    </div>

    <script>
            function myFunction1() {
                
            var x = document.getElementById("mySelect1").value;


            if(x === "Homes"){
                document.getElementById("status1").options[0]=new Option("Full House","Full House");
                document.getElementById("status1").options[1]=new Option("Flat","Flat");
                document.getElementById("status1").options[2]=new Option("Upper Portion","Upper Portion");
                document.getElementById("status1").options[3]=new Option("Lower Portion","Lower Portion");
                document.getElementById("status1").options[4]=new Option("Room","Room");
                document.getElementById("status1").options[5]=new Option("Seperate Gate","Seperate Gate");
                document.getElementById("status1").options[6]=new Option("Upper Lock Lower Portion","Upper Lock Lower Portion");
                document.getElementById("status1").options[7]=new Option("Lower Lock Upper Portion","Lower Lock Upper Portion");

            }
            else if(x === "Commercial"){
                document.getElementById("status1").options[0]=new Option("Commercial Building (Full)","Commercial Building (Full)");
                document.getElementById("status1").options[1]=new Option("Shop","Shop");
                document.getElementById("status1").options[2]=new Option("Factory","Factory");
                document.getElementById("status1").options[3]=new Option("Building (Basement)","Building (Basement)");
                document.getElementById("status1").options[4]=new Option("Building (Ground Floor)","Building (Ground Floor)");
                document.getElementById("status1").options[5]=new Option("Building (Mazinine)","Building (Mazinine)");
                document.getElementById("status1").options[6]=new Option("Building (1st Floor)","Building (1st Floor)");
                document.getElementById("status1").options[7]=new Option("Building (2nd Floor)","Building (2nd Floor)");
                document.getElementById("status1").options[8]=new Option("Building (3rd Floor)","Building (3rd Floor)");
                document.getElementById("status1").options[9]=new Option("Building (4th Floor)","Building (4th Floor)");
            }
            else if(x === "Plots"){
                var select = document.getElementById("status1");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                    select.options[i] = null;
                    }
                document.getElementById("status1").options[0]=new Option("Residential Plot","Residential Plot");
                document.getElementById("status1").options[1]=new Option("Commercial Plot","Commercial Plot");

            }
            else if(x === "Farm House"){
                var select = document.getElementById("status1");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                    select.options[i] = null;
                    }
                document.getElementById("status1").options[0]=new Option("Farm House","Farm House");
                document.getElementById("status1").options[1]=new Option("Farm-Plot","Farm-Plot");
            }

            else if(x === "Appartment"){
                var select = document.getElementById("status1");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                    select.options[i] = null;
                    }
                document.getElementById("status1").options[0]=new Option("Appartment","Appartment");
                
            }
            else if(x === ""){
                var select = document.getElementById("status1");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                    select.options[i] = null;
                    }
                
                
            }
        }
    </script>

<script>
document.getElementById("searchBar").addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
    	document.getElementById("Sfrom").submit();
		return false;
    }
});

$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>

<script>
    var token = $('input[name="_token"]').val();
    var id = {{$last_id ?? ''}};
    
        $(document).ready(function(){
            $("#loadMoreButton").click(function(){
                // $("#loadMoreButton").html("Loading...")
                $.ajax({
                    
                url: '{{route("loadmore.load_data")}}',
                method: 'POST',
                data: {
                    id:id,
                    _token: token,
                    test:'it getting data'
                },
                success: function(data) {
                        id = data[1];
                        console.log(data[1]);
                        $(".result").append(data[0]);
                }
            });
        });
    });


</script>   
@endsection

