<?php
session_start();

include '../../backend/database/connection.php';
include 'hash.php';


if (isset($_SESSION['loggedIN']) && isset($_SESSION['username'])) {
    header('Location: hidden.php');
    exit();
}

if (isset($_POST['login'])) {
    $connection = connectToDatabase();

    $username = $_POST['usernamePHP'];
    $password = $_POST['passwordPHP'];

    $data = pg_query($connection, "select password from accounts where username='$username'");

    $password_db = pg_fetch_result($data, 0);

    $verify = verifyPassword($password, $password_db);

    if ($verify) {
        $_SESSION['username'] = $username;
        $_SESSION['loggedIN'] = 1;
        exit('success');
    } else {
        exit('failure');
    }

    /*if (pg_num_rows($data) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['loggedIN'] = 1;
        exit('success');
    } else {
        exit('failed');
    }*/
}
?>