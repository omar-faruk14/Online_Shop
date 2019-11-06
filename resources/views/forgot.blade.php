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
    <form action="/action_page.php" >
    <div class="form-group">
      <label >Email</label>
      <input type="text" class="form-control"  placeholder="Enter your email" name="email" />
     
    
    </div>
    
    <button style="margin-bottom:10px;"type="submit" class="btn btn-info">Send</button>
  </form>
  <a  style="margin:5px;" href="login.blade.php">Login </a>or<a style="margin:2px;" href="register.blade.php">Register here?</a>
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