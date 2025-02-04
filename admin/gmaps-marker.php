<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Marker</h4>
                  </div>
                  <div class="card-body">
                    <div id="map" data-height="400"></div>
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
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="assets/bundles/gmaps.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/gmaps-marker.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- gmaps-marker.html  21 Nov 2019 04:04:56 GMT -->
</html>