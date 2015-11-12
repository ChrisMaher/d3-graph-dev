
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("php/sales/Combined.php", function(json) {

		    chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'chart-combined',
	                type: 'line',
	                marginRight: 130,
	                marginBottom: 25
	            },
	            title: {
	                text: 'Combined Monthly',
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
	                    text: 'Sales(Units)'
	                },
	                plotLines: [{
	                    value: 0,
	                    width: 1,
	                    color: '#808080'
	                }]
	            },
	            tooltip: {
                formatter: function() {
                        // return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> we sold <br><b>' +
                        //     this.y + '</b>-<br><b> Shells</b>';

                            if(this.series.xAxis.categories[this.point.x] == 'Oct'){return this.y + ' Sales <br> <b>1)</b> World Cup Brazil <br> <b>2)</b> Rugby World Cup <br> <b>3)</b> All Ireland Football Final <br> <b>4)</b> All Ireland Hurling Final <br> <b>5)</b> All Ireland Hurling Final Replay';}
                            		else if(this.series.xAxis.categories[this.point.x] == 'Mar'){return this.y + ' Sales <br> <b>1)</b> Winter Olympics';}
                            		else if(this.series.xAxis.categories[this.point.x] == 'Jul'){return this.y + ' Sales <br><b>1)</b> PGA Tour';}                   		
                            		else{return this.y + ' Sales <br> No Event';}
                            		// return 'Test';
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
