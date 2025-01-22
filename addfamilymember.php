<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="icon" href="images/logo/logo.png">
</head>

<body>

    <?php
    include "header.php";
    ?>

    <section class="wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="myaccount-form">
                        <h3>Details Of Family Member</h3>
                        <form>
                            <ul class="row">
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Full Name(නම)" required>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Relationship To The House Holder(ගෘහ මූලිකයාට ඇති නෑකම)" required>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="NIC(හැදුනුම්පත් අංකය)" required>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Age(වයස)">
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Occupation(රැකියාව)">
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Education(අධ්‍යාපනය)">
                                    </div>
                                </li>

                                <li class="col-12 text-center d-flex justify-content-center">
                                    <a class="mdonate w-100"><span>Add Member</span></a>
                                </li>

                                <li class="col-12 mt-3 mb-3">
                                    <hr class="border border-2 border-black">
                                </li>

                                <li class="col-12">
                                    <span style="font-size: 20px; font-weight: bold;">Added Members</span>
                                </li>

                                <li class="col-12">
                                    <table border="1" style="width: 100%; text-align: left; border-collapse: collapse;">
                                        <thead>
                                            <tr>
                                                <th style="padding: 5px;">ID</th>
                                                <th style="padding: 5px;">Name</th>
                                                <th style="padding: 5px;" class="d-none d-lg-block">NIC</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="padding: 5px;">1</td>
                                                <td style="padding: 5px; max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="text-break">
                                                    John
                                                </td>
                                                <td style="padding: 5px;" class="d-none d-lg-block">200076333890</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>

                            </ul>
                            <br /><br />


                        </form>
                    </div>
                </div>

            </div>
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