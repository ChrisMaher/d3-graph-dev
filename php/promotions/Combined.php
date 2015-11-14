<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("datawarehousing", $con);


$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales GROUP BY SaleMonth ORDER by SaleDate");
$rows = array();
$rows['name'] = '2014';
while($rr = mysql_fetch_assoc($sth)) {
    $rows['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM promosales GROUP BY SaleMonth ORDER by SaleDate");
$rows1 = array();
$rows1['name'] = '2013';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['profitSum'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows1);

print json_encode($result, JSON_NUMERIC_CHECK);


mysql_close($con);
?>
