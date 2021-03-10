@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>{{$name ?? 'n/a'}}</h3>
                    <h3>{{$type ?? 'n/a'}}</h3>
                    <h3>{{$phase ?? 'n/a'}}</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- <form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="title" style="background-color: #2f4f4f"><h3>Basic Info</h3></div>
           <div class="row">  
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
                   <select name="type" id="mySelect" onchange="myFunction()" >
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
                   </select>
               </div>
               <div class="form-group col-lg-3 col-md-6 col-sm-12">
                   <label style="color: #FFFFFF">Phase</label>
                   <input type="text"  placeholder="Phase" name="phase" required>
               </div>
               <!-- Form Group -->
               <div class="form-group col-lg-3 col-md-6 col-sm-12">
                   <label style="color: #FFFFFF">Kitchen</label>
                   <input type="text"  placeholder="Kitchen" name="kitchen" >
               </div>
               <!-- Form Group -->
               <div class="form-group col-lg-3 col-md-6 col-sm-12">
                   <label style="color: #FFFFFF">Bed Room</label>
                   <input type="text"  placeholder="Bed Room" name="bedroom" >
               </div>
               <div class="form-group col-lg-3 col-md-6 col-sm-12">
                   <label style="color: #FFFFFF">Bathroom</label>
                   <input type="text"  placeholder="Bathroom" name="bathroom" >
               </div>
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

           </div> --}}

</div>
@endsection
