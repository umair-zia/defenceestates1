@extends('layouts.ads')

@section('content')

    {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
    google.charts.load('current', {packages: ['corechart', 'line']});
    @foreach($files as $file)
    
    google.charts.setOnLoadCallback(drawVisualization{{$file->id}});
    
    function drawVisualization{{$file->id}}() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', '');

        @foreach($file->filesData as $d)
            data.addRow([new Date({{$d->created_at->format('Y,m,d')}}), {{$d->price}}]);
            
        @endforeach

    
    
        // Create and draw the visualization.
        var chart = new google.visualization.ScatterChart(
            document.getElementById('chart_div{{$file->id}}'));
        chart.draw(data, {title: '',backgroundColor: '#404040',colors: ['#eaed1f'],
                        //   width: 400, height: 300,
                          vAxis: {title: "Rs.",textStyle: {color: '#ffffff'}, titleTextStyle: {color: "white"}},
                          hAxis: {title: "Date",textStyle: {color: '#ffffff'}, titleTextStyle: {color: "white"}},
                          lineWidth: 1}
                  );
    }
    
    @endforeach
    </script> --}}

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
@foreach($files as $file)
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_dark);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create('chartdiv{{$file->id}}', am4charts.XYChart);

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
series.tooltip.label.padding(12,12,12,12)

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
        @foreach($file->filesData as $d)
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

}); // end am4core.ready()
</script>
@endforeach

    <div>    
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/main3.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Files</h1>
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
                            <span class="title">FIND THE FILES</span>
                            <h2 style="color: #FFFFFF;">FILES</h2>
                        </div>

                        <!--Filter-->
                        <form action="{{ route('file.search') }}" method="get">
                            <div class="filters col-md-3">
                                <input class="form-group" type="text" placeholder="Search" name="search" style="position: relative; display: block; width: 100%; line-height: 28px; padding: 10px 20px; height: 50px;font-size: 14px; border: 1px solid #e0e0e0; border-radius: 6px;">
                            </div>
                        </form>
                        
                    </div>

                    <div class="filter-list row">
                        <!-- Property Block -->
                        @foreach($files as $file)
                        <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                                <div class="image-box">
                                <div id="chartdiv{{$file->id}}" style="width: auto; height: 50vh;"></div>
                                </div>
                                <div class="lower-content">
                                <h3><a href="#" style="color: #FFFFFF">{{$file->city}}</a></h3>
                                    
                                    <ul class="property-info clearfix">
                                        
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>{{$file->area}} {{$file->unit}}</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>Rs. {{$file->price}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
        <!--End Property Filter Section -->


    </div>
    <script>
        $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
        });
    </script>
@endsection