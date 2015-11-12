<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta
http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport"
content="width=device-width, initial-scale=1">

    <title>Sales Reports</title>

 <meta name="description" content="">
 <meta name="author" content="Rexam">

 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
 <script src="http://code.highcharts.com/highcharts.js"></script>
 <script src="http://code.highcharts.com/modules/heatmap.js"></script>
 <script src="http://code.highcharts.com/modules/exporting.js"></script>
 <script src="http://code.highcharts.com/modules/data.js"></script>
 <script src="http://code.highcharts.com/stock/highstock.js"></script>

 <script src="js/spoilage/combined.js?n=2"></script>
 <script src="js/spoilage/combined2.js?n=1"></script>
 <script src="js/spoilage/daily.js?n=1"></script>
 <script src="js/spoilage/weekday-weekend.js?n=1"></script>
 <script src="js/spoilage/supervisor.js?n=1"></script>



  </head>
 <body>

  <!-- load the d3.js library -->

  <div class="container-fluid">


    <div class="col-md-12"
      <div id="chart-combined"  style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
     <div class="col-md-12"
      <div id="chart-combined2"  style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div class="col-md-8"
      <div id="chart-daily"  style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div class="col-md-4"
      <div id="chart-weekday-weekend"  style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
    <div class="col-md-12"
      <div id="chart-supervisor"  style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>






 </div>

  </body>
 </html>
