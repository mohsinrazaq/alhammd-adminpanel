<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Page</title>
</head>
<?php
if(isset($_POST['submit'])){
$UserName =  $_POST['username'];
$Password =  $_POST['password'];
include("db.php");
$query1 = "SELECT * FROM admin WHERE admin_name ='$UserName' AND admin_password = '$Password'";
$res1 = mysqli_query($con,$query1); 
$row = mysqli_fetch_array($res1);
if($row!= ""){
  $_SESSION['userId'] = $row['admin_id'];
  $_SESSION['username'] = $row['admin_name'];
  header("location:admin_page.php");
}
else{
  echo"Invalid username or password.";
  }
}
?>
<body>
    <form action="" method="POST">
  <input type="text" name="username"><br>
  <input type="text" name="password"> <br>
  <input type="submit" name="submit" value="login">
    </form>

 
</body>
</html>
