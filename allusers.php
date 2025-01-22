<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="icon" href="images/logo/logo.png">
</head>

<body style="min-height: 100vh;">

    <?php
    include "header.php";
    ?>
    <section class="col-12 mt-3 d-flex justify-content-center">
        <div class="d-flex col-lg-5">
            <input type="text" class="form-control">
            <button class="btn btn-success ml-2">Search</button>
        </div>
    </section>

    <section class="col-12 p-2" style="min-height: 100vh;">
        <div class="row d-flex justify-content-center align-items-center">
            <?php

            for ($i = 0; $i < 12; $i++) {
            ?>

                <div class="col-12 col-lg-2 ml-3 mr-3 mb-3 mt-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);max-width: 300px;margin: auto;text-align: center;font-family: arial;"
                    onmouseover="this.style.backgroundColor='#cccccc'; this.style.color='#000';"
                    onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#fff';">
                    <img src="images/auser.jpg" alt="John" style="width:100%">
                    <h4 class="mt-1" 
                    style="
                    text-decoration: none;
                    font-size: 22px;
                    color: black;"
                    >
                    John Doe
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
                    onclick="addfamilyMember('<?php echo $i ?>');"
                    >
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

            ?>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>

    <!--   JS Files Start  -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="script.js"></script>

</body>

</html>