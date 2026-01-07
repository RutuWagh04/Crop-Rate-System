<?php
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");

    $ID=$_GET['id'];
    if(mysqli_query($con,"DELETE FROM category WHERE cid='".$ID."'"))
    {
        echo "<script>
        alert('Record Deleted');
        window.location.href='viewcategory.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Try Again');
        window.location.href='viewcategory.php';
        </script>";
    }
    ?>