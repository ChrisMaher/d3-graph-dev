$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("php/spoilage/Supervisor.php", function(json) {

		    chart = new Highcharts.Chart({
              chart: {
              renderTo: 'chart-supervisor',

              },

	            title: {
	                text: 'Supervisor Comparison',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: ['Philip Berry', 'Harold Brooks', 'Juan Reid', 'Samuel Dixon', 'Jack Bailey', 'Sean Bell', 'George Harris', 'Scott Hernandez',
                  'Jason Vasquez', 'Terry Henderson', 'Henry Dixon', 'Jack Hamilton']                
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
