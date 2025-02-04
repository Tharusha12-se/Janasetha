<?php
session_start();
include "connection.php";

$id = $_POST["id"];
$search = $_POST["search"];

if (empty($id)) {
    echo ("City Id Missing.");
} else {

    $rs = Database::search("SELECT * FROM `user` WHERE `city_id`='" . $id . "' LIKE '" . $search . "%'");
    $n = $rs->num_rows;

    if ($n > 0) {
        for ($i = 0; $i < $n; $i++) {
            $d = $rs->fetch_assoc();
?>

            <div class="col-12 col-lg-2 ml-3 mr-3 mb-3 mt-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);max-width: 300px;margin: auto;text-align: center;font-family: arial;"
                onmouseover="this.style.backgroundColor='#cccccc'; this.style.color='#000';"
                onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#fff';">
                <img src="images/auser.jpg" alt="John" style="width:100%">
                <h4 class="mt-1"
                    style="
                    text-decoration: none;
                    font-size: 22px;
                    color: black;">
                    <?php echo $d["name"] ?>
                </h4>
                <p><button style="
                    border: none;
                    outline: 0;
                    display: inline-block;
                    padding: 8px;
                    color: white;
                    background-color: #000;
                    text-align: center;
                    cursor: pointer;
                    width: 100%;
                    font-size: 18px;
                    "
                        onclick="addfamilyMember('<?php echo $d['id'] ?>');">
                        Add Family Members
                    </button></p>
                <p><button
                        style="
                    border: none;
                    outline: 0;
                    display: inline-block;
                    padding: 8px;
                    color: white;
                    background-color: #000;
                    text-align: center;
                    cursor: pointer;
                    width: 100%;
                    font-size: 18px;
                    ">
                        Get Location
                    </button></p>
            </div>

        <?php
        }
    } else {
        echo ("Empty Data.");
    }
}
