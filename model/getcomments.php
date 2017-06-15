<?php
$query = "SELECT * FROM myband_comments WHERE article='$selectedArticle' ORDER BY id DESC";
$result = mysqli_query($mysqli, $query) or die("Error querying");

while ($item = $result->fetch_assoc()) {
    $comments_list[] = $item;
}
