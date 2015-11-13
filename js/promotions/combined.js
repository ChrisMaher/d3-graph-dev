
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("php/promotions/Combined.php", function(json) {

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
	                    value: 14700000,
	                    width: 2,
	                    color: '#808080',
	                    label: {
                        text: 'Year Average (14.7m)'
                    }
	                }]
	            },
	          
	            tooltip: {
                formatter: function() {
                        // return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> we sold <br><b>' +
                        //     this.y + '</b>-<br><b> Shells</b>';

                                         if(this.series.xAxis.categories[this.point.x] == 'May'){return this.y + ' Sales <br> May Sprite Promotion';}
                            		else if(this.series.xAxis.categories[this.point.x] == 'Jun'){return this.y + ' Sales <br> June 7UP Promotion';}
                            		else if(this.series.xAxis.categories[this.point.x] == 'Oct'){return this.y + ' Sales <br> October Monster Promotion';} 
                            		else if(this.series.xAxis.categories[this.point.x] == 'Apr'){return this.y + ' Sales <br> April Fanta Promotion';}                   		
                            		else{return this.y + ' Sales <br> No Promotion';}
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
