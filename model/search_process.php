<?php
$mysqli = new mysqli('localhost', '22288root', '22288root', '22288_myband');
if ($mysqli->errno) {
    echo 'Error : ' . $mysqli->connect_error();
}

$search_term = mysqli_real_escape_string($mysqli, trim($_GET['q']));
$search_term = strtolower($search_term);

$query = "SELECT * FROM `myband_articles` WHERE `title` LIKE '%" . $search_term . "%' ORDER BY `title` ASC LIMIT 25";
$result = mysqli_query($mysqli, $query);

$results_found = 0;

echo "<table id='dropdown'>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td><a target='_blank' href='http://localhost/p1.4/proj/Fanstille/articles/" . $row['post'] . "' >
            " . $row['title'] . "
            </a></td>";
    echo "</tr>";
    $results_found++;
}
if ($results_found < 1) {
    echo "<tr>";
    echo "<td>No results found</td>";
    echo "</tr>";
}
echo "</table>";


mysqli_close($mysqli);