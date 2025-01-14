<?php

include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$nic = $_POST["n"];
$mobile = $_POST["m"];
$password = $_POST["p"];


if(empty($fname)){
    echo ("Please Enter Your First Name.");
}else if(strlen($fname) > 50){
    echo ("First Name Must Contain LOWER THAN 50 characters.");
}else if(empty($lname)){
    echo ("Please Enter Your Last Name.");
}else if(strlen($lname) > 50){
    echo ("Last Name Must Contain LOWER THAN 50 characters.");
}else if(empty($nic)){
    echo ("Please Enter Your Email Nic Number.");
}else if(empty($mobile)){
    echo ("Please Enter Your Mobile Number.");
}else if(strlen($mobile) != 10){
    echo ("Mobile Number Must Contain 10 characters.");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/",$mobile)){
    echo ("Invalid Mobile Number.");
}else if(empty($password)){
    echo ("Please Enter Your Password.");
}else if(strlen($password) < 5 || strlen($password) > 20){
    echo ("Password Must Contain 5 to 20 Characters.");
}else{

    $rs = Database::search("SELECT * FROM `officers` WHERE `mobile`='".$mobile."' ");
    $n = $rs->num_rows;

    if($n > 0){
        echo ("User with the same Mobile Number already exists.");
    }else{


        Database::iud("INSERT INTO `officers`
        (`fname`,`lname`,`nic`,`mobile`,`password`) VALUES 
        ('".$fname."','".$lname."','".$nic."','".$mobile."','".$password."')");

    

        echo ("success");

    }

}

?>