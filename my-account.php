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
         <h1>My Account</h1>
         <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#"> My Account </a></li>
         </ul>
      </div>
   </section>
   <!--Inner Header End-->
   <!--Causes Start-->
   <section class="wf100 p80">
      <div class="container">
         <div class="row">

            <div class="col-lg-4">
               <div class="login-box">
                  <h3>Login Account</h3>
                  <form>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Username/Email" id="mobile2" required>
                     </div>
                     <div class="input-group">
                        <input type="password" class="form-control" placeholder="Password" id="password2" required>
                     </div>
                     <div class="input-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberme">
                        <label class="form-check-label" for="exampleCheck2">Remember Me</label>
                        <a href="#" class="fp">Forgot Password</a>
                     </div>
                     <div class="input-group">
                        <button class="login-btn" onclick="signin();">Login Account</button>
                     </div>
                  </form>
               </div>
            </div>


            <div class="col-lg-8">
               <div class="myaccount-form">
                  <h3>Register Your Account</h3>

                  <ul class="row">
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="First Name" id="fname" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Last Name" id="lname" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Nic" id="nic" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Mobile" id="m" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Password" id="p" required>
                        </div>
                     </li>


                     <li class="col-md-12">
                        <div class="input-group form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                           <label class="form-check-label" for="exampleCheck1">I agree to the Terms of <a href="#">Services & Privacy Plicy</a></label>
                        </div>
                     </li>
                     <li class="col-md-12">
                        <button class="register" onclick="signup();">Register Your Account</button>
                     </li>
                  </ul>

               </div>
            </div>

         </div>
      </div>
   </section>
   <!--Causes End-->
   <!--Footer Start-->
   <footer class="footer">
      <div class="footer-top wf100">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <!--Footer Widget Start-->
                  <div class="footer-widget">
                     <h4>About Ecova</h4>
                     <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of green businesses helping people save energy, water, and other resources. Definitely, you can go with this business as it is a nothing but the future. </p>
                     <a href="#" class="lm">About us</a>
                  </div>
                  <!--Footer Widget End-->
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <!--Footer Widget Start-->
                  <div class="footer-widget">
                     <h4>Our Promises</h4>
                     <ul class="quick-links">
                        <li><a href="#">Solar Energy</a></li>
                        <li><a href="#">Waste Management</a></li>
                        <li><a href="#">Eco Ideas</a></li>
                        <li><a href="#">Recycling Materials</a></li>
                        <li><a href="#">Plant Ecology</a></li>
                        <li><a href="#">Saving Wildlife </a></li>
                     </ul>
                  </div>
                  <!--Footer Widget End-->
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <!--Footer Widget Start-->
                  <div class="footer-widget">
                     <h4>Latest Posts</h4>
                     <ul class="lastest-products">
                        <li> <img src="images/flp1.jpg" alt=""> <strong><a href="#">How you can keep alive wild animals for...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                        <li> <img src="images/flp2.jpg" alt=""> <strong><a href="#">Eliminate your plastic bottle pollution & keep...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                        <li> <img src="images/flp3.jpg" alt=""> <strong><a href="#">How you can keep alive wild animals for...</a></strong> <span class="pdate"><i>Posted:</i> 29 September, 2018</span> </li>
                     </ul>
                  </div>
                  <!--Footer Widget End-->
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <!--Footer Widget Start-->
                  <div class="footer-widget">
                     <div id="fpro-slider" class="owl-carousel owl-theme">
                        <!--Footer Product Start-->
                        <div class="item">
                           <div class="f-product">
                              <img src="images/fpro1.jpg" alt="">
                              <div class="fp-text">
                                 <h6><a href="#">Buy T-Shirts</a></h6>
                                 <strong>$19.00</strong>
                              </div>
                           </div>
                        </div>
                        <!--Footer Product End-->
                        <!--Footer Product Start-->
                        <div class="item">
                           <div class="f-product">
                              <img src="images/fpro1.jpg" alt="">
                              <div class="fp-text">
                                 <h6><a href="#">Buy T-Shirts</a></h6>
                                 <strong>$19.00</strong>
                              </div>
                           </div>
                        </div>
                        <!--Footer Product End-->
                        <!--Footer Product Start-->
                        <div class="item">
                           <div class="f-product">
                              <img src="images/fpro1.jpg" alt="">
                              <div class="fp-text">
                                 <h6><a href="#">Buy T-Shirts</a></h6>
                                 <strong>$19.00</strong>
                              </div>
                           </div>
                        </div>
                        <!--Footer Product End-->
                     </div>
                  </div>
                  <!--Footer Widget End-->
               </div>
            </div>
         </div>
      </div>
      <div class="footer-copyr wf100">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-4"> <img src="images/logo.png" alt=""> </div>
               <div class="col-md-8 col-sm-8">
                  <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!--Footer End-->
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