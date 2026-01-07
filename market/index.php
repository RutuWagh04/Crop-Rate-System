<!DOCTYPE html>
<html lang="en">

<?php
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");

session_start();
    if(isset($_SESSION['market']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="../login3.php";
        </script>
        ';
    }
$mname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM market WHERE Id='".$_SESSION['market']."'"));

?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Fresh Mart</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../admin/assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../admin/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../admin/assets/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../admin/image/weblogo.jpg" />
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
            <div class="page-header flex-wrap">
              <div class="header-left">
                <a href="rate.php">
                  <button class="btn btn-primary mb-2 mb-md-0 me-2"> Today Rate </button>
                </a> 
                <a href="history.php">

                <button class="btn btn-outline-warning mb-2 mb-md-0"> Rate History </button>
              </a>
              </div>
              <!-- <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pe-3">Dashboard</p>
                  </a>
                  <a class="ps-3 me-4" href="#">
                    <p class="m-0">ADE-00234</p>
                  </a>
                </div>
                <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-plus-circle"></i> Add Prodcut </button>
              </div> -->
            </div>
            <!-- first row starts here -->
      
            <!-- chart row starts here -->
         
            <!-- image card row starts here -->
        
            <!-- table row starts here -->
          
            <!-- doughnut chart row starts -->
        <div class="row">
              <div class="col-sm-5 col-xl-5 stretch-card grid-margin"></div>
              <div class="col-sm-6 col-xl-6 stretch-card grid-margin">
                  <img src="../admin/image/weblogo.jpg" style="height: 200px;width: 200px;">

              </div>

            </div>
            <!-- last row starts here -->
            <div class="row">
             
          
            <div class="col-sm-12 col-xl-12 stretch-card grid-margin">
                <div class="card color-card-wrapper">
                  <div class="card-body" style="background-image: url('../admin/assets/images/dashboard/img_5.jpg');background-size: cover;background-position: center;height: 200px;">
                    <marquee>

                     <b style="color: #fff;font-size: 40px;"><?php echo $mname[6]?></b>
                 </marquee>
                  </div>
                </div>
              </div>


          </div>
         
          <br>
          <br>
          <br>
          <br>
          <br>
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
    <script src="../admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../admin/assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="../admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../admin/assets/vendors/flot/jquery.flot.js"></script>
    <script src="../admin/assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../admin/assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../admin/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../admin/assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="../admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../admin/assets/js/off-canvas.js"></script>
    <script src="../admin/assets/js/hoverable-collapse.js"></script>
    <script src="../admin/assets/js/misc.js"></script>
    <script src="../admin/assets/js/settings.js"></script>
    <script src="../admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>