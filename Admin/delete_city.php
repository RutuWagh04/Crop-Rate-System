<?php
$con=mysqli_connect("localhost","root","","croprate_system_db")or die("Database Error...!");

    $ID=$_GET['id'];
    if(mysqli_query($con,"DELETE FROM city WHERE Id='".$ID."'"))
    {
        echo "<script>
        alert('Record Deleted');
        window.location.href='viewcity.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Try Again');
        window.location.href='viewcity.php';
        </script>";
    }
    ?>