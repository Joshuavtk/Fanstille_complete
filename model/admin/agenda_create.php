<?php
if (isset($_POST['new_agenda_submit'])) {

    $post_date = mysqli_real_escape_string($mysqli, trim($_POST['new_agenda_date']));

    if (strtotime($post_date) === false) {
        echo 'Error: Inserted time is not a valid time value';
        $failure = true;
    } else {
        $post_date = strtotime($post_date);
    }

    $festival = mysqli_real_escape_string($mysqli, trim($_POST['new_agenda_festival']));
    $location = mysqli_real_escape_string($mysqli, trim($_POST['new_agenda_location']));
    $website = mysqli_real_escape_string($mysqli, trim($_POST['new_agenda_website']));

    if (!empty($festival) && !empty($location)) {
        if (!isset($failure)) {
            $query = "INSERT INTO myband_events VALUES (0,'$festival','$location','$post_date','$website')";
            $result = mysqli_query($mysqli, $query) or die('Error querying.');
            echo 'Agenda post has been created';
        } else {
            echo 'Entering agenda post failed.';
        }
    } else {
        echo 'Error, all input fields are supposed to be filled in.';
    }

}