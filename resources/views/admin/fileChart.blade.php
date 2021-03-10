@extends('layouts.admin')

@section('content')

{{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    google.charts.load('current', {packages: ['corechart', 'line']});
    google.charts.setOnLoadCallback(drawVisualization);
    
    function drawVisualization() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Price');

        @foreach($data as $d)
            data.addRow([new Date({{$d->created_at->format('Y,m,d')}}), {{$d->price}}]);
            
        @endforeach

    
    
        // Create and draw the visualization.
        var chart = new google.visualization.ScatterChart(
            document.getElementById('chart_div'));
        chart.draw(data, {title: 'Defence Estate',
                        //   width: 400, height: 300,
                          vAxis: {title: "Price", titleTextStyle: {color: "green"}},
                          hAxis: {title: "Date", titleTextStyle: {color: "green"}},
                          lineWidth: 1}
                  );
    }
    
    
        // $(window).resize(function(){
        // 	drawBackgroundColor();
        // });
    
    </script> --}}

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <script>
        am4core.useTheme(am4themes_dark);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.XYChart);

        // Add data
        chart.data = generateChartData();

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.minGridDistance = 50;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueY = "visits";
        series.dataFields.dateX = "date";
        series.strokeWidth = 2;
        series.minBulletDistance = 10;
        series.tooltipText = "{valueY}";
        series.tooltip.pointerOrientation = "vertical";
        series.tooltip.background.cornerRadius = 20;
        series.tooltip.background.fillOpacity = 0.5;
        series.tooltip.label.padding(12, 12, 12, 12)

        // Add scrollbar
        chart.scrollbarX = new am4charts.XYChartScrollbar();
        chart.scrollbarX.series.push(series);

        // Add cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.xAxis = dateAxis;
        chart.cursor.snapToSeries = series;

        function generateChartData() {
        var chartData = [];
        var firstDate = new Date();
        firstDate.setDate(firstDate.getDate() - 1000);
        var visits = 0;
        @foreach($data as $d)
            // data.addRow([new Date({{$d->created_at->format('Y,m,d')}}), {{$d->price}}]);
            

            // we create date objects here. In your data, you can have date strings
            // and then set format of your dates using chart.dataDateFormat property,
            // however when possible, use date objects, as this will speed up chart rendering.
            // var newDate = new Date({{$d->created_at->format('Y,m,d')}});
            var d= {{$d->created_at->format('d')}};
            var m= {{$d->created_at->format('m')}};
            var Y= {{$d->created_at->format('Y')}};

            var newDate = new Date(Y,m-1,d);
            console.log(newDate);
            newDate.setDate(newDate.getDate());


            visits = {{$d->price}};

            chartData.push({
            date: newDate,
            visits: visits
            });
        @endforeach

        return chartData;
        }
    </script>


<div>
    
    <div class="dashboard" style="background-color: #2e2e2e">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4 style="color: #FFFFFF">File Price Chart</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    
	                                    <li class="active"> <a href="{{route('files.create')}}" style="color: white;">Back</a></li>
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
			                            <form action="{{ route('files.data.store',[$file->id]) }}" method="POST" >
                                         @csrf
                                         @method('POST')
										    <input type="hidden" value="yes" name="aproved">
                                                <div class="title" style="background-color: #2f4f4f"><h3>Update Price</h3></div>
                                                    <div class="row">
                                                        
                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <label style="color: #FFFFFF">Price</label>
                                                            <input type="text"  placeholder="New Price" name="price" required>
                                                        </div>

                                                        <!-- Form Group -->
                                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                            <button type="submit" class="theme-btn btn-style-one">New Price</button>
                                                        </div>
                                                    </div>

                                                <div class="title" style="background-color: #2f4f4f"><h3>Price Chart</h3></div>
                                                <div class="row">
                                                    <div class="container-fluid">
														<div id="chartdiv" style="width: auto; height: 60vh;"></div>
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