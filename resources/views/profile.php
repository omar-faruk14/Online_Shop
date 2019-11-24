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

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="py-5 bg-dark">
</div>
<div class="container">
 
  <div class="col-md-4" style="margin:0 auto;">
  <h2>Hey! Welcomme Back</h2>
  <h2><?php echo $_SESSION['givenName']; ?></h2>
  <h2><?php echo $_SESSION['email']; ?></h2>
  <h2><?php echo $_SESSION['id']; ?></h2>
  <h2><?php echo $_SESSION['gender']; ?></h2>
  <img src="<?php echo $_SESSION['picture']; ?>"/>
  <div style="height:100px;">
 	<a href="?action=logout" class="btn btn-danger">Logout</a>
  
  </div>
  
  
 
   
   
  </div>
</div>

</body>
</html>
