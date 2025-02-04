<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="icon" href="images/logo/logo.png">
</head>

<body style="min-height: 100vh;" onload="loadallusers();">

    <?php
    include "header.php";
    ?>
    <section class="col-12 mt-3 d-flex justify-content-center">
        <div class="d-flex col-lg-5">
            <input type="text" class="form-control" id="searchData">
            <button class="btn btn-success ml-2" onclick="searchUsers();">Search</button>
        </div>
    </section>

    <section class="col-12 p-2" style="min-height: 100vh;">
        <div class="row d-flex justify-content-center align-items-center" id="usersbox">

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>