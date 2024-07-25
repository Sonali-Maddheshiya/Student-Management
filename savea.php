<?php
    $name=$_POST["name"];
   

    $con=mysqli_connect("localhost","root","","student");
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }
     $sql="INSERT INTO `attendance` (`student name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     $sql="INSERT INTO `performance` (`student name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     $sql="INSERT INTO `marks` (`student name`) VALUES ('$name');";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");
     header("location:adda.php");
     mysqli_close($con);
?>