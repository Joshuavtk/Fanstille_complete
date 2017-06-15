<?php
if (isset($_POST['login_submit'])) {
    $login = mysqli_real_escape_string($mysqli, trim($_POST['login_name']));
    $password = mysqli_real_escape_string($mysqli, trim($_POST['login_password']));
    $hash_password = hash('sha512', $password);

    $query = "SELECT * FROM myband_users WHERE username='$login' AND password='$hash_password'";
    $result = mysqli_query($mysqli, $query) or die('Error querying for user.');
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $verified = $row['verified'];
        if ($verified) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['loggedUser'] = $login;
        } else {
            echo 'Please check your e-mail to validate your account. After that you can login.';
            exit();
        }
    } else {
        echo 'Login name or Password incorrect';
        exit();
    }
}