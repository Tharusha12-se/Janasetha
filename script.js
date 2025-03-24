function signup() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var nic = document.getElementById("nic");
  var mobile = document.getElementById("m");
  var password = document.getElementById("p");

  var form = new FormData();
  form.append("f", fname.value);
  form.append("l", lname.value);
  form.append("n", nic.value);
  form.append("m", mobile.value);
  form.append("p", password.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        Swal.fire({
          title: "Success!",
          text: "Your Registration completed successfully.",
          icon: "success",
          confirmButtonText: "OK",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.reload();
          }
        });
      } else {
        Swal.fire({
          title: "Error",
          text: response,
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel!",
        });
      }
    }
  };

  request.open("POST", "signupProcess.php", true);
  request.send(form);
}

function signintoaccount() {
  var mobile = document.getElementById("mobile");
  var password = document.getElementById("password");
  var rememberme = document.getElementById("checkrem");

  var form = new FormData();
  form.append("mobile", mobile.value);
  form.append("password", password.value);
  form.append("rememberme", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        Swal.fire({
          title: "Success!",
          text: "SignIn successfully.",
          icon: "success",
          confirmButtonText: "OK",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "index.php";
          }
        });
      } else {
        Swal.fire({
          title: "Oops..",
          text: response,
          icon: "error",
          confirmButtonColor: "#d33",
        });
      }
    }
  };

  request.open("POST", "signInProcess.php", true);
  request.send(form);
}

// gotocity
function gotocity(id) {
  window.location.href = `allusers.php?id=${id}`;
}

function loadallusers() {
  let currentUrl = window.location.href;
  let url = new URL(currentUrl);
  let searchParams = url.searchParams.get("id");

  var form = new FormData();
  form.append("id", searchParams);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "Empty Data.") {
        window.location = "index.php";
      } else {
        document.getElementById("usersbox").innerHTML = response;
      }
    }
  };

  request.open("POST", "loadusers.php", true);
  request.send(form);
}
function searchUsers() {
  let currentUrl = window.location.href;
  let url = new URL(currentUrl);
  let searchParams = url.searchParams.get("id");

  var search = document.getElementById("searchData").value;

  var form = new FormData();
  form.append("id", searchParams);
  form.append("search", search);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "Empty Data.") {
        Swal.fire({
          title: "Opps!",
          text: "Users Not Found.",
          icon: "error",
          confirmButtonText: "OK",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.reload();
          }
        });
      } else {
        document.getElementById("usersbox").innerHTML = response;
      }
    }
  };

  request.open("POST", "searchusers.php", true);
  request.send(form);
}

// addfamilyMember
function addfamilyMember(userId) {
  window.location.href = `addfamilymember.php?id=${userId}`;
}

// function loadfamilymember(){

//   var name = document.getElementById("name");
//   var relation = document.getElementById("relation");
//   var nic = document.getElementById("nic");
//   var age = document.getElementById("age");
//   var occupation = document.getElementById("occupation");
//   var education = document.getElementById("education");

//   var form = new FormData();
//   form.append("name", name.value);
//   form.append("relation", relation.value);
//   form.append("nic", nic.value);
//   form.append("age", age.value);
//   form.append("occupation", occupation.value);
//   form.append("education", education.value);

//   var request = new XMLHttpRequest();

//   request.onreadystatechange = function () {
//     if ((request.status == 200) & (request.readyState == 4)) {
//       var response = request.responseText;

//       if (response == "success") {
//         Swal.fire({
//           title: "Success!",
//           text: "SignIn successfully.",
//           icon: "success",
//           confirmButtonText: "OK",
//         });
//         window.location = "index.php";
//       } else {
//         Swal.fire({
//           title: "Oops..",
//           text: response,
//           icon: "error",
//           confirmButtonColor: "#d33",
//         });
//       }
//     }
//   };

//   request.open("POST", "signInProcess.php", true);
//   request.send(form);

// }

function addmember() {
  let currentUrl = window.location.href;
  let url = new URL(currentUrl);
  let searchParams = url.searchParams.get("id");

  var name = document.getElementById("name");
  var relation = document.getElementById("relation");
  var nic = document.getElementById("nic");
  var age = document.getElementById("age");
  var occupation = document.getElementById("occupation");
  var education = document.getElementById("education");

  var form = new FormData();
  form.append("id", searchParams);
  form.append("name", name.value);
  form.append("relation", relation.value);
  form.append("nic", nic.value);
  form.append("age", age.value);
  form.append("occupation", occupation.value);
  form.append("education", education.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        Swal.fire({
          title: "Success!",
          text: "Member Added successfully.",
          icon: "success",
          confirmButtonText: "OK",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.reload();
          }
        });
      } else {
        Swal.fire({
          title: "Oops..",
          text: response,
          icon: "error",
          confirmButtonColor: "#d33",
        });
      }
    }
  };

  request.open("POST", "addFamilyMembers.php", true);
  request.send(form);
}

