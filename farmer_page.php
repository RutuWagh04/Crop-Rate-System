<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<?php
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");
session_start();
    if(isset($_SESSION['farmer']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="login2.php";
        </script>
        ';
    }
$fname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM farmer WHERE Id='".$_SESSION['farmer']."'"));

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Fresh Mart</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="admin/image/weblogo.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <script type="text/javascript">
            function get_market(mid)
            {
                 $.ajax(
                      {
                        type:"POST",
                        url:"price_ajax.php",
                        data:'mid='+mid,
                        success:function(data)
                        {
                          // document.getElementById('Fees').value=data;
                           $("#a1").html(data);
                           // cal();
                        }
                      });
            }

            function get_citywise(cid)
            {
             $.ajax(
                      {
                        type:"POST",
                        url:"city_ajax.php",
                        data:'cid='+cid,
                        success:function(data)
                        {
                          // document.getElementById('Fees').value=data;
                           $("#ct").html(data);
                           // cal();
                        }
                      });   
            }
        </script>

</head>

<body>
   <?php
   include("top1.php");
   ?>
    <!-- Start Slider -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-transform: uppercase;">Welcome Mr.<?php echo " $fname[1] "?></h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    
                                    <select id="basic" class="selectpicker show-tick form-control" onchange="get_citywise(this.value)" >
                                        <option>Select City</option>
                                         <?php
                                           $res=mysqli_query($con,"SELECT * FROM city");
                                            while($row=mysqli_fetch_row($res))
                                               {
                                                  echo '
                                                    <option data-display="Select" value='.$row[0].'>'.$row[1].'</option>
                                                    ';
                                                }
                                            ?>
                                </select>
                                </div>
                               
                            </div>
                           
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">

                                    <div class="row" id="ct" >


                                         <?php
                                       $res=mysqli_query($con,"SELECT * FROM market");
                                        while($row=mysqli_fetch_row($res))
                                       {
                                $city1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM city WHERE Id='".$row[10]."'"));

                                  echo '

                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="get_market('.$row[0].')">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">'.$row[6].'<b style="font-size:10px;color:#000">['.$city1[1].']</b></p>
                                                    </div>
                                                    <img style="height:200px;width:400px" src="Admin/'.$row[9].'" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        
                                                        <a class="cart" href="#">'.$row[1].'</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>'.$row[3].'</h4>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                    ?>
                                        

                                      
                                       
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                    
                    <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left" id="a1"></div>

              
            </div>
        </div>
    </div>
    


   <?php
    include("footer.php");
   ?>
    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>