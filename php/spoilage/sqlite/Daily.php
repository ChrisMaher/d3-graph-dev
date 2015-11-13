<?php
$db = new SQLite3('Manufacturing.db');

$results = $db->query('SELECT SUM(Spoilage) as spoilageSum FROM factspoilage GROUP BY Day');
$rows = array();
$rows['name'] = 'Spoilage';
$rows['type'] = 'column';

while ($row = $results->fetchArray()) {
    $rows['data'][] = $row['spoilageSum'];
}

$results = $db->query('SELECT (SUM(W11))+(SUM(W12)) as spoilageSum FROM factspoilage GROUP BY Day');
$rows = array();
$rows1['name'] = 'Average';
$rows1['type'] = 'spline';

while ($row = $results->fetchArray()) {
    $rows1['data'][] = $row['spoilageSum'];
}


$result = array();
array_push($result,$rows);
array_push($result,$rows1);
print json_encode($result, JSON_NUMERIC_CHECK);


?>
