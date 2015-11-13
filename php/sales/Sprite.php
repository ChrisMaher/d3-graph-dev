<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("datawarehousing", $con);

// NEEDS NEW GRAPH TYPE THAT SUITS COUNTY
$sth = mysql_query("SELECT SaleMonth, SUM(Profit) as profitSum FROM FactSales WHERE ShellType='Sprite' GROUP BY SaleMonth");
$rows1 = array();
$rows2 = array();
$rows1['name'] = 'Sprite';
$rows1['profit'] = 'profitSum';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['profitSum'];
}

$sth = mysql_query(" SELECT SUM(Profit)/7 as average FROM FactSales  GROUP BY SaleMonth ");
$rows2 = array();
$rows2['name'] = 'Average';
while($rr = mysql_fetch_assoc($sth)) {
    $rows2['data'][] = $rr['average'];
}

$result = array();
array_push($result,$rows1);
array_push($result,$rows2);



print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
