<?php
     require_once "config.php";
	 $loginUrl = $gClient->createAuthUrl();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online_Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Onile Shop is a place of your desire</h1>
  <p>All kinds of product is available here. Hopfully it will be very userful for you.</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">OnlineShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Latest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Offers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">My Account</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Wishlist</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="#">Request</a>
      </li> 
    </ul>
  </div>  
</nav>

<div class="container" style="">
  <div class="row">
    <div class="col-sm-4" style="margin:40px;margin:0 auto;border:1px solid #f1f1f1;margin-bottom:120px;margin-top:80px;border-radius:5px;box-shadow:2px 4px #f1f1f1; " >
    <div style="margin:20px;padding:10px;">
    <h3 style="text-align:center;padding-bottom:10px; border-bottom:1px dashed #777;">Login Here</h3>
    <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
     
    
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
     
     
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agreed on terms and conditions.
       <div class="valid-feedback">Valid.</div>
      
      </label>
    </div>
	</form>
   <button type="submit" style="padding:5px;" class=" btn-primary">Submit</button>
   <button onclick="window.location='<?php echo $loginUrl; ?>' " style="padding:5px;" class=" btn-danger">Login With Google Account</button>
  <br>
  <a  style="margin:5px;" href="register.blade.php">Register here</a>or<a style="margin:2px;" href="forgot.blade.php">Forgot password?</a>
  </div>
      <hr class="d-sm-none">
    </div>
    
   
   
  
   
    
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>