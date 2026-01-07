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
      <!-- partial:../../partials/_horizontal-navbar.html -->
       <?php
  include('menu.php');
  ?>
      </div>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <br>
            <div class="row">
              
              
              <div class="col-lg-1"></div>
              <div class="col-lg-11 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Market Details</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped" >
                        <thead style="background-color: #000;color: #fff;height: 50px;">
                          <tr>
                            <th><b>Sr No.</b></th>
                            <th><b>Market Name</b></th>
                            <th><center><b>View Details</b></center></th>
                            <th><center><b>Update</b></center></th>
                            <th><center><b>Delete</b></center></th>
                          </tr>
                        </thead>
                        <tbody>

                           <?php
                               $res=mysqli_query($con,"SELECT * FROM market");
                                while($row=mysqli_fetch_row($res))
                               {
                                  echo '
                              <tr>
                               
                                <td style="height:50px">'.$row[0].'</td>
                                <td style="height:50px">'.$row[6].'</td>

                                <td>
                                    <a href="market_data.php?id='.$row[0].'">
                                         <center>
                                            <button type="button" class="btn btn-primary btn-icon-text"> View More <i class="mdi mdi-file-check btn-icon-append"></i>
                                           </button>
                                         </center>
                                         </a>
                                     </td>

                                    <td>
                                    <a href="update_market.php?cid='.$row[0].'">

                                         <center>
                                            <button type="button" class="btn btn-success btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                           </button>
                                         </center>
                                         </a>
                                     </td>
                                      <td>
                                         <a href="delete_market.php?id='.$row[0].'">

                                         <center>
                                               <button type="button" class="btn btn-warning btn-icon-text">
                                              <i class="mdi mdi mdi-playlist-remove btn-icon-prepend"></i> Delete </button>
                                         </center>
                                         </a>
                                      </td>
                              </tr>';
                        }
                          ?>
                      
                        </tbody>
                      </table>
                    </div>
                  </div>
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
          <br>
          <br>
          <br>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>