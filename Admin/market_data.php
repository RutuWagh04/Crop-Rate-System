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
              
              
              <div class="col-lg-3"></div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;font-size: 20px;color: green;"> Owner Details</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped" >
                       
                        </thead>
                        <tbody>

                           <?php
                               $res=mysqli_query($con,"SELECT * FROM market WHERE Id='".$_GET['id']."'");
                                while($row=mysqli_fetch_row($res))
                               {
                                $city1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM city WHERE Id='".$row[10]."'"));
                                  echo '
                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold">Name</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[1].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold">Email</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[2].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold">Contact</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[3].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold">Adhar</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[4].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold">Address</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[5].'</td>
                              </tr>
                              <tr>
                                <td>
                                    <h4 class="card-title" style="text-align: center;font-size: 20px;color: green;"> Market Details</h4>

                                </td>
                              </tr>
                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold"> Name</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[6].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold"> Email</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[7].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold"> Contact</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[8].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold"> City</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$city1[1].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold"> Address</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[11].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold"> Username</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[12].'</td>
                              </tr>

                              <tr>
                                <td style="height:50px;color:blue;font-weight:bold"> Password</td>
                                <td style="height:50px;color:#000;font-weight:bold">'.$row[13].'</td>
                              </tr>

                             
                              ';  
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