<?php

$current_time = time();

$query = "SELECT * 
          FROM myband_events 
          WHERE `time` >= $current_time
          ORDER BY `time` ASC";

$result = mysqli_query($mysqli, $query) or die ('Error querying');

while ($item = $result->fetch_assoc()) {
    $events_list[] = $item;
}
