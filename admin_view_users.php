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
  <title>adminpage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
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
          <a class="navbar-brand" href="#">AL-Hammd Travles and Tours</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin_page.php">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin_view-users.php">View Users</a></li>
                <li><a href="admin_add_users.php">Add New Users</a></li>
                <li><a href="#"></a></li>
              </ul>
            </li>
            <li><a href="#">Page 2</a></li>
            <li><a href="admin_update_account.php">Update Account</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar ended  -->

      <h3>users data</h3>
  </div>

  


</body>
</html>
