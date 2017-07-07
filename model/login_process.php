<?php
if (isset($_POST['login_submit'])) {
    $login = mysqli_real_escape_string($mysqli, trim($_POST['login_name']));
    $password = mysqli_real_escape_string($mysqli, trim($_POST['login_password']));
    if (!empty($login) && !empty($password)) {
        $hash_password = hash('sha512', $password);

        $query = "SELECT * FROM myband_users WHERE username='$login' AND password='$hash_password'";
        $result = mysqli_query($mysqli, $query) or die('Error querying for user.');
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $isVerified = $row['verified'];
            $isAdmin = $row['admin'];
            if ($isVerified) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['loggedUser'] = $login;
                if ($isAdmin) {
                    $_SESSION['isAdmin'] = true;
                }
            } else {
                echo 'Please check your e-mail to validate your account. After that you can login.';
                mysqli_close($mysqli);
            }
        } else {
            echo 'Login name or Password incorrect';
            mysqli_close($mysqli);
        }
    } else {
        echo 'You can\'t leave the input fields empty!';
    }
}
