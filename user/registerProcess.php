<?php
require "connection.php"; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = []; // Initialize errors array
    
    // Collect all form data
    $name = $_POST["name"] ?? '';
    $age = $_POST["age"] ?? '';
    $address_line1 = $_POST["address_line1"] ?? '';
    $city = $_POST["city"] ?? '';
    $mobile = $_POST["mobile"] ?? '';
    $stable_phone = $_POST["stable_phone"] ?? '';
    $income = $_POST["income"] ?? '';
    $village = $_POST["village"] ?? '';
    $officer_domain = $_POST["officer_domain"] ?? '';
    $secretariat = $_POST["secretariat"] ?? '';
    $joining_date = $_POST["joining_date"] ?? '';
    $cbo_name = $_POST["cbo_name"] ?? '';
    $cbo_start_date = $_POST["cbo_start_date"] ?? '';
    $cbo_members = $_POST["cbo_members"] ?? '';
    $saving = $_POST["saving"] ?? '';
    $saving_amount = $_POST["saving_amount"] ?? '';
    $land_ownership = $_POST["land_ownership"] ?? '';
    $land_size = $_POST["land_size"] ?? '';
    $cultivated_size = $_POST["cultivated_size"] ?? '';
    $plantable_size = $_POST["plantable_size"] ?? '';
    $empty_land = $_POST["empty_land"] ?? '';
    $cultivation_details = $_POST["cultivation_details"] ?? '';
    $water_source = $_POST["water_source"] ?? '';
    $land_type = $_POST["land_type"] ?? '';
    $latitude = $_POST["latitude"] ?? null;
    $longitude = $_POST["longitude"] ?? null;
    $manual_latitude = $_POST["manual_latitude"] ?? null;
    $manual_longitude = $_POST["manual_longitude"] ?? null;

    // Use manual coordinates if automatic location failed
    if (($latitude === null || $longitude === null) && ($manual_latitude !== null && $manual_longitude !== null)) {
        $latitude = $manual_latitude;
        $longitude = $manual_longitude;
    }

    $imagePath = null;

    // Image upload handling
    if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["error"] === 0) {
        $image = $_FILES["profile_image"];
        $allowedTypes = ["image/png", "image/jpg", "image/jpeg"];
        $uploadDir = "profile_img/";

        if (!in_array($image["type"], $allowedTypes)) {
            $errors[] = "Only PNG, JPG, and JPEG files are allowed.";
        }

        if ($image["size"] > 2 * 1024 * 1024) {
            $errors[] = "File size must be less than 2MB.";
        }

        if (empty($errors)) {
            $fileName = uniqid() . "_" . basename($image["name"]);
            $uploadPath = $uploadDir . $fileName;

            if (move_uploaded_file($image["tmp_name"], $uploadPath)) {
                $imagePath = $uploadPath;
            } else {
                $errors[] = "Failed to upload image.";
            }
        }
    } else {
        $errors[] = "Profile image is required.";
    }

    // Validation rules (same as before)
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors[] = "Name can only contain letters and spaces.";
    }

    // ... (include all your other validation rules here)

    // Location validation (now optional)
    if ($latitude !== null && $longitude !== null) {
        if (!is_numeric($latitude) || $latitude < -90 || $latitude > 90) {
            $errors[] = "Latitude must be between -90 and 90.";
        }
        if (!is_numeric($longitude) || $longitude < -180 || $longitude > 180) {
            $errors[] = "Longitude must be between -180 and 180.";
        }
    }

    // If no errors, proceed to database insertion
    if (empty($errors)) {
        Database::iud("INSERT INTO user (`name`,`age`,`tel-mobile`,`tel-home`,`village`,`village_of_domain`,
        `devisional_secretarial`,`cbo_name`,`cbo_started_date`,`cbo_members`,`saving_amount`,`land_size`,
        `land_cultivated`,`to_be_cultivated`,`empty_land`,`state_of_land`,`water_source_id`,`saving_id`,
        `land_owner_id`,`city_id`,`land_type_id`,`address`,`profile_path`,`latitude`,`longitude`) 
        
        VALUES ('".$name."','".$age."','".$mobile."','".$stable_phone."','".$village."','".$officer_domain."',
        '".$secretariat."','".$cbo_name."','".$cbo_start_date."','".$cbo_members."','".$saving_amount."',
        '".$land_size."','".$cultivated_size."','".$plantable_size."','".$empty_land."','".$land_ownership."',
        '".$water_source."','".$saving."','".$land_ownership."','".$city."','".$land_type."','".$address_line1."',
        '".$uploadPath."','".$latitude."','".$longitude."')");
            
        echo "success";
    } else {
        // Output errors
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
} else {
    echo "Invalid request!";
}
?>