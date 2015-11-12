<?php
$con = mysql_connect("localhost","root","root");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("sales", $con);

$sth = mysql_query("SELECT SUM(Spoilage)/2 as spoilageSum FROM factspoilage WHERE isWeekend='1'");
$rows = array();
$rows['name'] = 'Weekend';
$rows['type'] = 'column';

while($rr = mysql_fetch_assoc($sth)) {
    $rows['data'][] = $rr['spoilageSum'];
}

$sth = mysql_query("SELECT SUM(Spoilage)/5 as spoilageSum FROM factspoilage WHERE isWeekend='0'");
$rows1 = array();
$rows1['name'] = 'Weekday';
$rows1['type'] = 'column';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['spoilageSum'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows1);
print json_encode($result, JSON_NUMERIC_CHECK);


mysql_close($con);
?>
