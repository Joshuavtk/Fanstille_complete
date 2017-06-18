<?php
if (isset($_POST['new_article_submit'])) {
    $title = mysqli_real_escape_string($mysqli, trim($_POST['new_article_title']));
    $post = mysqli_real_escape_string($mysqli, trim($_POST['new_article_post']));
    $content = mysqli_real_escape_string($mysqli, trim($_POST['new_article_content']));
    $target = 'images/' . time() . $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $datatype = $_FILES['image']['type'];
    $datasize = $_FILES['image']['size'];

    if (!empty($content) && !empty($title) && !empty($post)) {

        if ($datasize <= 150000) {

            if ($datatype = "image/png" || $datatype = "image/jpg" || $datatype = "image/gif") {

                $succes = move_uploaded_file($temp, $target);
                if ($succes) {
                    echo 'Finished!';
                    $query = "INSERT INTO myband_articles VALUES (0,'$title','$post','$content','$target',NOW())";
                    $result = mysqli_query($mysqli, $query) or die('Error querying.');
                } else {
                    echo 'Error uploading photo';
                }
            } else {
                echo 'Datatype is incorrect';
            }
        } else {
            echo 'File is too big';
        }
    } else {
        echo 'Error, all input fields are supposed to be filled in.';
    }

}