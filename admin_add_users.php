<?php
include("db.php");
if($_SESSION['userId'] == '' )
{
	header("location:loginForm-Page.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Add User Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/form-style.css">  
</head>
<?php 
error_reporting(0);
if(isset($_POST['register'])){
$userName =  $_POST['username'];
$FatherName =  $_POST['fathername'];
$Password =  $_POST['password'];
$Email =  $_POST['email'];
$Cnic =  $_POST['cnic'];
$CellNo =  $_POST['cellno'];
$InsertQuery = "INSERT INTO users_data(user_name,father_name,user_password,user_email,user_cnic,user_cell_no)
                VALUES('$userName','$FatherName','$Password','$Email','$Cnic','$CellNo')";
$Result = mysqli_query($con,$InsertQuery);
}
?>
<body>
  <div class="wrapper">
      <!-- navbar started -->
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="admin_page.php">AL-Hammd Travles and Tours</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="admin_view_users.php">View Users</a></li>
                  <li><a href="admin_add_users.php">Add New Users</a></li>
                  <li><a href="#"></a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Funds <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="">Add Funds</a></li>
                  <li><a href="">View Added Funds</a></li>
                  <li><a href="#"></a></li>
                </ul>
              </li>
              <li><a href="admin_update_account.php">Update Account</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
          </div>
          </div>
        </nav>
      <!-- navbar ended  -->
  
    <!-- input form started -->
    <div class="form-wrapper">
      <form action="" method="POST">
        <div class="middle">
            <h1>Enter Details Below To add New Member</h1>
    
            <div id="fancy-inputs">

              <label class="input">
                <input type="text" name="username">
                <span><span>Member Name</span></span>
              </label>
          
              <label class="input">
                <input type="text" name="fathername">
                <span><span>Father Name</span></span>
              </label>

              <label class="input">
                <input type="text" name="password">
                <span><span>Pssword</span></span>
              </label>

              <label class="input">
                <input type="text" name="email">
                <span><span>Email e.g mohsinrazzaq25@gmail.com</span></span>
              </label>

              <label class="input">
                <input type="text" name="cnic">
                <span><span>CNIC No e.g 31102-4856729-9</span></span>
              </label>

              <label class="input">
                <input type="text" name="cellno">
                <span><span>Cell No e.g 0333-6336483</span></span>
              </label>

            </div>
            
            <input class="btn" type="submit" name="register" value="ADD DATA">
          
        </div> 
      </form>   
    </div>
    <!-- input form ended -->
  </div>

</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/form-index.js"></script>
</html>
