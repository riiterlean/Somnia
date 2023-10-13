<?php
function hashPassword($password) {
    $hashed_pw = password_hash($password, PASSWORD_BCRYPT);

    return $hashed_pw;
}

function verifyPassword($password, $password_db) {
    $verify = password_verify($password, $password_db);

    return $verify;
}
?>