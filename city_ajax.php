<?php
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");

           $res=mysqli_query($con,"SELECT * FROM market WHERE mcity='".$_POST['cid']."'");
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
                                        