<?php

$about_result_list = array();
//add model for articles
//rewrite this to a smarty template and get the result_array from the model
//=> we do not want to see a fetch_assoc in a view file!
$sql = "SELECT * FROM myband_about";

global $mysqli;

$result = $mysqli->query($sql);

while ($item = $result->fetch_assoc()) {
    $about_result_list[] = $item;
}