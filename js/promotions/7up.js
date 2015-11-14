
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("php/promotions/7up.php", function(json) {

		    chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'chart-7Up',
	                type: 'line',
	                marginRight: 130,
	                marginBottom: 25
	            },
	            title: {
	                text: '7Up Monthly',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            },
	            yAxis: {
	                title: {
	                    text: 'Sales(Shells)'
	                },
	                plotLines: [{
	                    value: 2000000,
	                    width: 2,
	                    color: '#808080',
	                    label: {
                        text: 'Year Average (2.1m)'
                    }
	                }]
	            },
	            tooltip: {
	             formatter: function() {
                          return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> we sold <br><b>' +
                              this.y + '</b> cans of <br><b>'+ this.series.name +'</b>';
	                }
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
