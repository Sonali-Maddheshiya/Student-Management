<?php
$student_name=$_POST["student_name"];
$student_id=$_POST["student_id"];
$attendance_math=$_POST["attendance_math"];
$attendance_ds=$_POST["attendance_ds" ];
$ttendance_dstl=$_POST["attendance_dstl"];
$attendance_coa=$_POST["attendance_coa"];

$con=mysqli_connect("localhost","root","","student");
 if(!$con)
 {
   die("connection to this database failed due to " .mysqli_connect_error());
 }
 $sql="UPDATE `attendance` SET `attendance_math` = '$attendance_math', `attendance_ds` = '$attendance_ds', `attendance_dstl` = '$ttendance_dstl', `attendance_coa` = '$attendance_coa' WHERE `attendance`.`student id` = '$student_id'";
 $result=mysqli_query($con,$sql) or die("query unsuccessful");
 header("location:attendance.php");
 mysqli_close($con);
            

?>