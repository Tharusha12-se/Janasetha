<?php
require "connection.php"; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address_line1 = $_POST["address_line1"];
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

    $imagePath = null; // Default value if no image is uploaded

    if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["error"] === 0) {
        $image = $_FILES["profile_image"];
        $allowedTypes = ["image/png", "image/jpg", "image/jpeg"];
        $uploadDir = "profile_img/";

        // Validate file type
        if (!in_array($image["type"], $allowedTypes)) {
            $errors[] = "Only PNG, JPG, and JPEG files are allowed.";
        }

        // Validate file size (max 2MB)
        if ($image["size"] > 2 * 1024 * 1024) {
            $errors[] = "File size must be less than 2MB.";
        }

        // Save file if no errors
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

   // Validation rules
   if (empty($name)) {
    $errors[] = "Name is required.";
    
} elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
    $errors[] = "Name can only contain letters and spaces.";
}

if (empty($age)) {
    $errors[] = "Age is required.";
} elseif (!filter_var($age, FILTER_VALIDATE_INT) || $age < 1 || $age > 120) {
    $errors[] = "Age must be a valid number between 1 and 120.";
}

if (empty($address_line1)) {
    $errors[] = "Address Line 1 is required.";
}

if (empty($city)) {
    $errors[] = "City is required.";
}

if (empty($mobile)) {
    $errors[] = "Mobile number is required.";
} elseif (!preg_match("/^\d{10}$/", $mobile)) {
    $errors[] = "Mobile must be a 10-digit number.";
}

if (empty($stable_phone)) {
    $errors[] = "Stable phone number is required.";
} elseif (!preg_match("/^\d{10}$/", $stable_phone)) {
    $errors[] = "Stable phone must be a 10-digit number.";
}

if (empty($income)) {
    $errors[] = "Income is required.";
} elseif (!is_numeric($income) || $income <= 0) {
    $errors[] = "Income must be a positive number.";
}

if (empty($village)) {
    $errors[] = "Village is required.";
}

if (empty($officer_domain)) {
    $errors[] = "Officer domain is required.";
}

if (empty($secretariat)) {
    $errors[] = "Secretariat is required.";
}

if (empty($joining_date)) {
    $errors[] = "Joining date is required.";
} elseif (date_create($joining_date) === false) {
    $errors[] = "Invalid joining date format (YYYY-MM-DD).";
}

if (empty($cbo_name)) {
    $errors[] = "CBO name is required.";
}

if (empty($cbo_start_date)) {
    $errors[] = "CBO start date is required.";
} elseif (date_create($cbo_start_date) === false) {
    $errors[] = "Invalid CBO start date format (YYYY-MM-DD).";
}

if (empty($cbo_members)) {
    $errors[] = "CBO members count is required.";
} elseif (!filter_var($cbo_members, FILTER_VALIDATE_INT) || $cbo_members < 1) {
    $errors[] = "CBO members must be a positive integer.";
}

if (empty($saving)) {
    $errors[] = "Saving status is required.";
} elseif ($saving === "yes" && empty($saving_amount)) {
    $errors[] = "Saving amount is required when saving is enabled.";
} elseif ($saving === "yes" && (!is_numeric($saving_amount) || $saving_amount <= 0)) {
    $errors[] = "Saving amount must be a positive number.";
}

if (empty($land_ownership)) {
    $errors[] = "Land ownership status is required.";
}

if (empty($land_size)) {
    $errors[] = "Land size is required.";
} elseif (!is_numeric($land_size) || $land_size <= 0) {
    $errors[] = "Land size must be a positive number.";
}

if (!empty($land_size)) {
    if (!empty($cultivated_size) && (!is_numeric($cultivated_size) || $cultivated_size < 0 || $cultivated_size > $land_size)) {
        $errors[] = "Cultivated size must be a positive number not exceeding land size.";
    }
    if (!empty($plantable_size) && (!is_numeric($plantable_size) || $plantable_size < 0 || $plantable_size > $land_size)) {
        $errors[] = "Plantable size must be a positive number not exceeding land size.";
    }
    if (!empty($empty_land) && (!is_numeric($empty_land) || $empty_land < 0 || $empty_land > $land_size)) {
        $errors[] = "Empty land must be a positive number not exceeding land size.";
    }
}

if (empty($cultivation_details)) {
    $errors[] = "Cultivation details are required.";
}

if (empty($water_source)) {
    $errors[] = "Water source is required.";
}

if (empty($land_type)) {
    $errors[] = "Land type is required.";
}

if (empty($latitude)) {
    $errors[] = "Latitude is required.";
} elseif (!is_numeric($latitude) || $latitude < -90 || $latitude > 90) {
    $errors[] = "Latitude must be between -90 and 90.";
}

if (empty($longitude)) {
    $errors[] = "Longitude is required.";
} elseif (!is_numeric($longitude) || $longitude < -180 || $longitude > 180) {
    $errors[] = "Longitude must be between -180 and 180.";
}

// If no errors, proceed to database insertion
if (empty($errors)) {

    Database::iud("INSERT INTO user (`name`,`age`,`tel-mobile`,`tel-home`,`village`,`village_of_domain`,
    `devisional_secretarial`,`cbo_name`,`cbo_started_date`,`cbo_members`,`saving_amount`,`land_size`,
    `land_cultivated`,`to_be_cultivated`,`empty_land`,`state_of_land`,`water_source_id`,`saving_id`,
    `land_owner_id`,`city_id`,`land_type_id`,`address`,`profile_path`) 
    
    VALUES ('".$name."','".$age."','".$mobile."','".$stable_phone."','".$village."','".$officer_domain."',
    '".$secretariat."','".$cbo_name."','".$cbo_start_date."','".$cbo_members."','".$saving_amount."',
    '".$land_size."','".$cultivated_size."','".$plantable_size."','".$empty_land."','".$land_ownership."',
    '".$water_source."','".$saving."','".$land_ownership."','".$city."','".$land_type."','".$address_line1."',
    '".$uploadPath."')");
        
    echo "Data saved successfully!";


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
