<?php

if (isset($_POST['comment_submit'])) {
    if (isset($_SESSION['loggedIn'])) {
        if (!empty($_POST['article_comment'])) {
            $comment = mysqli_real_escape_string($mysqli, trim($_POST['article_comment']));
            $currentdate = date("Y-m-d h:i:sa");
            $loggedUser = $_SESSION['loggedUser'];

            $query = "INSERT INTO `myband_comments` VALUES (0, '$loggedUser', '$selectedArticle', '$comment', '$currentdate')";
            $result = mysqli_query($mysqli, $query) or die("Error querying.");
            echo 'Your comment has been placed';
        } else {
            echo 'Error: Comment can\'t be empty.';
        }
    } else {
        echo 'Must be logged in to be able to comment.';
    }
}