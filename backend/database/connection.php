<?php
include '../config/config.php';
function connectToDatabase() {
    $connection = pg_connect(" host =" . HOST . " dbname =" . NAME . " user =" . USER . " password =" . PASSWORD);

    return $connection;
}
?>