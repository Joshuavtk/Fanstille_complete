<?php
$query = "SELECT * 
          FROM myband_articles 
          ORDER BY id DESC 
          LIMIT $limit_starting_number,$results_per_page";

$result = mysqli_query($mysqli, $query) or die ('Error querying');

while ($item = $result->fetch_assoc()) {
    $result_list[] = $item;
}
