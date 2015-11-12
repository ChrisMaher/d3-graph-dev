$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("php/spoilage/Daily.php", function(json) {

		    chart = new Highcharts.Chart({
              chart: {
              renderTo: 'chart-daily',

              },

	            title: {
	                text: 'Spoilage By Day',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
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
