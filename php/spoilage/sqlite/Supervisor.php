<?php
$db = new SQLite3('Manufacturing.db');

$results = $db->query('SELECT SUM(W11) as spoilageSum FROM factspoilage GROUP BY Supervisor');
$rows = array();
$rows['name'] = 'W11';
$rows['type'] = 'column';

while ($row = $results->fetchArray()) {
   $rows['data'][] = $row['spoilageSum'];
}


$results = $db->query('SELECT SUM(W12) as spoilageSum FROM factspoilage GROUP BY Supervisor');
$rows = array();
$rows1['name'] = 'W12';
$rows1['type'] = 'column';

while ($row = $results->fetchArray()) {
   $rows1['data'][] = $row['spoilageSum'];
}

$results = $db->query('SELECT (SUM(W11)/2)+(SUM(W12)/2) as spoilageSum FROM factspoilage GROUP BY Supervisor');
$rows = array();
$rows2['name'] = 'Average';
$rows2['type'] = 'spline';
while ($row = $results->fetchArray()) {
   $rows2['data'][] = $row['spoilageSum'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);
print json_encode($result, JSON_NUMERIC_CHECK);


?>
