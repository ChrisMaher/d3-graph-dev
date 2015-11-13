<?php
$db = new SQLite3('Manufacturing.db');

$results = $db->query(' SELECT SUM(Spoilage)/2 as spoilageSum FROM factspoilage WHERE isWeekend=\'1\'  ');
$rows = array();
$rows['name'] = 'Weekend';
$rows['type'] = 'column';

while ($row = $results->fetchArray()) {
   $rows['data'][] = $row['spoilageSum'];
}


$results = $db->query('SELECT SUM(Spoilage)/5 as spoilageSum FROM factspoilage WHERE isWeekend=\'0\'');
$rows = array();
$rows1['name'] = 'Weekday';
$rows1['type'] = 'column';
while ($row = $results->fetchArray()) {
   $rows1['data'][] = $row['spoilageSum'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows1);
print json_encode($result, JSON_NUMERIC_CHECK);


?>
