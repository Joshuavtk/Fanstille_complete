<?php
if (isset($_POST['register_submit'])) {
    $email = mysqli_real_escape_string($mysqli, trim($_POST['register_email']));
    $username = mysqli_real_escape_string($mysqli, trim($_POST['register_name']));
    $password = mysqli_real_escape_string($mysqli, trim($_POST['register_password']));
    $password2 = mysqli_real_escape_string($mysqli, trim($_POST['register_password2']));

    if (!empty($email) && !empty($username) && !empty($password) && !empty($password2)) {

        if ($password == $password2) {
            $hashed_password = hash('sha512', $password);
            $random_number = rand(1000, 9999);
            $hashcode = hash('sha512', $random_number);
            $from = '22288@ma-web.nl';

            $query = "INSERT INTO myband_users VALUES (0,'$username','$hashed_password','$email','$hashcode','0','0')";
            $result = mysqli_query($mysqli, $query) or die('error querying');
            $registration_succes = true;

            $message = 'Thank you for creating a account on the Fanstille website.<br> To make sure you are not a bot' .
                'please click on the following link: ' .
                URL . 'verify/?email=' . $email . '&hashcode=' . $hashcode;
                mail($email, 'Verification Instaclone Joshua van \'t Kruis ', $message, 'From:' . $from);
            echo '<p>You have just received an e-mail from us to confirm that you aren\'t a bot.' .
                'Please click on the link in the e-mail so that your account will be verified and you can use our website</p>';
            echo '<a href="' . URL . 'verify/?email=' . $email . '&hashcode=' . $hashcode . '">Click here</a>';
        } else {
            echo 'Error: Passwords have to be equal to each other';
        }
    } else {
        echo 'You can\'t leave any input fields empty!';
    }
}