<?php

require "connection.php";

$result = Database::search("SELECT * FROM `user` 
INNER JOIN `water_source` ON `user`.`water_source_id`=`water_source`.`id` 
INNER JOIN `saving` ON `user`.`saving_id`=`saving`.`id` 
INNER JOIN `land_owner` ON `user`.`land_owner_id`=`land_owner`.`id` 
INNER JOIN `land_type` ON `user`.`land_type_id`=`land_type`.`id` 
INNER JOIN `city` ON `user`.`city_id`=`city`.`id`");

$users = array();
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);
