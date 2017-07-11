<?php
$mysqli = new mysqli('localhost', '22288root', '22288root', '22288_myband');
if ($mysqli->errno) {
    echo 'Error : ' . $mysqli->connect_error();
}

$search_term = mysqli_real_escape_string($mysqli, trim($_GET['q']));
$search_term = strtolower($search_term);

$query = "SELECT * FROM `myband_articles` WHERE `title` LIKE '%" . $search_term . "%' ORDER BY `id` DESC";
$result = mysqli_query($mysqli, $query);

echo "<table id='dropdown'>
        <tr>
            <th>Search results</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td><a target='_blank' href='http://localhost/p1.4/proj/Fanstille/articles/" . $row['post'] . "' >
            " . $row['title'] . "
            </a></td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($mysqli);