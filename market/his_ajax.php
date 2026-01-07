 <?php

 $dt=$_POST['dt'];
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");

?>


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
                               $res=mysqli_query($con,"SELECT * FROM rate WHERE DATE='".$dt."'");
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
   