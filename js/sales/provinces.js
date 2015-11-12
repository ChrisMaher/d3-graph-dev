
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("php/sales/Provinces.php", function(json) {

          chart = new Highcharts.Chart({
   chart: {
   renderTo: 'provinces',
   type:
          'column',
   },
   title: {
   text: 'Provinces Breakdown',
   x: -20 //center
   },
          subtitle: {
   text: '',
   x: -20
   },
   xAxis: {
   categories: [
   'Jan',
   'Feb',
   'Mar',
   'Apr',
   'May',
   'Jun',
   'Jul',
   'Aug',
   'Sep',
   'Oct',
          'Nov',
   'Dec'
   ],
   crosshair: true
   },
   yAxis: {
   min: 0,
   title: {
   text:
          'Rainfall (mm)'
   }
   },
  //  tooltip: {
  //  headerFormat: '<span
  //         style="font-size:10px">{point.key}</span><table>',
  //  pointFormat: '<tr><td
  //         style="color:{series.color};padding:0">{series.name}: </td>' +
  //  '<td
  //         style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
  //  footerFormat:
  //         '</table>',
  //  shared: true,
  //  useHTML: true
  //  },
   plotOptions: {
              column: {
                  pointPadding: 0.2,
                  borderWidth: 0
              }
          },
   series: json
   });

 });

    });

});
