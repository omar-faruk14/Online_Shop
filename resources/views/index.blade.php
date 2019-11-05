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

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3" >
    
      <h3 style="text-align:center;display:block;background:#f1f1f1;color:#444;padding:5px;border-radius:2px;border:1px solid #777;">Category</h3>
      
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Robotics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tools</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="#">Watches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mobile Phone</a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link" href="#">Laptop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tools</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">Robotics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#"></a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    
    <?php
    for($x=0; $x<7 ; $x++){
    ?>
    <div class="col-sm-3" style="border:1px solid #f1f1f1;padding:5px;margin-bottom:15px;">
      <h3 style="text-align:center;">Product Name</h3>
     
      <div style="margin:10px;padding:5px;"> 
      <img style="height:200px;width:250px;" src="image/dd.jpeg"/>
      </div>
      <h4>Product Description</h4>
      <p>This is very useful product.This is very useful product.This is very useful product.This is very useful product.</p>
      <p>Price 5 $</p>
      <button type="button" class="btn btn-info btn-block">Add to Cart</button>
     
    </div>
    <?php
}
    ?>
   
      <?php
    for($x=0; $x<8 ; $x++){
    ?>
    <div class="col-sm-3" style="border:1px solid #f1f1f1;padding:5px;margin-bottom:15px;">
      <h3 style="text-align:center;">Product Name</h3>
     
      <div style="margin:10px;padding:5px;"> 
      <img  style="height:200px;width:250px;" src="image/a4.jpg">
      </div>
      <h4>Product Description</h4>
      <p>This is very useful product.This is very useful product.This is very useful product.This is very useful product.</p>
      <p>Price 5 $</p>
      <button type="button" class="btn btn-info btn-block">Add to Cart</button>
     
    </div>
    <?php
}
    ?>
  
    
    
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>