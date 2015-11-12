<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("sales", $con);

$sth = mysql_query("SELECT SUM(W11) as spoilageSum FROM factspoilage GROUP BY SpoilageMonth");
$rows = array();
$rows['name'] = 'W11';
$rows['type'] = 'column';

while($rr = mysql_fetch_assoc($sth)) {
    $rows['data'][] = $rr['spoilageSum'];
}

$sth = mysql_query("SELECT SUM(W12) as spoilageSum FROM factspoilage GROUP BY SpoilageMonth");
$rows1 = array();
$rows1['name'] = 'W12';
$rows1['type'] = 'column';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['spoilageSum'];
}

$sth = mysql_query("SELECT (SUM(W11)/2)+(SUM(W12)/2) as spoilageSum FROM factspoilage GROUP BY SpoilageMonth");
$rows2 = array();
$rows2['name'] = 'Average';
$rows2['type'] = 'spline';
while($rr = mysql_fetch_assoc($sth)) {
    $rows2['data'][] = $rr['spoilageSum'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);
print json_encode($result, JSON_NUMERIC_CHECK);


mysql_close($con);
?>
