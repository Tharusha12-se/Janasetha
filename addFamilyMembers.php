<?php

include "connection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$relation = $_POST["relation"];
$nic = $_POST["nic"];
$age = $_POST["age"];
$occupation = $_POST["occupation"];
$education = $_POST["education"];


if (empty($id)) {
    echo ("User Missing.");
} else if (empty($name)) {
    echo ("Please Enter Your Full Name.");
} else if (empty($relation)) {
    echo ("Please Select Your Relation.");
} else if (empty($age)) {
    echo ("Please Enter Your Age.");
} else if (empty($occupation)) {
    echo ("Please Enter Your Occupation.");
} else if (empty($education)) {
    echo ("Please Enter Your Education.");
} else {

    Database::iud("INSERT INTO `family_detals`
        (`name`,`nic`,`age`,`occupation`,`education`,`relationship_id`,`user_id`) VALUES 
        ('" . $name . "','" . $nic . "','" . $age . "','" . $occupation . "','" . $education . "','" . $relation . "','" . $id . "')");

    echo ("success");
}
