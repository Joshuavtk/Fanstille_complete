<?php
$query = "SELECT * 
          FROM myband_articles 
          WHERE post='$selectedArticle'";

$result = mysqli_query($mysqli, $query) or die ('Error querying');

while ($item = $result->fetch_assoc()) {
    $result_list[] = $item;
}
