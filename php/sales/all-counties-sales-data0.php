<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("datawarehousing", $con);

// $sth = mysql_query("SELECT SUM(Profit), County, SaleMonth FROM FactSales GROUP BY County, SaleMonth);
// $rows = array();
// $rows1['name'] = 'shellID';
// -- $rows1['name'] = 'County';
// -- $rows2['name'] = 'SaleMonth';
// while($r = mysql_fetch_array($sth)) {
//     $rows['data'][] = $r['profit'];
//     -- $rows1['data'][] = $r['county'];
//     -- $rows2['data'][] = $r['salemonth'];
// }

// NEEDS NEW GRAPH TYPE THAT SUITS COUNTY
$sth = mysql_query("SELECT County, SaleMonth, SUM(Profit) as profitSum FROM FactSales  WHERE ShellType='Coke' GROUP BY County, SaleMonth");
$rows1 = array();
$rows1['profit'] = 'profitSum';
$rows1['county'] = 'County';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['profitSum'];
    $rows1['data1'][] = $rr['County'];
}

$result = array();
array_push($result,$rows1);
// array_push($result,$rows1);
// array_push($result,$rows2);


print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
