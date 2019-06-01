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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
            <li class="active"><a href="admin_page.php">Home</a></li>
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
  </div>
</body>
</html>