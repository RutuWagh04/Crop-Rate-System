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
                <a href="viewmarket.php">
                <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  <i class="mdi mdi-account-check"></i> View market </button>
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

             
              <div class="col-md-1"></div>
              <div class="col-md-10 grid-margin stretch-card" style="">
                <div class="card" style="background-color: #ffc299;border-top-left-radius: 30px;border-top-right-radius: 30px;">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;font-weight: bold;font-size: 24px;">Owner Detail</h4>
                    <br>
                    <form action="market.php" method="POST" class="forms-sample" enctype="multipart/form-data">
                    
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Name</label>
                        <div class="col-sm-5">
                          <input name="oname" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="text" class="form-control" id="exampleInputEmail2" />
                        </div>

                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Email</label>
                        <div class="col-sm-5">
                          <input name="oemail" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="email" class="form-control" id="exampleInputEmail2" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Contact</label>
                        <div class="col-sm-3">
                          <input name="ocontact" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="text" class="form-control" id="exampleInputEmail2" />
                        </div>
                      
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Adhar No.</label>
                        <div class="col-sm-3">
                          <input name="oadhar" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="text" class="form-control" id="exampleInputEmail2" />
                        </div>
                      
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Address</label>
                        <div class="col-sm-3">
                          <textarea class="form-control" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" name="oaddress"></textarea>
                        </div>
                      </div>
                      <hr>
                      <h4 class="card-title" style="text-align: center;font-weight: bold;font-size: 24px;">Market Detail</h4>
                      <br>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Name</label>
                        <div class="col-sm-4">
                          <input name="mname" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="text" class="form-control" id="exampleInputEmail2" />
                        </div>
                      
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Email</label>
                        <div class="col-sm-3">
                          <input name="memail" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="email" class="form-control" id="exampleInputEmail2" />
                        </div>
                      
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Contact</label>
                        <div class="col-sm-2">
                          <input name="mcontact" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="text" class="form-control" id="exampleInputEmail2" />
                        </div>

                        </div>

                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Photo</label>
                        <div class="col-sm-3">
                          <input name="image" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="file" class="form-control" id="exampleInputEmail2" />
                        </div>
                      
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">City</label>
                        <div class="col-sm-3">
                           <select class="form-control" name="mcity" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;height: 40px;color: #000">
                            <option>Seect City</option>
                            <?php
                            $city1=mysqli_query($con,"SELECT * FROM city");
                            while($city=mysqli_fetch_row($city1))
                            {
                              echo "<option style='color:#000' value='".$city[0]."'>$city[1]</option>";
                            }
                            ?>
                          </select>
                        </div>
                     
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">Address</label>
                        <div class="col-sm-3">
                          <input name="maddress" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="textarea" class="form-control" id="exampleInputEmail2" />
                        </div>
                      </div>
                        <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">username</label>
                        <div class="col-sm-5">
                          <input name="musername" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="username" class="form-control" id="exampleInputEmail2" />
                        </div>
                      
                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-weight:bold;">password</label>
                        <div class="col-sm-5">
                          <input name="mpassword" style="border-left: 2px solid green;border-right: 2px solid green;border-radius: 5px;font-weight: bold;" type="password" class="form-control" id="exampleInputEmail2" />
                        </div>
                       </div>
                      <button type="submit" name="save" class="btn btn-primary me-2"> Submit </button>
                      <button class="btn btn-danger">Cancel</button>
                    </form>
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
    $oname=$_POST['oname'];
    $oemail=$_POST['oemail'];
    $ocontact=$_POST['ocontact'];
    $oadhar=$_POST['oadhar'];
    $oaddress=$_POST['oaddress'];
    $mname=$_POST['mname'];
    $memail=$_POST['memail'];
    $mcontact=$_POST['mcontact'];
    $mcity=$_POST['mcity'];
    $maddress=$_POST['maddress'];
    $musername=$_POST['musername'];
    $mpassword=$_POST['mpassword'];

    // $max_id=1;
 $max1=mysqli_query($con,"select MAX(Id) from market");
 $max=mysqli_fetch_row($max1);

      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
       } 
      $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 
        
        $upload_exists = end (explode('.', $_FILES["image"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('uncompatible file'); 
            
            </script>";
        }
        else
        {
            if((($_FILES['image']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_market."."png";//name of file name to be saved
                echo$targetfile='upload/'.$newname;//location of folder with target file name 
                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');
                  
                    </script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);// code img code

    
    if (mysqli_query($con,"INSERT INTO market VALUES('','".$oname."','".$oemail."','".$ocontact."','".$oadhar."','".$oaddress."','".$mname."','".$memail."','".$mcontact."','".$targetfile."','".$mcity."','".$maddress."','".$musername."','".$mpassword."')")) 
    {
      echo "
        <script>
            alert('Market information Added Sucessfully');
            window.location.href='market.php';
            </script>
      ";
    }
    else
    {
      echo "
      <script>
            alert('Try Again');
            window.location.href='market.php';
            </script>
      ";
    }
  }
}
}
}
?>