<?php
$db = new SQLite3('Manufacturing.db');


$results = $db->query('SELECT SUM(Spoilage) as spoilageSum FROM factspoilage GROUP BY SpoilageMonth');
$rows = array();
$row['name'] = 'Spoilage';
while ($row = $results->fetchArray()) {
    $rows['data'][] = $row['spoilageSum'];
}


$results = $db->query('SELECT eventName, eventDate FROM events GROUP BY eventMonth');
$rows2 = array();
$rows2['name'] = 'Event';
while ($row = $results->fetchArray()) {
    $rows2['data'][] = $row['eventName'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows2);
print json_encode($result, JSON_NUMERIC_CHECK);

?>