function loadallmembers() {
  let currentUrl = window.location.href;
  let url = new URL(currentUrl);
  let searchParams = url.searchParams.get("id");

  var form = new FormData();
  form.append("id", searchParams);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "Empty Data.") {
        document.getElementById("membertable").className = "d-none";
        document.getElementById("membertitle").className = "d-none";
      } else {
        document.getElementById("members").innerHTML = response;
      }
    }
  };

  request.open("POST", "loadmember.php", true);
  request.send(form);
}

function registerUser() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      function (position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        var form = new FormData();

        // Collect form data
        form.append("name", document.getElementById("name").value);
        form.append("age", document.getElementById("age").value);
        form.append("address_line1", document.getElementById("address_line1").value);
        form.append("city", document.getElementById("city").value);
        form.append("mobile", document.getElementById("mobile").value);
        form.append("stable_phone", document.getElementById("stable_phone").value);
        form.append("income", document.getElementById("income").value);
        form.append("village", document.getElementById("village").value);
        form.append("officer_domain", document.getElementById("officer_domain").value);
        form.append("secretariat", document.getElementById("secretariat").value);
        form.append("joining_date", document.getElementById("joining_date").value);
        form.append("cbo_name", document.getElementById("cbo_name").value);
        form.append("cbo_start_date", document.getElementById("cbo_start_date").value);
        form.append("cbo_members", document.getElementById("cbo_members").value);

        // Saving & Land Ownership Radio Buttons
        var saving1 = document.getElementById("dosaving1");
        var saving2 = document.getElementById("dosaving2");
        form.append("saving", saving1.checked ? saving1.value : saving2.checked ? saving2.value : "");

         form.append("saving_amount", document.getElementById("saving_amount").value);

        var land_ownership1 = document.getElementById("ownership1");
        var land_ownership2 = document.getElementById("ownership2");
        form.append("land_ownership", land_ownership1.checked ? land_ownership1.value :
           land_ownership2.checked ? land_ownership2.value : "");

        form.append("land_size", document.getElementById("land_size").value);
        form.append("cultivated_size", document.getElementById("cultivated_size").value);
        form.append("plantable_size", document.getElementById("plantable_size").value);
        form.append("empty_land", document.getElementById("empty_land").value);
        form.append("cultivation_details", document.getElementById("cultivation_details").value);

        var water_source1 = document.getElementById("watersource1");
        var water_source2 = document.getElementById("watersource2");
        var water_source3 = document.getElementById("watersource3");
        var water_source4 = document.getElementById("watersource4");
        var water_source5 = document.getElementById("watersource5");
        var water_source6 = document.getElementById("watersource6");
        form.append("water_source", 
          water_source1.checked ? water_source1.value :
          water_source2.checked ? water_source2.value :
          water_source3.checked ? water_source3.value :
          water_source4.checked ? water_source4.value :
          water_source5.checked ? water_source5.value :
          water_source6.checked ? water_source6.value : "");

          var land_type1 = document.getElementById("type1");
          var land_type2 = document.getElementById("type2");
          var land_type3 = document.getElementById("type3");
          var land_type4 = document.getElementById("type4");
          var land_type5 = document.getElementById("type5");
          form.append("land_type", 
            land_type1.checked ? land_type1.value :
            land_type2.checked ? land_type2.value :
            land_type3.checked ? land_type3.value :
            land_type4.checked ? land_type4.value :
            land_type5.checked ? land_type5.value : "");  

        // Function to get the numeric value from selected radio buttons


        // Create a FormData object
      

       // Function to get the numeric value from selected radio buttons

        // Image Upload
        var imageChooser = document.getElementById("imageChooser");
        if (imageChooser.files.length > 0) {
          form.append("profile_image", imageChooser.files[0]);
        }

        // Append User Location
        form.append("latitude", latitude);
        form.append("longitude", longitude);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
          if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText.trim();

            if (response === "success") {
              Swal.fire({
                title: "Success!",
                text: "Registration successful.",
                icon: "success",
                confirmButtonText: "OK",
              }).then(() => {
                window.location = "index.php";
              });
            } else {
              Swal.fire({
                title: "Error",
                text: response,
                icon: "error",
                confirmButtonColor: "#d33",
              });
              
            }
          }
        };

        request.open("POST", "registerProcess.php", true);
        request.send(form);
      },
      function (error) {
        Swal.fire({
          title: "Location Access Denied",
          text: "Please allow location access to register.",
          icon: "error",
          confirmButtonColor: "#d33",
        });
      }
    );
  } else {
    Swal.fire({
      title: "Geolocation Not Supported",
      text: "Your browser does not support location tracking.",
      icon: "error",
      confirmButtonColor: "#d33",
    });
  }
}

