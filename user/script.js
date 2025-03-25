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
  // Show loading indicator
  Swal.fire({
    title: 'Getting Location',
    html: 'Please wait while we get your location...',
    allowOutsideClick: false,
    didOpen: () => {
      Swal.showLoading();
    }
  });

  // First try to get precise location
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      function(position) {
        // Success - got precise location
        Swal.close();
        submitFormWithLocation(
          position.coords.latitude, 
          position.coords.longitude,
          'auto'
        );
      },
      function(error) {
        // Failed to get precise location - show manual option
        showManualLocationOption(error);
      },
      {
        enableHighAccuracy: true,
        timeout: 10000,
        maximumAge: 0
      }
    );
  } else {
    // Geolocation not supported - show manual option
    showManualLocationOption({code: 0});
  }
}

function showManualLocationOption(error) {
  let message = "We couldn't automatically get your location. ";
  
  switch(error.code) {
    case error.PERMISSION_DENIED:
      message += "You denied location access. ";
      break;
    case error.POSITION_UNAVAILABLE:
      message += "Location information is unavailable. ";
      break;
    case error.TIMEOUT:
      message += "The request to get location timed out. ";
      break;
    default:
      message += "Your browser doesn't support location services. ";
  }
  
  message += "Please enter your location manually below:";
  
  Swal.fire({
    title: 'Enter Location',
    html: `
      <p>${message}</p>
      <div class="row">
        <div class="col-md-6">
          <label for="manualLatitude">Latitude:</label>
          <input type="text" id="manualLatitude" class="swal2-input" placeholder="e.g. 6.9271">
        </div>
        <div class="col-md-6">
          <label for="manualLongitude">Longitude:</label>
          <input type="text" id="manualLongitude" class="swal2-input" placeholder="e.g. 79.8612">
        </div>
      </div>
      <p class="text-muted mt-2">You can find coordinates using Google Maps</p>
    `,
    focusConfirm: false,
    showCancelButton: true,
    confirmButtonText: 'Submit',
    cancelButtonText: 'Skip Location',
    preConfirm: () => {
      const lat = Swal.getPopup().querySelector('#manualLatitude').value;
      const lng = Swal.getPopup().querySelector('#manualLongitude').value;
      
      if (lat && lng) {
        if (!isValidLatitude(lat) || !isValidLongitude(lng)) {
          Swal.showValidationMessage('Please enter valid coordinates');
          return false;
        }
        return { lat: parseFloat(lat), lng: parseFloat(lng) };
      }
      return { lat: null, lng: null };
    }
  }).then((result) => {
    if (result.isConfirmed) {
      // User entered manual coordinates
      submitFormWithLocation(
        result.value.lat, 
        result.value.lng,
        'manual'
      );
    } else if (result.dismiss === Swal.DismissReason.cancel) {
      // User chose to skip location
      submitFormWithLocation(null, null, 'skipped');
    }
  });
}

function isValidLatitude(lat) {
  return !isNaN(lat) && lat >= -90 && lat <= 90;
}

function isValidLongitude(lng) {
  return !isNaN(lng) && lng >= -180 && lng <= 180;
}

function submitFormWithLocation(latitude, longitude, source) {
  // Show submission progress
  Swal.fire({
    title: 'Processing Registration',
    html: 'Please wait while we submit your information...',
    allowOutsideClick: false,
    didOpen: () => {
      Swal.showLoading();
    }
  });

  var form = new FormData();

  // Collect all form data
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

  // Handle radio buttons
  form.append("saving", document.querySelector('input[name="saving"]:checked')?.value || '');
  form.append("saving_amount", document.getElementById("saving_amount").value);
  form.append("land_ownership", document.querySelector('input[name="land_ownership"]:checked')?.value || '');
  
  // Other fields
  form.append("land_size", document.getElementById("land_size").value);
  form.append("cultivated_size", document.getElementById("cultivated_size").value);
  form.append("plantable_size", document.getElementById("plantable_size").value);
  form.append("empty_land", document.getElementById("empty_land").value);
  form.append("cultivation_details", document.getElementById("cultivation_details").value);
  form.append("water_source", document.querySelector('input[name="water_source"]:checked')?.value || '');
  form.append("land_type", document.querySelector('input[name="land_type"]:checked')?.value || '');

  // Image upload
  var imageChooser = document.getElementById("imageChooser");
  if (imageChooser.files.length > 0) {
    form.append("profile_image", imageChooser.files[0]);
  }

  // Add location data
  if (latitude !== null && longitude !== null) {
    form.append("latitude", latitude);
    form.append("longitude", longitude);
  } else if (source === 'manual') {
    // If we're here, manual location was attempted but invalid
    form.append("manual_latitude", document.getElementById("manualLatitude")?.value || '');
    form.append("manual_longitude", document.getElementById("manualLongitude")?.value || '');
  }

  var request = new XMLHttpRequest();
  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      if (request.status == 200) {
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
            title: "Validation Error",
            html: response,
            icon: "error",
            confirmButtonColor: "#d33",
          });
        }
      } else {
        Swal.fire({
          title: "Server Error",
          text: "An error occurred while processing your request.",
          icon: "error",
          confirmButtonColor: "#d33",
        });
      }
    }
  };

  request.open("POST", "registerProcess.php", true);
  request.send(form);
}
