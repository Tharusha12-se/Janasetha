<?php
require "connection.php"; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address_line1 = $_POST["address_line1"];
    $address_line2 = $_POST["address_line2"];
    $city = $_POST["city"];
    $mobile = $_POST["mobile"];
    $stable_phone = $_POST["stable_phone"];
    $income = $_POST["income"];
    $village = $_POST["village"];
    $officer_domain = $_POST["officer_domain"];
    $secretariat = $_POST["secretariat"];
    $joining_date = $_POST["joining_date"];
    $cbo_name = $_POST["cbo_name"];
    $cbo_start_date = $_POST["cbo_start_date"];
    $cbo_members = $_POST["cbo_members"];
    $saving = $_POST["saving"];
    $saving_amount = $_POST["saving_amount"];
    $land_ownership = $_POST["land_ownership"];
    $land_size = $_POST["land_size"];
    $cultivated_size = $_POST["cultivated_size"];
    $plantable_size = $_POST["plantable_size"];
    $empty_land = $_POST["empty_land"];
    $cultivation_details = $_POST["cultivation_details"];
    $water_source = $_POST["water_source"];
    $land_type = $_POST["land_type"];
     $latitude = $_POST["latitude"];
     $longitude = $_POST["longitude"];

    echo $name . "<br>";
    echo $age . "<br>";
    echo $address_line1 . "<br>";
    echo $address_line2 . "<br>";
    echo $city . "<br>";
    echo $mobile . "<br>";
    echo $stable_phone . "<br>";
    echo $income . "<br>";
    echo $village . "<br>";
    echo $officer_domain . "<br>";
    echo $secretariat . "<br>";
    echo $joining_date . "<br>";
    echo $cbo_name . "<br>";
    echo $cbo_start_date . "<br>";
    echo $cbo_members . "<br>";
    echo $saving . "<br>";
    echo $saving_amount . "<br>";
    echo $land_ownership . "<br>";
    echo $land_size . "<br>";
    echo $cultivated_size . "<br>";
    echo $plantable_size . "<br>";
    echo $empty_land . "<br>";
    echo $cultivation_details . "<br>";
    echo $water_source . "<br>";
    echo $land_type . "<br>";
    echo $latitude . "<br>";
    echo $longitude . "<br>";

    

    
} else {
    echo "Invalid request!";
}
?>
