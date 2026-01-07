                    <?php
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");
$mid=$_POST['mid'];
?>
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>

                                         <?php
                                       $res=mysqli_query($con,"SELECT * FROM category");
                                        while($row=mysqli_fetch_row($res))
                                       {
                                  echo '
                                <div class="list-group-collapse sub-men">
                                    <a style="color:blue;font-weight:bold;font-size:20px" class="list-group-item list-group-item-action" href="#sub-men2'.$row[0].'" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2'.$row[0].'">'.$row[1].' 
                                </a>
                                    <div class="collapse" id="sub-men2'.$row[0].'" data-parent="#list-group-men">
                                        <div class="list-group">';

                                       $res2=mysqli_query($con,"SELECT * FROM subcat WHERE catname='".$row[0]."'");
                                        while($row2=mysqli_fetch_row($res2))
                                       {
                                         $aa=mysqli_query($con,"SELECT * FROM rate WHERE CID='".$row[0]."' && SID='".$row2[0]."' && MAR_ID='".$mid."'");
                                         while($rt=mysqli_fetch_row($aa))
                                         {
                                            $uname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM unit WHERE Id='".$rt[3]."'"));
                                             echo' <a style="color:green;font-weight:bold" href="#" class="list-group-item list-group-item-action">'.$row2[2].' <small class="text-muted"> ('.$rt[5].')-  '.$uname[1].'</small></a>';
                                         }

                                          
                                       }
                                           
                                        echo'</div>
                                    </div>
                                </div>';
                            }
                                ?>

                            </div>
                        </div>
                      
                    </div>
                