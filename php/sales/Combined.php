<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("sales", $con);

$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales WHERE ShellType='Coke' GROUP BY SaleMonth");
$rows = array();
$rows['name'] = 'Coke';
while($rr = mysql_fetch_assoc($sth)) {
    $rows['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales WHERE ShellType='7Up' GROUP BY SaleMonth");
$rows1 = array();
$rows1['name'] = '7Up';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales WHERE ShellType='Fanta' GROUP BY SaleMonth");
$rows2 = array();
$rows2['name'] = 'Fanta';
while($rr = mysql_fetch_assoc($sth)) {
    $rows2['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales WHERE ShellType='Sprite' GROUP BY SaleMonth");
$rows3 = array();
$rows3['name'] = 'Sprite';
while($rr = mysql_fetch_assoc($sth)) {
    $rows3['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales WHERE ShellType='Rockstar' GROUP BY SaleMonth");
$rows4 = array();
$rows4['name'] = 'Rockstar';
while($rr = mysql_fetch_assoc($sth)) {
    $rows4['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales WHERE ShellType='Lucozade' GROUP BY SaleMonth");
$rows5 = array();
$rows5['name'] = 'Lucozade';
while($rr = mysql_fetch_assoc($sth)) {
    $rows5['data'][] = $rr['profitSum'];
}

$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales WHERE ShellType='Monster' GROUP BY SaleMonth");
$rows6 = array();
$rows6['name'] = 'Monster';
while($rr = mysql_fetch_assoc($sth)) {
    $rows6['data'][] = $rr['profitSum'];
}




$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);
array_push($result,$rows3);
array_push($result,$rows4);
array_push($result,$rows5);
array_push($result,$rows6);
print json_encode($result, JSON_NUMERIC_CHECK);


mysql_close($con);
?>
