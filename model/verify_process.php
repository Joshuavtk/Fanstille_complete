<?php
$email = $_GET['email'];
$hashcode = $_GET['hashcode'];

$query = "SELECT * FROM myband_users WHERE mailadres='$email' AND hashcode='$hashcode'";
$result = mysqli_query($mysqli, $query) or die('Error querying for user.');
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $query2 = "UPDATE myband_users SET verified=1 WHERE id='$id'";
    $result = mysqli_query($mysqli, $query2) or die('Error updating');
    $verifySucces = true;
}
