<!DOCTYPE html>
<html lang="en">


<?php
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");

session_start();
    if(isset($_SESSION['admin']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="../login.php";
        </script>
        ';
    }
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Fresh Mart</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="image/weblogo.jpg" />
  </head>
  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_horizontal-navbar.html -->
  <?php
  include('menu.php');
  ?>
  
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <br>
            <br>
            <!-- first row starts here -->
      
            <!-- chart row starts here -->
         
            <!-- image card row starts here -->
        
            <!-- table row starts here -->
          
            <!-- doughnut chart row starts -->
         <div class="row">
              <div class="col-sm-5 col-xl-5 stretch-card grid-margin"></div>
              <div class="col-sm-6 col-xl-6 stretch-card grid-margin">
                  <img src="image/weblogo.jpg" style="height: 200px;width: 200px;">

              </div>

            </div>
            <!-- last row starts here -->
            <div class="row">
             
          
              <div class="col-sm-12 col-xl-12 stretch-card grid-margin">
                <div class="card color-card-wrapper">
                  <div class="card-body">
                    <img class="img-fluid card-top-img w-100" src="assets/images/dashboard/img_5.jpg" alt="" />
                    <div class="d-flex flex-wrap justify-content-around color-card-outer">
                      <div class="col-2 p-0 mb-4">
                        <div class="color-card primary m-auto">
                          <i class="mdi mdi-clock-outline"></i>
                          <?php
                          $num=mysqli_num_rows(mysqli_query($con,"SELECT * FROM category"));
                          $num2=mysqli_num_rows(mysqli_query($con,"SELECT * FROM subcat"));
                          $num3=mysqli_num_rows(mysqli_query($con,"SELECT * FROM farmer"));
                          $num4=mysqli_num_rows(mysqli_query($con,"SELECT * FROM market"));
                          ?>


                          <p class="font-weight-semibold mb-0"><?php echo $num?></p>
                          <span class="small">Categories</span>
                        </div>
                      </div>
                      <div class="col-2 p-0 mb-4">
                        <div class="color-card bg-success m-auto">
                          <i class="mdi mdi-tshirt-crew"></i>
                          <p class="font-weight-semibold mb-0"><?php echo $num2?></p>
                          <span class="small">Sub Categories</span>
                        </div>
                      </div>
                      <div class="col-2 p-0">
                        <div class="color-card bg-info m-auto">
                          <i class="mdi mdi-trophy-outline"></i>
                          <p class="font-weight-semibold mb-0"><?php echo $num3?></p>
                          <span class="small">Farmers</span>
                        </div>
                      </div>
                      <div class="col-2 p-0">
                        <div class="color-card bg-danger m-auto">
                          <i class="mdi mdi-presentation"></i>
                          <p class="font-weight-semibold mb-0"><?php echo $num4?></p>
                          <span class="small">Markets</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 

           
          </div>
          <br>
          <br>          
          
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php
         include('footer.php');
         ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>