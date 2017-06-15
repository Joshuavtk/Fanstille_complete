<?php

$result_list = array();

$results_per_page = EVENTS_PER_PAGE;

$query = "SELECT * FROM myband_events";
$result = mysqli_query($mysqli, $query) or die ('Error calculating events');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);

$limit_starting_number = ($page - 1) * $results_per_page;

