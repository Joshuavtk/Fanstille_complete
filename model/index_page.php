<?php

$query = "SELECT * FROM myband_articles ORDER BY id DESC LIMIT 3";

$result = mysqli_query($mysqli, $query) or die('Error querying');

while ($item = $result->fetch_assoc()) {
    $index_list[] = $item;
}

$current_time = time();

$query = "SELECT * 
          FROM myband_events 
          WHERE `time` >= $current_time
          ORDER BY `time` ASC 
          LIMIT 4";

$result = mysqli_query($mysqli, $query) or die ('Error querying');

while ($item = $result->fetch_assoc()) {
    $events_list[] = $item;
}
