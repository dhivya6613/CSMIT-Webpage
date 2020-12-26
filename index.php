<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>
	<div class="header">Home</div>
	<h1><div class ="p"><b><center>
	CSMIT</h1></div></b></center>
	<img src="csmit.jpg" width="700" height="1000">
	


	<h2>Home Page</h2>

<div class="sidenav">
	<a href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
  <a href="articles.html">Articles</a>
  <a href="#">Gallery</a>
  <a href="#">Contacts</a>
   <a href="#">About</a>
</div>
<p>

<!-- Page content -->
<div class="main">
  ...
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<div class="p">
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p></div>
    <?php endif ?>
</div>
	</p>	
	<div class="footer">All rights reserved to csmit.For queries contact :
	csmit.org</div>
</body>
</html>