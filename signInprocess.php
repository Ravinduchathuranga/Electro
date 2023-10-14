<?php
session_start();
require "connection.php";
$email = $_POST["user"];
$password = $_POST["password"];
$rememberMe = $_POST["rememberMe"];

if (empty($email)) {
    echo ("Please enter user email");
} elseif (strlen($email) > 100) {
    echo ("please enter valid email");
} elseif (!filter_var($email . FILTER_VALIDATE_EMAIL)) {
    echo ("please enter valid email");
} elseif (empty($password)) {
    echo ("Please enter your password");
} elseif (strlen($password) < 10 || strlen($password) > 20) {
    echo ("Please enter valied password");
} else {
    $resultSet = Database::search("SELECT * FROM `user` WHERE `email` ='" . $email . "' AND `password`='" . $password . "'");
    $n = $resultSet->num_rows;
    if ($n == 1) {
        echo "success";
        $data = $rs->fetch_assoc();
        $_SESSION["user"] = $data;

        if ($rememberMe == "true") {
            setcookie("email", $email, time() + (60 * 60 * 24 * 365));
            setcookie("password", $password, time() + (60 * 60 * 24 * 365));
        } else {
            setcookie("email", "", -1);
        }
    } else {
        echo "Invalied email or password";
    }
}
