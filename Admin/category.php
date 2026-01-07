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
            <div class="page-header flex-wrap">
              
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <a href="viewcategory.php" class="">
                <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-account-check"></i> View Category </button>
                </a>

              </div>
            </div>
            <!-- first row starts here -->
      
            <!-- chart row starts here -->
         
            <!-- image card row starts here -->
        
            <!-- table row starts here -->
          
            <!-- doughnut chart row starts -->
        
            <!-- last row starts here -->
             <div class="row">

             
              <div class="col-md-6 grid-margin stretch-card" style="">
                <div class="card" style="background-color: #ffc299;border-top-left-radius: 30px;border-top-right-radius: 30px;">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;font-weight: bold;font-size: 24px;">Category</h4>
                    <br>
                    <form action="category.php" method="POST" class="forms-sample">
                    
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-weight:bold;">Category Name</label>
                        <div class="col-sm-9">
                          <input name="cat" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="text" class="form-control" id="exampleInputEmail2" />
                        </div>
                      </div>
                      
                      
                      <button type="submit" name="save" class="btn btn-primary me-2"> Submit </button>
                      <button class="btn btn-danger">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             

              <div class="col-md-6 grid-margin stretch-card">
                <img src="image/1.jpg" style="height: 300px; width: 700px">
              </div>
          
            </div>
          <br>
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
<?php
  if (isset($_POST['save'])) 
  {
    $cname=$_POST['cat'];
    
    if (mysqli_query($con,"INSERT INTO category VALUES('','".$cname."')")) 
    {
      echo "
        <script>
            alert('New Category Added Sucessfully');
            window.location.href='category.php';
            </script>
      ";
    }
    else
    {
      echo "
      <script>
            alert('Try Again');
            window.location.href='category.php';
            </script>
      ";
    }
  }
?>