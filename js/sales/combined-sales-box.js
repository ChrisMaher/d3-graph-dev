$(function () {

    $('#chart-box-combined').highcharts({

        chart: {
            type: 'heatmap',
            marginTop: 40,
            marginBottom: 80,
            plotBorderWidth: 1
        },


        title: {
            text: 'Monthly Sales Heatmap'
        },

        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
        },

        yAxis: {
            categories: ['7Up', 'Rockstar','Monster', 'Sprite', 'Lucozade', 'Fanta', 'Coke'],
            title: null
        },

        colorAxis: {
            min: 0,
            minColor: '#FFFFFF',
            maxColor: Highcharts.getOptions().colors[0]
        },

        legend: {
            align: 'right',
            layout: 'vertical',
            margin: 0,
            verticalAlign: 'top',
            y: 25,
            symbolHeight: 280
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> we sold <br><b>' +
                    this.point.value + 'K</b> cans of <br><b>' + this.series.yAxis.categories[this.point.y] + '</b>';
            }
        },

        // select SaleMonth, sum(profit)/1000, ShellType from factsales where ShellType="Lucozade" GROUP BY SaleMonth

        series: [{
            name: 'Sales per Shell',
            borderWidth: 1,
            data: [
            [0, 0, 1299], [0, 1, 1400], [0, 2, 1810], [0, 3, 1333], [0, 4, 1296], [0, 5, 1314], [0, 6, 6658],
            [1, 0, 1259], [1, 1, 890], [1, 2, 1423], [1, 3, 1863], [1, 4, 1061], [1, 5, 619], [1, 6, 5880],
            [2, 0, 1770], [2, 1, 1111], [2, 2, 1779], [2, 3, 1380], [2, 4, 1527], [2, 5, 1647], [2, 6, 6080],
            [3, 0, 1154], [3, 1, 1279], [3, 2, 1514], [3, 3, 1150], [3, 4, 1579], [3, 5, 2199], [3, 6, 6226],
            [4, 0, 1479], [4, 1, 1407], [4, 2, 1544], [4, 3, 1771], [4, 4, 1882], [4, 5, 1790], [4, 6, 6353],
            [5, 0, 1615], [5, 1, 1112], [5, 2, 1291], [5, 3, 1660], [5, 4, 1378], [5, 5, 1416], [5, 6, 6148],
            [6, 0, 1198], [6, 1, 1318], [6, 2, 1753], [6, 3, 2511], [6, 4, 1119], [6, 5, 1322], [6, 6, 5506],
            [7, 0, 1594], [7, 1, 970], [7, 2, 1777], [7, 3, 1304], [7, 4, 1638], [7, 5, 1675], [7, 6, 6105],
            [8, 0, 1141], [8, 1, 977], [8, 2, 1763], [8, 3, 1701], [8, 4, 1711], [8, 5, 1742], [8, 6, 5098],
            [9, 0, 2183], [9, 1, 1107], [9, 2, 1321], [9, 3, 1865], [9, 4, 1341], [9, 5, 1582], [9, 6, 5087],
            [10, 0, 1310], [10, 1, 2288], [10, 2, 760], [10, 3, 1914], [10, 4, 1485], [10, 5, 1258], [10, 6, 5575],
            [11, 0, 1711], [11, 1, 2004], [11, 2, 1108], [11, 3, 1354], [11, 4, 1709], [11, 5, 2029], [11, 6, 6180]
          ],
            dataLabels: {
                enabled: true,
                color: '#000000'
            }
        }]

    });
});
