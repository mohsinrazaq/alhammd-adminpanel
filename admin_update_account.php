<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin update account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/form-style.css">  
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
            <li class="active"><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">View Users</a></li>
                <li><a href="#">Add New Users</a></li>
                <li><a href="#"></a></li>
              </ul>
            </li>
            <li><a href="#">Page 2</a></li>
            <li><a href="admin_update_account.php">Update Account</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar ended  -->

    
  <div class="form-wrapper">
    <form action="">
        <div class="middle">
            <h1>Update Account</h1>
    
            <div id="fancy-inputs">

              <label class="input">
                <input type="text" disabled>
                <span><span>Current Username</span></span>
              </label>
          
              <label class="input">
                <input type="text">
                <span><span>New Name</span></span>
              </label>

              <label class="input">
                <input type="text">
                <span><span>Pssword</span></span>
              </label>
              
              
              <label class="input">
                <input type="text">
                <span><span>Confirm Pssword</span></span>
              </label>


            </div>
            
            
            <a href="" class="btn">Update</a>
        </div> 
    </form>   
  </div>

  </div>

  


</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/form-index.js"></script>
</html>
