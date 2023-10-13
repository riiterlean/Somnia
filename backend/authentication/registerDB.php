<?php
session_start();
echo "test1";
include '../../backend/database/connection.php';
include 'hash.php';

if (isset($_SESSION['loggedIN']) && isset($_SESSION['username'])) {
    header('Location: hidden.php');
    exit();
}
echo "test2";
if (isset($_POST['register'])) {
    echo "test3";

    $connectionn = connectToDatabase();
    echo "debug";

    $username = $_POST['usernamePHP'];
    $email = $_POST['emailPHP'];
    $password = $_POST['passwordPHP'];

    $hashed_pw = hashPassword($password);

    $data = pg_query($connectionn, "insert into accounts (username, email, password) values ('$username', '$email', '$hashed_pw')");

    if ($data === false) {
        $error_message = pg_last_error($connectionn);
        echo "$error_message";
    } else {
        echo "You have been signed up";
    }
}
?>