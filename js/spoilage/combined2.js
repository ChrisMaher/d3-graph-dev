$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("php/spoilage/Combined2.php", function(json) {

		    chart = new Highcharts.Chart({
              chart: {
              renderTo: 'chart-combined2',

              },

	            title: {
	                text: 'Spoilage Comparison',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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
