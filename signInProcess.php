<?php
session_start();
include "connection.php";

$mobile = $_POST["m"];
$password = $_POST["p"];
$rememberme = $_POST["r"];

echo($mobile);
echo($password);

if(empty($mobile)){
    echo ("Please Enter Your Mobile Number.");
}else if(empty($password)){
    echo ("Please Enter Your Password.");
}else{

    $rs = Database::search("SELECT * FROM `officers` WHERE `mobile`='".$mobile."' AND `password`='".$password."'");
    $n = $rs->num_rows;

    if($n == 1){

        echo ("success");

        $d = $rs->fetch_assoc();
        $_SESSION["u"] = $d;

        if($rememberme == "true"){

            setcookie("email",$mobile,time()+(60*60*24*365));
            setcookie("password",$password,time()+(60*60*24*365));

        }else{

            setcookie("email","",-1);
            setcookie("password","",-1);

        }

    }else{
        echo ("Invalid Username or Password.");
    }

}

?>