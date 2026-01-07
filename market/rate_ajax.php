 <?php
 echo'
   <option style="color: red;font-weight: bold;"><b>Select Sub Category</option>
 ';
 $cid=$_POST['catid'];
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");

    $res2=mysqli_query($con,"SELECT * FROM subcat WHERE catname='".$cid."'");
     while($row2=mysqli_fetch_row($res2))
    {
       echo '
       <option style="color: red;font-weight: bold;" value='.$row2[0].' >'.$row2[2].'</option>';

     }
   ?>