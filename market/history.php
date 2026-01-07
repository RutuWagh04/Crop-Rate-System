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
  <script type="text/javascript">
    function get_date()
    {
      var dt=document.getElementById('dt').value;

      $.ajax(
          {
            type:"POST",
            url:"his_ajax.php",
            data:'dt='+dt,
            success:function(data)
            {
              // document.getElementById('Fees').value=data;
               $("#dtable").html(data);
               // cal();
            }
          });
    }
  </script>
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
          <br>
          <div class="content-wrapper">
            <div class="page-header flex-wrap">
              <div class="header-left">
                <a href="index.php">
                  <button class="btn btn-primary mb-2 mb-md-0 me-2">Home </button>
                </a> 
                <a href="rate.php">

                <button class="btn btn-outline-warning mb-2 mb-md-0"> Today Rate </button>
              </a>
              </div>
            </div>


            <div class="row">
              
              
              <div class="col-lg-1"></div>
              <div class="col-lg-11 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Rate History</h4>
                    </p>
                    <div class="row">
                      <div class="col-lg-8"></div>
                      <div class="col-lg-4">
                        <input onchange="get_date()" id="dt" style="border-bottom: 3px solid green;" type="date" class="form-control">
                      </div>
                    </div>
                    <br>
                    <div class="table-responsive">
                      <table class="table table-striped" id="dtable">
                        <thead style="background-color: #000;color: #fff;height: 50px;">
                          <tr>
                            <th><b>Date</b></th>
                            <th><b>Category</b></th>
                            <th><b>Sub Category</b></th>
                            <th><b>Unit</b></th>
                            <th><b>Rate</b></th>
                          </tr>
                        </thead>
                        <tbody>

                           <?php
                               $res=mysqli_query($con,"SELECT * FROM rate");
                                while($row=mysqli_fetch_row($res))
                               {

                                $cname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM category WHERE cid='".$row[1]."'"));

                                $sname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM subcat WHERE Id='".$row[2]."'"));

                                $uname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM unit WHERE Id='".$row[3]."'"));



                                  echo '
                              <tr>
                               
                                <td style="height:50px">'.$row[4].'</td>
                                <td style="height:50px">'.$cname[1].'</td>
                                <td style="height:50px">'.$sname[2].'</td>
                                <td style="height:50px">'.$uname[1].'</td>
                                <td style="height:50px">'.$row[5].'</td>
                                   
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