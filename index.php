<?php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password,"student");
if(!$con)
{
  die("connection to this database failed due to " .mysqli_connect_error());
}

$username=$_POST['username'] ;
$password=$_POST['password'] ;

$sql="SELECT * FROM `admin` where username='$username' and password='$password';";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
    header("location:option.html");
}
else{
    echo "login ";
    $login=true;
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">

    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background: linear-gradient(80deg, #b5c2d5, #609efb);
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}

form{
    height: auto;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: black;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(28,22,22,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <!-- <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div> -->
    <?php
    $login=false
    ?>
    <form action="index.php" method="post">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="name" name="username"  required >

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" required >

        <input type="submit" value="Submit">
        
    </form>
</body>
</html>
