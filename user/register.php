<!doctype html>
<html lang="en">

<head>
   <link rel="icon" href="images/logo/logo.png">
</head>

<body style="min-height: 100vh;">

   <?php
   include "header.php";
   ?>

   <!--Inner Header Start-->
   <section class="wf100 p100 inner-header">
      <div class="container">
         <h1>Register Users</h1>
      </div>
   </section>
   <!--Inner Header End-->
   <!--Causes Start-->
   <section class="wf100 p80">
      <div class="container">
         <div class="row">

            <div class="col-lg-12">
               <div class="myaccount-form">
                  <h3>Register Your Account</h3>

                  <!-- <h5>User Details</h5> -->
                  <ul class="row">
                     <li class="col-md-12 text-center mb-4">
                        <div>
                           <!-- Hidden file input -->
                           <input
                              type="file"
                              id="imageChooser"
                              style="display: none;object-fit: cover;"
                              accept="image/*"
                              onchange="previewImage(event)">

                              <!-- Hidden manual location fields (fallback) -->
<input type="hidden" id="manualLatitude" name="manual_latitude">
<input type="hidden" id="manualLongitude" name="manual_longitude">

                           <!-- Clickable image -->
                           <img
                              id="imagePreview"
                              src="images/man.jpg"
                              alt="man"
                              style="width: 150px; height: 150px; cursor: pointer; object-fit: cover;border: solid;padding: 5px;"
                              class="rounded-circle"
                              onclick="document.getElementById('imageChooser').click();">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">1.Name (නම)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Name (නම)" required id="name">
                        </div>
                     </li>
                     <!-- <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Last Name" required>
                        </div>
                     </li> -->
                     <!-- <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="NIC (ජාතික හැදුනුම්පත් අංකය)" required>
                        </div>
                     </li> -->
                     <li class="col-md-6">
                        <label style="color: black;">2.Age (වයස)</label>

                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Age (වයස)" required id="age">
                        </div>
                     </li>

                     <li class="col-12">
                        <label style="color: black;">3.Address (ලිපිනය)</label>
                     </li>
                     <li class="col-12">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Address (ලිපිනය)" required id="address_line1">
                        </div>
                     </li>
                     <!-- <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Line 02" required id="address_line2" >
                           </div>
                        </li> -->
                     <li class="col-md-6">
                        <label style="color: black;">4.City (නගරය)</label>
                        <div class="input-group">
                           <!-- <input type="text" class="form-control" placeholder="City (නගරය)" id="city" > -->
                           <select class="form-control" id="city" style="height: 54px;">
                              <option value="">Select</option>

                              <?php

                              require "connection.php";

                              $data = Database::search("SELECT * FROM `city`");
                              $num = $data->num_rows;

                              for ($i = 0; $i < $num; $i++) {
                                 $dataset = $data->fetch_assoc();
                              ?>
                                <option value="<?php echo $dataset["id"] ?>"><?php echo $dataset["name"] ?></option>

                              <?php
                              }

                              ?>

                           </select>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">5.Tel-No Mobile (ජංගම දුරකථන අංකය)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Tel-No Mobile (ජංගම දුරකථන අංකය)" id="mobile">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">6.Tel-No Stable (ස්ථාවර දුරකථන අංකය)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Tel-No Stable (ස්ථාවර දුරකථන අංකය)" id="stable_phone">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">7.Monthly Income (මාසික අදායම)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Monthly Income (මාසික අදායම)" id="income">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">8.Village (ගම)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Village (ගම)" id="village">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">9.Village Officer Domain (ග්‍රාම නිලධාරී වසම)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Village Officer Domain (ග්‍රාම නිලධාරී වසම)" id="officer_domain">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">10.Divisional Secretariat (ප්‍රාදේශීය ලේකම් කාර්යාලය)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Divisional Secretariat (ප්‍රාදේශීය ලේකම් කාර්යාලය)" id="secretariat">
                        </div>
                     </li>

                     <li class="col-md-6">
                        <label style="color: black;">11.Date Of Joining The Project (ව්‍යාපෘතියට සම්බන්ද වූ දවස)</label>
                        <div class="input-group">
                           <input type="date" class="form-control" placeholder="Date Of Joining The Project (ව්‍යාපෘතියට සම්බන්ද වූ දවස)" required id="joining_date">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">12.Name Of C.B.O. (C.B.O. නම)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Name Of C.B.O. (C.B.O. නම)" required id="cbo_name">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">13.Date Of Started C.B.O. (C.B.O. ආරම්භක දිනය)</label>
                        <div class="input-group">
                           <input type="date" class="form-control" placeholder="Date Of Started C.B.O. (C.B.O. ආරම්භක දිනය)" id="cbo_start_date">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">14.Number Of Members C.B.O. (C.B.O. සාමාජිකයින් සංඛ්‍යාව)</label>
                        <div class="input-group">
                           <input type="number" class="form-control" placeholder="Number Of Members C.B.O. (C.B.O. සාමාජිකයින් සංඛ්‍යාව)" id="cbo_members">
                        </div>
                     </li>
                     <li class="col-md-6 mb-4 mb-lg-0">
                        <div class="row" style="color:black;">
                           <div class="col-12">
                              <label>15.Make Saving (ඉතිරි කිරීම කරනවාද?)</label>
                           </div>

                              <div class="col-12">
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions1" id="dosaving1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Yes (ඔව්)</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions1" id="dosaving2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">No (නැත)</label>
                                 </div>

                           </div>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">16.Saving Amount (ඉතිරි කරන ලද මුදල)</label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Saving Amount (ඉතිරි කරන ලද මුදල)" id="saving_amount">
                        </div>
                     </li>
                     <li class="col-md-6 mb-4 mb-lg-0">
                        <div class="row" style="color:black;">
                           <div class="col-12">
                              <label>17.Do You Own The Land (ඉඩමේ අයිතිය ඔබ සතුද?)</label>
                           </div>

                              <div class="col-6">
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="ownership1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Yes (ඔව්)</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="ownership2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">No (නැත)</label>
                                 </div>

                           </div>
                        </div>
                     </li>
                     <br /><br />



                     <li class="col-md-6">
                        <label style="color: black;">18.Size Of Land (ඉඩමේ ප්‍රමාණය) - <span style="font-weight: bold; color:red;">පර්චස්</span></label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Size Of Land (ඉඩමේ ප්‍රමාණය)" id="land_size">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">19.Amount Cultivated (වගා කර ඇති ප්‍රමාණය) - <span style="font-weight: bold; color:red;">පර්චස්</span></label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Amount Cultivated (වගා කර ඇති ප්‍රමාණය)" id="cultivated_size">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">20.Plantable Size (වගා කල හැකි ප්‍රමාණය) - <span style="font-weight: bold; color:red;">පර්චස්</span></label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Plantable Size (වගා කල හැකි ප්‍රමාණය)" id="plantable_size">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <label style="color: black;">21.Empty Land (හිස් ඉඩම) - <span style="font-weight: bold; color:red;">පර්චස්</span></label>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Empty Land (හිස් ඉඩම)" id="empty_land">
                        </div>
                     </li>



                     <li class="col-md-12">
                        <div class="your-comments wf100">
                           <label style="color:black;">22.A Brief of Cultivation (වගා කර ඇති දේ පිළිබද කෙටි විස්තරයක්)</label>
                           <textarea class="form-control" placeholder="Type Here.." id="cultivation_details"></textarea>

                        </div>
                     </li>

                  </ul>

                  <ul class="row">
                     <li class="col-lg-6">

                           <div class="row" style="color:black;">
                              <div class="col-12">
                                 <label>23.Main Water Source (ප්‍රධාන ජල ප්‍රභවයක් තිබේද?)</label>
                              </div>
                              <div class="col-12">
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions2" id="watersource1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Well (ළිද)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions2" id="watersource2" value="2">
                                    <label class="form-check-label" for="inlineRadio1">Irrigation (වාරි මාර්ග)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions2" id="watersource3" value="3">
                                    <label class="form-check-label" for="inlineRadio1">Water Line (ජල නල පද්ධති මගින්)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions2" id="watersource4" value="4">
                                    <label class="form-check-label" for="inlineRadio1">Rain Water (අහස් දිය)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions2" id="watersource5" value="5">
                                    <label class="form-check-label" for="inlineRadio1">Lake (වැව)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions2" id="watersource6" value="6">
                                    <label class="form-check-label" for="inlineRadio1">Other (වෙනත්)</label>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="col-md-6 mb-4 mt-4 mt-lg-0 mb-lg-0">

                        <div class="row" style="color:black;">
                           <div class="col-12">
                              <label>24.Type Of Land (ඉඩමේ ස්වභාවය)</label>
                           </div>

                              <div class="col-12">
                                 <div class="row mb-3">
                                    <div class="col-12">
                                       <div class="form-check ml-3">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions3" id="type1" value="1">
                                          <label class="form-check-label" for="inlineRadio1">For Rent (කුලියට)</label>
                                       </div>
                                       <div class="form-check ml-3">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions3" id="type2" value="2">
                                          <label class="form-check-label" for="inlineRadio2">Ownership Is Unclear (අයිතිය නිරවුල් නැත)</label>
                                       </div>
                                       <div class="form-check ml-3">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions3" id="type3" value="3">
                                          <label class="form-check-label" for="inlineRadio2">Tax Base (බදු පදනමට)</label>
                                       </div>
                                       <div class="form-check ml-3">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions3" id="type4" value="4">
                                          <label class="form-check-label" for="inlineRadio2">Land Own By Parents (දෙමාපියන් සතු ඉඩමකි)</label>
                                       </div>
                                       <div class="form-check ml-3">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions3" id="type5" value="5">
                                          <label class="form-check-label" for="inlineRadio2">Other (වෙනත්)</label>
                                       </div>
                                    </div>

                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="mt-3 mt-lg-5 ml-lg-3 col-12 mb-5 d-flex justify-content-center">
                        <a class="mdonate mr-lg-3 text-white text-center w-100" onclick="registerUser();"><span>Register Users</span></a>
                     </li>
                  </ul>
                  <!-- <br /><br /> -->

                  <br /><br />

               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Causes End-->
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
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>
      function previewImage(event) {
         const input = event.target;
         const imagePreview = document.getElementById('imagePreview');

         if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
               imagePreview.src = e.target.result; // Set the selected image as the img src
            };

            reader.readAsDataURL(input.files[0]); // Read the file as a data URL
         }
      }
   </script>
</body>


</html>