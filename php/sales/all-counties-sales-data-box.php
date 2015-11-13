<!-- <?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("datawarehousing", $con);

// $sth = mysql_query("SELECT SUM(Profit) as profits, County, SaleMonth FROM FactSales GROUP BY County, SaleMonth);
// $rows = array();
// $rows1['value'] = 'profits';
// $rows1['x'] = 'County';
// $rows2['y'] = 'SaleMonth';
// while($r = mysql_fetch_array($sth)) {
//     $rows['data'][] = $r['profit'];
//     $rows1['data'][] = $r['county'];
//     $rows2['data'][] = $r['salemonth'];
// }

// $sth = mysql_query("Select SUM(Profit)/1000 as profitSum From FactSales GROUP BY SaleMonth, ShellType");
// $rows1 = array();
// $rows1['datalabels']['enabled'] = 'true';
// $rows1['datalabels']['color'] = '#000000';
// while($rr = mysql_fetch_assoc($sth)) {
//
//     $rows2['0'][] = $rr['profitSum'];
//     // $rows3['1'][] = $rr['profitSum'];
//     // $rows4['2'][] = $rr['profitSum'];
//     // $rows5['3'][] = $rr['profitSum'];
//     // $rows6['4'][] = $rr['profitSum'];
//     // $rows7['5'][] = $rr['profitSum'];
//     // $rows2['6'][] = $rr['profitSum'];
//     // $rows3['7'][] = $rr['profitSum'];
//     // $rows4['8'][] = $rr['profitSum'];
//     // $rows5['9'][] = $rr['profitSum'];
//     // $rows6['10'][] = $rr['profitSum'];
//     // $rows7['11'][] = $rr['profitSum'];
// }
//
// $result = array();
// array_push($result,$rows1);
// array_push($result,$rows2);
// // array_push($result,$rows3);
// // array_push($result,$rows4);
// // array_push($result,$rows5);
// // array_push($result,$rows6);
// // array_push($result,$rows7);
// // array_push($result,$rows8);
// // array_push($result,$rows9);
// // array_push($result,$rows10);
// // array_push($result,$rows11);
// // array_push($result,$rows12);


print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?> -->
