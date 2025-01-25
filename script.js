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
        });

        window.location.reload;
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
        });
        window.location = "index.php";
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

// addfamilyMember
function addfamilyMember(userId) {
  window.location.href = `addfamilymember.php?id=${userId}`;
}

function loadfamilymember(){

  var name = document.getElementById("name");
  var relation = document.getElementById("relation");
  var nic = document.getElementById("nic");
  var age = document.getElementById("age");
  var occupation = document.getElementById("occupation");
  var education = document.getElementById("education");

  var form = new FormData();
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
          text: "SignIn successfully.",
          icon: "success",
          confirmButtonText: "OK",
        });
        window.location = "index.php";
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

function addmember(){

  var name = document.getElementById("name");
  var relation = document.getElementById("relation");
  var nic = document.getElementById("nic");
  var age = document.getElementById("age");
  var occupation = document.getElementById("occupation");
  var education = document.getElementById("education");

  var form = new FormData();
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
          text: "SignIn successfully.",
          icon: "success",
          confirmButtonText: "OK",
        });
        window.location = "index.php";
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


