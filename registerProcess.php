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
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    // Handle Image Upload
    $image_name = null;
    if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["error"] == UPLOAD_ERR_OK) {
        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $image_name = basename($_FILES["profile_image"]["name"]);
        $target_file = $upload_dir . $image_name;
        move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);
    }

    // Insert data into database
    $query = "INSERT INTO users (name, age, address_line1, address_line2, city, mobile, stable_phone, income, village, officer_domain, secretariat, joining_date, cbo_name, cbo_start_date, cbo_members, saving, saving_amount, land_ownership, land_size, cultivated_size, plantable_size, empty_land, cultivation_details, latitude, longitude, profile_image)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sissssssssssssssssssssssss", 
        $name, $age, $address_line1, $address_line2, $city, $mobile, $stable_phone, $income, $village, $officer_domain, 
        $secretariat, $joining_date, $cbo_name, $cbo_start_date, $cbo_members, $saving, $saving_amount, 
        $land_ownership, $land_size, $cultivated_size, $plantable_size, $empty_land, $cultivation_details, $latitude, $longitude, $image_name
    );

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request!";
}
?>
