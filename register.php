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
                  <form>
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
                              <!-- Clickable image -->
                              <img
                                 id="imagePreview"
                                 src="images/man.png"
                                 alt="man"
                                 style="width: 150px; height: 150px; cursor: pointer; object-fit: cover;border: solid;padding: 5px; border-color: ;"
                                 class="rounded-circle"
                                 onclick="document.getElementById('imageChooser').click();">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="1.Name (නම)" required>
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
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="2.Age (වයස)" required>
                           </div>
                        </li>
                        <li class="col-12">
                           <label style="color: black;">3.Address (ලිපිනය)</label>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Line 01" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Line 02" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="4.City (නගරය)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="5.Tel-No Mobile (ජංගම දුරකථන අංකය)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="6.Tel-No Stable (ස්ථාවර දුරකථන අංකය)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="7.Monthly Income (මාසික අදායම)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="8.Village (ගම)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="9.Village Officer Domain (ග්‍රාම නිලධාරී වසම)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="10.Divisional Secretariat (ප්‍රාදේශීය ලේකම් කාර්යාලය)">
                           </div>
                        </li>

                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="11.Date Of Joining The Project (ව්‍යාපෘතියට සම්බන්ද වූ දවස)" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="12.Name Of C.B.O. (C.B.O. නම)" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="13.Date Of Started C.B.O. (C.B.O. ආරම්භක දිනය)" required>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="14.Number Of Members C.B.O. (C.B.O. සාමාජිකයින් සංඛ්‍යාව)">
                           </div>
                        </li>
                        <li class="col-md-6 mb-4 mb-lg-0">
                           <div class="row" style="color:black;">
                              <div class="col-12">
                                 <label>15.Make Saving (ඉතිරි කිරීම කරනවාද?)</label>
                              </div>

                              <div class="col-12">
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Yes (ඔව්)</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No (නැත)</label>
                                 </div>

                              </div>
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="16.Saving Amount (ඉතිරි කරන ලද මුදල)">
                           </div>
                        </li>
                        <li class="col-md-6 mb-4 mb-lg-0">
                           <div class="row" style="color:black;">
                              <div class="col-12">
                                 <label>17.Do You Own The Land (ඉඩමේ අයිතිය ඔබ සතුද?)</label>
                              </div>

                              <div class="col-6">
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Yes (ඔව්)</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No (නැත)</label>
                                 </div>

                              </div>
                           </div>
                        </li>
                        <br /><br />



                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="18.Size Of Land (ඉඩමේ ප්‍රමාණය)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="19.Amount Cultivated (වගා කර ඇති ප්‍රමාණය)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="20.Plantable Size (වගා කල හැකි ප්‍රමාණය)">
                           </div>
                        </li>
                        <li class="col-md-6">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="21.Empty Land (හිස් ඉඩම)">
                           </div>
                        </li>



                        <li class="col-md-12">
                           <div class="your-comments wf100">
                              <label style="color:black;">22.A Brief of Cultivation (වගා කර ඇති දේ පිළිබද කෙටි විස්තරයක්)</label>
                              <textarea class="form-control" placeholder="Type Here.."></textarea>

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
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Well (ළිද)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Irrigation (වාරි මාර්ග)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Water Line (ජල නල පද්ධති මගින්)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Rain Water (අහස් දිය)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Lake (වැව)</label>
                                 </div>
                                 <div class="form-check ml-3">
                                    <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
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
                                       <div class="form-check">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">For Rent (කුලියට)</label>
                                       </div>
                                       <div class="form-check ">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Ownership Is Unclear (අයිතිය නිරවුල් නැත)</label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tax Base (බදු පදනමට)</label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Land Own By Parents (දෙමාපියන් සතු ඉඩමකි)</label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Other (වෙනත්)</label>
                                       </div>
                                    </div>

                                 </div>
                                 <!-- <div class="row d-block d-lg-none mb-3">
                                 <div class="col-12">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                       <label class="form-check-label" for="inlineRadio1">For Rent (කුලියට)</label>
                                    </div>
                                    <div class="form-check ">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Ownership Is Unclear (අයිතිය නිරවුල් නැත)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Tax Base (බදු පදනමට)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Land Own By Parents (දෙමාපියන් සතු ඉඩමකි)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Other (වෙනත්)</label>
                                    </div>
                                 </div>

                              </div> -->


                              </div>
                           </div>
                        </li>
                        <li class="mt-3 mt-lg-5 ml-lg-3 col-12 mb-5 d-flex justify-content-center">
                           <a class="mdonate mr-lg-3 text-white text-center w-100" href="register.php"><span>Register Users</span></a>
                        </li>
                     </ul>
                     <!-- <br /><br /> -->


                     <!-- <h5>Details Of Family Member</h5>
                  <ul class="row">
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="First Name" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Last Name" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Relationship To The House Holder" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="NIC" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Age">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Occupation">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Education">
                        </div>
                     </li>
                  </ul>
                  <br /><br /> -->



                     <!-- <h5>Project Details</h5> -->
                     <!-- <ul class="row">
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Date Of Joining The Project (ව්‍යාපෘතියට සම්බන්ද වූ දවස)" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Name Of C.B.O. (C.B.O. නම)" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Date Of Started C.B.O. (C.B.O. ආරම්භක දිනය)" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Number Of Members C.B.O. (C.B.O. සාමාජිකයින් සංඛ්‍යාව)">
                        </div>
                     </li>
                     <li class="col-md-6 mb-4 mb-lg-0">
                        <div class="row" style="color:black;">
                           <div class="col-12">
                              <label >Make Saving (ඉතිරි කිරීම කරනවාද?)</label>
                           </div>

                           <div class="col-12">
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
                                 <label class="form-check-label" for="inlineRadio1">Yes (ඔව්)</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2">
                                 <label class="form-check-label" for="inlineRadio2">No (නැත)</label>
                              </div>

                           </div>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Saving Amount (ඉතිරි කරන ලද මුදල)">
                        </div>
                     </li>
                     <li class="col-md-6 mb-4 mb-lg-0">
                        <div class="row" style="color:black;">
                           <div class="col-12">
                              <label >Do You Own The Land (ඉඩමේ අයිතිය ඔබ සතුද?)</label>
                           </div>

                           <div class="col-6">
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                 <label class="form-check-label" for="inlineRadio1">Yes (ඔව්)</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                 <label class="form-check-label" for="inlineRadio2">No (නැත)</label>
                              </div>

                           </div>
                        </div>
                     </li>
                     <br /><br />



                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Size Of Land (ඉඩමේ ප්‍රමාණය)">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Amount Cultivated (වගා කර ඇති ප්‍රමාණය)">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Plantable Size (වගා කල හැකි ප්‍රමාණය)">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Empty Land (හිස් ඉඩම)">
                        </div>
                     </li>

                     <li class="col-md-6 mb-4 mb-lg-0">

                        <div class="row" style="color:black;">
                           <div class="col-12">
                              <label >Type Of Land (ඉඩමේ ස්වභාවය)</label>
                           </div>

                           <div class="col-12">
                              <div class="row d-none d-lg-block position-absolute mb-3">
                                 <div class="col-12">
                                    <div class="form-check">
                                       <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                       <label class="form-check-label" for="inlineRadio1">For Rent (කුලියට)</label>
                                    </div>
                                    <div class="form-check ">
                                       <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Ownership Is Unclear (අයිතිය නිරවුල් නැත)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Tax Base (බදු පදනමට)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Land Own By Parents (දෙමාපියන් සතු ඉඩමකි)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Other (වෙනත්)</label>
                                    </div>
                                 </div>

                              </div>
                              <div class="row d-block d-lg-none mb-3">
                                 <div class="col-12">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                       <label class="form-check-label" for="inlineRadio1">For Rent (කුලියට)</label>
                                    </div>
                                    <div class="form-check ">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Ownership Is Unclear (අයිතිය නිරවුල් නැත)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Tax Base (බදු පදනමට)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Land Own By Parents (දෙමාපියන් සතු ඉඩමකි)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Other (වෙනත්)</label>
                                    </div>
                                 </div>

                              </div>


                           </div>
                        </div>
                     </li>

                     <li class="col-md-6">
                        <div class="your-comments wf100">
                           <label style="color:black;">A Brief of Cultivation (වගා කර ඇති දේ පිළිබද කෙටි විස්තරයක්)</label>
                           <textarea class="form-control" placeholder="Type Here.."></textarea>

                        </div>
                     </li>



                  </ul> -->



                     <!-- <ul class="row">
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Age" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Address" required>
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="city">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Tel-No Mobile">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Tel-No Stable">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Monthly Income">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Village">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Village Officer Domain">
                        </div>
                     </li>
                     <li class="col-md-6">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Divisional Secretariat">
                        </div>
                     </li>

                  </ul> -->
                     <br /><br />











                  </form>
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