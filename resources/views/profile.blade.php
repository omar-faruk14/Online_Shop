<?php
     session_start();
	 
	 if(!isset($_SESSION['access_token'])){
		 header('Location:login.php');
	 }
	 	if(isset($_GET['action'])&&$_GET['action'] == "logout"){
				session_destroy();
				header('Location:login.blade.php');
				exit();
			}else{
				
			}

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Online_Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="py-3 bg-light" style="text-align:center;">
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

<div class="container" style="margin-top:30px">

    

  <h2>Hey! Welcomme Back</h2>
  <div class="row">
		  <div class="col-md-3" style="float:left;">
		  <img style="height:250px;width:230px; border:1px solid #444;margin:4px;" src="<?php echo $_SESSION['picture']; ?>"/>
		  </div>
		<div class="col-md-8" style="margin:4px;">
		  <h2><?php echo $_SESSION['givenName']; ?></h2>
		  <h2>E-mail: <?php echo $_SESSION['email']; ?></h2>
		</div>
  </div>
  <div style="height:100px;">
 	<a href="?action=logout" class="btn btn-danger">Logout</a>
   
  
    
  </div>
</div>

<div class="py-5 bg-dark" style="text-align:center;color:#fff;">
  <p>Footer</p>
</div>

</body>
</html>