<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("datawarehousing", $con);


$sth = mysql_query("SELECT  SUM(Profit) as profitSum FROM FactSales GROUP BY SaleMonth");
$rows = array();
$rows['name'] = 'Combined Sales';
while($rr = mysql_fetch_assoc($sth)) {
    $rows['data'][] = $rr['profitSum'];
}


$result = array();
array_push($result,$rows);


// array_push($result,$rows1);
// array_push($result,$rows3);
// array_push($result,$rows4);
// array_push($result,$rows5);
// array_push($result,$rows6);

print json_encode($result, JSON_NUMERIC_CHECK);


mysql_close($con);
?>
