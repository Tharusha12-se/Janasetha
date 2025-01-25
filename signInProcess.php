<?php
session_start();
include "connection.php";

$mobile = $_POST["mobile"];
$password = $_POST["password"];
$rememberme = $_POST["rememberme"];

if (empty($mobile)) {
    echo ("Please Enter Your Mobile Number.");
} else if (empty($password)) {
    echo ("Please Enter Your Password.");
} else {

    $rs = Database::search("SELECT * FROM `officers` WHERE `mobile`='" . $mobile . "' AND `password`='" . $password . "'");
    $n = $rs->num_rows;

    if ($n == 1) {
        $d = $rs->fetch_assoc();
        $_SESSION["user"] = $d;

        if ($rememberme == "true") {
            setcookie("mobile", $mobile, time() + (60 * 60 * 24 * 365));
            setcookie("password", $password, time() + (60 * 60 * 24 * 365));
        } else {
            setcookie("mobile", "", -1);
            setcookie("password", "", -1);
        }

        echo ("success");
    } else {
        echo ("Invalid Username or Password.");
    }
}
