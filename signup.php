<!doctype html>
<html lang="en">

<head>
   <link rel="icon" href="images/logo/logo.png">
</head>

<body>
   <?php
   include "header.php";
   ?>

   <!--Inner Header Start-->
   <section class="wf100 p100 inner-header">
      <div class="container">
         <h1>Welcome to Janasetha</h1>
         <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#"> Signup </a></li>
         </ul>
      </div>
   </section>
   <!--Inner Header End-->
   <!--Causes Start-->
   <section class="wf100 p80">
      <div class="container">
         <div class="row d-flex justify-content-center">

            <div class="col-lg-6">
               <div class="myaccount-form">
                  <h3>Create New Account</h3>

                  <ul class="row">
                     <li class="col-md-12">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="First Name (දුරකථන අංකය)" id="ofname" required>
                        </div>
                     </li>
                     <li class="col-md-12">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Last Name (දුරකථන අංකය)" id="olname" required>
                        </div>
                     </li>
                     <li class="col-md-12">
                        <div class="input-group">
                           <input type="tel" class="form-control" placeholder="Mobile Number (දුරකථන අංකය)" id="om" required>
                        </div>
                     </li>
                     <li class="col-md-12">
                        <div class="input-group">
                           <input type="password" class="form-control" placeholder="Password (මුර පදය)" id="op" required>
                        </div>
                     </li>
                     <li class="col-md-12">
                        <button class="register" onclick="signup();">Create New Account</button>
                     </li>
                  </ul>

               </div>
            </div>

         </div>
      </div>
   </section>
   <!--Causes End-->

   <?php
   require "footer.php"
   ?>

   </div>
   <!--   JS Files Start  -->
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/jquery-migrate-1.4.1.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.prettyPhoto.js"></script>
   <script src="js/isotope.min.js"></script>
   <script src="js/custom.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="script.js"></script>

</body>


</html>