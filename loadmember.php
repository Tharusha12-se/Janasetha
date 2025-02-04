<?php
session_start();
include "connection.php";

$id = $_POST["id"];

if (empty($id)) {
    echo ("User Id Missing.");
} else {

    $rs = Database::search("SELECT * FROM `family_detals` WHERE `user_id`='" . $id . "'");
    $n = $rs->num_rows;

    if ($n > 0) {
        for ($i = 0; $i < $n; $i++) {
            $dataset = $rs->fetch_assoc();
?>

            <tr>
                <td style="padding: 5px;"><?php echo $i + 1; ?></td>
                <td style="padding: 5px; max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="text-break">
                    <?php echo $dataset['name']; ?>
                </td>
                <td style="padding: 5px;" class="d-none d-lg-block"><?php echo $dataset['nic']; ?></td>
            </tr>

<?php
        }
    } else {
        echo ("Empty Data.");
    }
}
