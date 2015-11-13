<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("datawarehousing", $con);

$sth = mysql_query("SELECT SaleMonth, SUM(Profit) as profitSum FROM FactSales WHERE Province='Leinster' GROUP BY SaleMonth");
$rows1 = array();
$rows1['name'] = 'Leinster';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT SaleMonth, SUM(Profit) as profitSum FROM FactSales WHERE Province='Ulster' GROUP BY SaleMonth");
$rows2 = array();
$rows2['name'] = 'Ulster';
while($rr = mysql_fetch_assoc($sth)) {
    $rows2['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT SaleMonth, SUM(Profit) as profitSum FROM FactSales WHERE Province='Munster' GROUP BY SaleMonth");
$rows3 = array();
$rows3['name'] = 'Munster';
while($rr = mysql_fetch_assoc($sth)) {
    $rows3['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT SaleMonth, SUM(Profit) as profitSum FROM FactSales WHERE Province='Connaught' GROUP BY SaleMonth");
$rows4 = array();
$rows4['name'] = 'Connaught';
while($rr = mysql_fetch_assoc($sth)) {
    $rows4['data'][] = $rr['profitSum'];
}

$result = array();
array_push($result,$rows1);
array_push($result,$rows2);
array_push($result,$rows3);
array_push($result,$rows4);



print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
