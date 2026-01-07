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
    <script type="text/javascript">
      
      function abc()
      {
        document.getElementById('dt').valueAsDate = new Date();
      }
      function get_subcategory(val)
      {
         $.ajax(
          {
            type:"POST",
            url:"rate_ajax.php",
            data:'catid='+val,
            success:function(data)
            {
              // document.getElementById('Fees').value=data;
               $("#sid").html(data);
               // cal();
            }
          });
      }
    </script>
  </head>
  <body onload="abc()">
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
                <a href="index.php">
                  <button class="btn btn-primary mb-2 mb-md-0 me-2">Home </button>
                </a> 
                <a href="history.php">

                <button class="btn btn-outline-warning mb-2 mb-md-0"> Rate History </button>
              </a>
              </div>
            </div>
             <div class="row">
              <div class="col-md-3" style=""></div>
              <div class="col-md-6 grid-margin stretch-card" style="">
                <div class="card" style="background-color: #ffc299;border-top-left-radius: 30px;border-top-right-radius: 30px;">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;font-weight: bold;font-size: 24px;">Update Rate</h4>
                    <br>
                    <form action="rate.php" method="POST" class="forms-sample">
                    
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-weight:bold;">Category</label>
                        <div class="col-sm-9">
                          <div class="custom-select-box">
                           <select onchange="get_subcategory(this.value)" name="cid" id="basic" class="selectpicker show-tick form-control" data-placeholder="" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;height: 50px;">
                            <option style="color: red;font-weight: bold;"><b>Select Category</option>

                               <?php
                               $res=mysqli_query($con,"SELECT * FROM category");
                                while($row=mysqli_fetch_row($res))
                               {
                                  echo '
                                  <option style="color: red;font-weight: bold;" value='.$row[0].' >'.$row[1].'</option>';

                                }
                              ?>
                           </select>
                         </div> 
                          
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-weight:bold;">Sub Category</label>
                        <div class="col-sm-9">
                          <div class="custom-select-box">
                           <select id="sid" name="sid" id="basic" class="selectpicker show-tick form-control" data-placeholder="" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;height: 50px;">
                            <option style="color: red;font-weight: bold;"><b>Select Sub Category</option>

                              
                           </select>
                         </div> 
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-weight:bold;">Unit</label>
                        <div class="col-sm-9">
                          <div class="custom-select-box">
                           <select name="uid" id="basic" class="selectpicker show-tick form-control" data-placeholder="" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;height: 50px;">
                            <option style="color: red;font-weight: bold;"><b>Select Unit</option>

                               <?php
                               $res3=mysqli_query($con,"SELECT * FROM unit");
                                while($row3=mysqli_fetch_row($res3))
                               {
                                  echo '
                                  <option style="color: red;font-weight: bold;" value='.$row3[0].' >'.$row3[1].'</option>';
                                }
                              ?>
                           </select>
                         </div> 
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-weight:bold;">Date</label>
                        <div class="col-sm-9">
                          <div class="custom-select-box">
                           <input readonly type="date" name="date" id="dt" class="form-control">
                         </div> 
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-weight:bold;">Rate</label>
                        <div class="col-sm-9">
                          <div class="custom-select-box">
                           <input type="number" name="rate" class="form-control">
                         </div> 
                          
                        </div>
                      </div>
                      
                      
                      <button type="submit" name="save" class="btn btn-primary me-2"> Submit </button>
                      <button class="btn btn-danger">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-6 grid-margin stretch-card">
                <img src="">
              </div>
          
            </div>
        
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
   
  </body>
</html>
<?php
  if (isset($_POST['save'])) 
  {
    $cid=$_POST['cid'];
    $sid=$_POST['sid'];
    $uid=$_POST['uid'];
    $date=$_POST['date'];
    $rate=$_POST['rate'];
    
    $dt=mysqli_query($con,"SELECT * FROM rate WHERE MAR_ID='".$_SESSION['market']."' && CID='".$cid."' && SID='".$sid."' && UID='".$uid."' && DATE='".$date."' ");
    $mdata=mysqli_num_rows($dt);
    $mda=mysqli_fetch_row($dt);
    if ($mdata>0) 
    {
          
        if (mysqli_query($con,"UPDATE rate SET CID='".$cid."', SID='".$sid."', UID='".$uid."',RATE='".$rate."' WHERE ID='".$mda[0]."'")) 
            {
              echo "
                <script>
                    alert('Rate Updated Sucessfully');
                    window.location.href='rate.php';
                    </script>
              ";
            }
            else
            {
              echo "
              <script>
                    alert('Try Again');
                    window.location.href='rate.php';
                    </script>
              ";
            }  
    }
    else
    {
        
        if (mysqli_query($con,"INSERT INTO rate VALUES('','".$cid."','".$sid."','".$uid."','".$date."','".$rate."','".$_SESSION['market']."')")) 
            {
              echo "
                <script>
                    alert('Rate Added Sucessfully');
                    window.location.href='rate.php';
                    </script>
              ";
            }
            else
            {
              echo "
              <script>
                    alert('Try Again');
                    window.location.href='rate.php';
                    </script>
              ";
            }
    }
  }
?>