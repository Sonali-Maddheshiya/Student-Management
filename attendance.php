<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>attendance</title>
  <link rel="stylesheet" href="css/stylead.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>attendance</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="option.html">back</a>
                </li>
                <li>
                    <a href="adda.php">Add</a>
                </li>
            </ul>
        </div>
<style>
#wrapper{
    width: 90%;
    margin: 50px auto 0;
    background-color: #fff;
}
</style>
<div id="main-content">
    <h2>All Records</h2>
    <?php
     $con=mysqli_connect("localhost","root","","student");
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }
     $sql="SELECT * FROM `attendance`;";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");

     if(mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>student_id</th>
        <th>student_name</th>
        <th>attendance math</th>
        <th>attendance ds</th>
        <th>attendance dstl</th>
        <th>attendance math</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $row['student id']; ?></td>
                <td><?php echo $row['student name']; ?></td>
                <td><?php echo $row['attendance_math']; ?></td>
                <td><?php echo $row['attendance_ds']; ?></td>
                <td><?php echo $row['attendance_dstl']; ?></td>
                <td><?php echo $row['attendance_coa']; ?></td>
                <td>
                    <a href='edita.php?id=<?php echo $row['student id'];?>'>Edit</a>
                    <a href='deletea.php?id=<?php echo $row['student id'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>
    <?php }
    else{
        echo "<h2>no record found<h2>";
    } 
    mysqli_close($con);
    ?>
</div>
</div>
</body>
</html>
