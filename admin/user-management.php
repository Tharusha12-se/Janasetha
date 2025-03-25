<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require "header.php";
  ?>
  <!-- Datatable -->
  <link rel="stylesheet" href="assets//css//datatables.css">
  <!-- link Jquery -->
  <script src="js/jquery-3.7.1.min.js"></script>
  <!-- link Jquery -->

</head>

<body>
  <!-- Main Content -->
  <div class="main-content" style="font-size: 20px;">
    <section class="section">

      <div class="row">
        <div class="col-12">
          <div class="card h-100">
            <div class="card-header">
              <h4>User Details Table</h4>
              <!-- <div class="card-header-form">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div> -->
            </div>
            <div class="card-body p-0">
              <div class="table-responsive p-3">
                <!-- table -->
                <table id="manageusertable" class="cell-border border border-secondary table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>User Name</th>
                      <th>City</th>
                      <th>Age</th>
                      <th>Mobile</th>
                      <th>Registered Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <?php
    include "footer.php";
    ?>

  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>

  <!-- table -->
   <script></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>

  <!-- Datatable js -->
  <script>
    $(document).ready(function() {
      var printCounter = 0;

      $('#manageusertable').DataTable({

        "ajax": {
          "url": "fetch_data.php",
          "dataSrc": "",
          "error": function(xhr, error, thrown) {
            console.log("Error: ", xhr, error, thrown);
            Swal.fire({
              title: "Error loading data.",
              icon: "warning",
              confirmButtonColor: "#FF0000",
            });
          }
        },
        "columns": [{
            "data": "user_name"
          },
          {
            "data": "name"
          },
          {
            "data": "age"
          },
          {
            "data": "tel-mobile"
          },
          {
            "data": "joined_date", // Format date here
            "render": function(data, type, row) {
              if (data) {
                // Format the date to YYYY-MM-DD
                var date = new Date(data);
                var year = date.getFullYear();
                var month = ("0" + (date.getMonth() + 1)).slice(-2); // Add leading 0 if month is single digit
                var day = ("0" + date.getDate()).slice(-2); // Add leading 0 if day is single digit
                return year + "-" + month + "-" + day;
              }
              return data; // If there's no date, return it as is
            }
          },
          {
            "data": "",
            "defaultContent": "<button class='btn btn-primary'>View</button>"
          }
        ],

        dom: "PBfrtip",
        scrollY: "100%",
        processing: true,
        searching: true,
        stateSave: true,
        scrollCollapse: true,
        responsive: {
          details: false
        },

        columnDefs: [{
          width: "100px",
          targets: [2],
          fixedColumns: true,
        }, ],
        lengthMenu: [
          [10, 25, 50, 100, -1],
          ["10 Rows", "25 Rows", "50 Rows", "100 Rows", "Show All"],
        ],

        buttons: [
          "pageLength",
          "colvis",
          {
            extend: "print",
            text: "Print",
            title: "Janasetha Caritas",
            exportOptions: {
              // Customize which columns to export
              columns: ':visible'
            }
          },
        ],

      });

    });
  </script>
  <!-- Datatable js -->


  <!-- index.html  21 Nov 2019 03:47:04 GMT -->
</body>

</html>