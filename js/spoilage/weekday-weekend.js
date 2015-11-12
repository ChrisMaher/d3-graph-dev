$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("php/spoilage/Weekday-weekend.php", function(json) {

		    chart = new Highcharts.Chart({
              chart: {
              renderTo: 'chart-weekday-weekend',

              },

	            title: {
	                text: 'Weekday / Weekend',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: ['Weekend/Weekday']
	            },


	            legend: {
	                layout: 'vertical',
	                align: 'right',
	                verticalAlign: 'top',
	                x: -10,
	                y: 100,
	                borderWidth: 0
	            },
	            series: json
	        });
	    });

    });

});
