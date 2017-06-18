<?php

$query = "SELECT * FROM myband_articles ORDER BY id DESC LIMIT 3";

$result = mysqli_query($mysqli, $query) or die('Error querying');

while ($item = $result->fetch_assoc()) {
    $index_list[] = $item;
}
