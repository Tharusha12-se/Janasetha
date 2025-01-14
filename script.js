

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
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "success") {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your Registration completed successfully.',
                    icon: 'success',
                    confirmButtonText: 'OK',
                  });
                  
                  window.location.reload;
                  
            } else {
                Swal.fire({
                    title: 'Error',
                    text: response,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                  });
                  
            }

        }
    }

    request.open("POST", "signupProcess.php", true);
    request.send(form);
}

function signin() {

    var mobile = document.getElementById("mobile2");
    var password = document.getElementById("password2");
    var rememberme = document.getElementById("rememberme");

    // alert(mobile.value);
    // alert(password.value);

    var form = new FormData();
    form.append("m", mobile.value);
    form.append("p", password.value);
    form.append("r", rememberme.checked);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "success") {
                Swal.fire({
                    title: 'Success!',
                    text: 'SignIn successfully.',
                    icon: 'success',
                    confirmButtonText: 'OK',
                  });
                window.location = "index-2.php";
            } else {
                Swal.fire({
                    title: 'Error',
                    text: response,
                    icon: 'warning',
                    showCancelButton: true,
                   
                  });
            }

        }
    }

    request.open("POST", "signInProcess.php", true);
    request.send(form);

}