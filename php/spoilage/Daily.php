<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("sales", $con);

$sth = mysql_query("SELECT SUM(Spoilage) as spoilageSum FROM factspoilage GROUP BY Day");
$rows = array();
$rows['name'] = 'Spoilage';
$rows['type'] = 'column';

while($rr = mysql_fetch_assoc($sth)) {
    $rows['data'][] = $rr['spoilageSum'];
}

// $sth = mysql_query("SELECT SUM(W12) as spoilageSum FROM factspoilage GROUP BY SpoilageMonth");
// $rows1 = array();
// $rows1['name'] = 'W12';
// $rows1['type'] = 'column';
// while($rr = mysql_fetch_assoc($sth)) {
//     $rows1['data'][] = $rr['spoilageSum'];
// }

$sth = mysql_query("SELECT (SUM(W11))+(SUM(W12)) as spoilageSum FROM factspoilage GROUP BY Day");
$rows1 = array();
$rows1['name'] = 'Average';
$rows1['type'] = 'spline';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['spoilageSum'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows1);
// array_push($result,$rows2);
print json_encode($result, JSON_NUMERIC_CHECK);


mysql_close($con);
?>
