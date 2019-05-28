<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/loginForm-style.css">
</head>
<?php
include("db.php");
error_reporting(0);
if(isset($_POST['submit'])){
$UserName =  $_POST['username'];
$Password =  $_POST['password'];
$query1 = "SELECT * FROM admin WHERE admin_name ='$UserName' AND admin_password = '$Password'";
$res1 = mysqli_query($con,$query1); 
$row = mysqli_fetch_array($res1);
if($row!= ""){
  $_SESSION['userId'] = $row['admin_id'];
  $_SESSION['username'] = $row['admin_name'];
  header("location:admin_page.html");
}
else{
  echo"Invalid username or password.";
  }
}
}
?>
<body>
  <div class="form-wrapper">
    <form action="" method="POST">
      <div class="form">
        <div class="username">
          <input type="text" name="username" placeholder="USERNAME"/>
        </div>
        <div class="password">
          <input type="text" name="password" placeholder="PASSWORD"/>
        </div>
        <div class="login">
          <input type="button" name="submit" class="login btn" value="LOGIN">
        </div>
      </div> 
    </form>
  </div>

 
</body>
</html>
