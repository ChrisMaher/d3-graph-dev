<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("datawarehousing", $con);

$sth = mysql_query("SELECT SUM(Spoilage) as spoilageSum FROM factspoilage GROUP BY SpoilageMonth");
$rows = array();
$rows['name'] = 'Spoilage';
while($rr = mysql_fetch_assoc($sth)) {
    $rows['data'][] = $rr['spoilageSum'];
}

$sth = mysql_query("SELECT eventName, eventDate FROM events GROUP BY eventMonth");
$rows2 = array();
$rows2['name'] = 'Event';
// $rows2['type'] = 'spline';
while($rr = mysql_fetch_assoc($sth)) {
    $rows2['data'][] = $rr['eventName'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows2);
print json_encode($result, JSON_NUMERIC_CHECK);


mysql_close($con);
?>

