<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("datawarehousing", $con);

$sth = mysql_query("SELECT SaleMonth, SUM(Profit) as profitSum FROM factsales WHERE ShellType='7Up' GROUP BY SaleMonth");
$rows1 = array();
$rows1['name'] = '7up';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['profitSum'];
}

$sth = mysql_query(" SELECT SUM(Profit)/7 as average FROM FactSales  GROUP BY SaleMonth ");
$rows2 = array();
$rows2['name'] = 'Mean';
while($rr = mysql_fetch_assoc($sth)) {
    $rows2['data'][] = $rr['average'];
}

$result = array();
array_push($result,$rows1);
array_push($result,$rows2);



print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
