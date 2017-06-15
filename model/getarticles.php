<?php

$result_list = array();

$results_per_page = ARTICLES_PER_PAGE;

$query = "SELECT id FROM myband_articles";
$result = mysqli_query($mysqli, $query) or die ('Error calculating articles');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);

$limit_starting_number = ($page - 1) * $results_per_page;

