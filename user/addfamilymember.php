<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/logo/logo.png">
</head>

<body onload="loadallmembers();">

    <?php
    include "header.php";
    ?>

    <section class="wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="myaccount-form">
                        <h3>Details Of Family Member</h3>
                        <div>
                            <ul class="row">
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Full Name (නම)" required>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div style="height: 100%;">
                                        <!-- <input type="text" class="form-control" id="relation"  required> -->
                                        <select id="relation" class="form-select form-control" style="height: 60%;" required>
                                            <option value="">Relationship To The House Holder (ගෘහ මූලිකයාට ඇති නෑකම)</option>
                                            <?php

                                            require "connection.php";

                                            $data = Database::search("SELECT * FROM `relationship`");
                                            $num = $data->num_rows;

                                            for ($i = 0; $i < $num; $i++) {
                                                $dataset = $data->fetch_assoc();
                                            ?>
                                                <option value="<?= $dataset['id'] ?>"><?= $dataset['type'] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nic" placeholder="NIC (හැදුනුම්පත් අංකය) (Optional)" required>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="age" placeholder="Age (වයස)">
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="occupation" placeholder="Occupation (රැකියාව)">
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="education" placeholder="Education (අධ්‍යාපනය)">
                                    </div>
                                </li>

                                <li class="col-12 text-center d-flex justify-content-center">
                                    <a class="mdonate w-100" onclick="addmember();"><span>Add Member</span></a>
                                </li>

                                <li class="col-12 mt-3 mb-3">
                                    <hr class="border border-2 border-black">
                                </li>

                                <li class="col-12" id="membertitle">
                                    <span style="font-size: 20px; font-weight: bold;">Added Members</span>
                                </li>

                                <li class="col-12" id="membertable">
                                    <table border="1" style="width: 100%; text-align: left; border-collapse: collapse;">
                                        <thead>
                                            <tr>
                                                <th style="padding: 5px;">ID</th>
                                                <th style="padding: 5px;">Name</th>
                                                <th style="padding: 5px;" class="d-none d-lg-block">NIC</th>
                                            </tr>
                                        </thead>
                                        <tbody id="members">

                                        </tbody>
                                    </table>
                                </li>

                            </ul>
                            <br /><br />


                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>