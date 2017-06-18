<?php
$query = "SELECT * 
          FROM myband_events 
          WHERE `time` >= $page
          ORDER BY `time` ASC 
          LIMIT $limit_starting_number,$results_per_page";

$result = mysqli_query($mysqli, $query) or die ('Error querying');

while ($item = $result->fetch_assoc()) {
    $events_list[] = $item;
}
