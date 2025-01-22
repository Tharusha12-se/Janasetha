<!doctype html>
<html lang="en">

<head>
   <link rel="icon" href="images/logo/logo.png">
</head>

<body style="overflow-x: hidden; width: 100%;">
   <?php
   include "header.php";
   ?>

   <!--Slider Start-->
   <section id="home-slider" class="owl-carousel owl-theme">
      <div class="item">
         <div class="slider-caption h2slider">
            <div class="container">
               <strong>Ecova<span> is the Best</span></strong>
               <h1>Eco Friendly</h1>
               <p>Nonprofit WordPress Theme</p>
               <a href="#" class="active">Find Out More</a> <a href="#">Join us Now</a>
            </div>
         </div>
         <img src="images/h2-slide1.jpg" alt="">
      </div>
      <div class="item">
         <div class="slider-caption h2slider">
            <div class="container">
               <strong><span>Please</span> Stop Hunting & </strong>
               <h1>Save WildLife</h1>
               <p>of <strong>endangered animals</strong> in the world</p>
               <a href="#" class="active">Find Out More</a> <a href="#">Join us Now</a>
            </div>
         </div>
         <img src="images/h2-slide2.jpg" alt="">
      </div>
      <div class="item">
         <div class="slider-caption h2slider">
            <div class="container">
               <strong>Save <span> & don’t waste our life</span> partner</strong>
               <h1>Water Resource</h1>
               <p>Before <strong>it’s too late</strong> for us...</p>
               <a href="#" class="active">Find Out More</a> <a href="#">Join us Now</a>
            </div>
         </div>
         <img src="images/h2-slide3.jpg" alt="">
      </div>
   </section>
   <!--Slider End-->

   <!-- village name card-->
   <section class="col-12 p-2 px-3">
      <div class="row p-3 mb-2 d-flex justify-content-center">
         <?php

         for ($i = 0; $i < 12; $i++) {
         ?>
            <div
               class="col-12 col-lg-3 ml-3 mr-3 mt-3 mb-3 border border-1 border-secondary rounded rounded-5 p-2 text-white d-flex justify-content-center align-items-center"
               style="cursor: pointer; background-color: #66bb6a; height: 100px;"
               onmouseover="this.style.backgroundColor='#43a047'; this.style.color='#000';"
               onmouseout="this.style.backgroundColor='#66bb6a'; this.style.color='#fff';">
               <span style="font-size: 24px;" onclick="gotocity('<?php echo $i; ?>');">Colombo</span>
            </div>

         <?php
         }

         ?>
      </div>
   </section>
   <!-- village name card-->

   <?php
   require "footer.php";
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
   <script src="script.js"></script>
</body>


</html>