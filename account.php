<?php

include "sess.php";
if(isset($_SESSION['gid'])){ 
 include 'dbconnect.php';
 $id=$_SESSION['id'];
    $qer="select uname,uemail,phone from users where uid='$id'";	
$qes=mysqli_query($con,$qer);
    $data= mysqli_fetch_assoc($qes); 
    
 }
else  header('location:index.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Online Scrapp Management | Sign In </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/simpleCart.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>

<link href="css/animate.min.css" rel="stylesheet"> 

</head>
<body>
<?php include 'manu.php';?>

             

	<div class="login-page">
	 <div class="login-page-bottom">
          	</div>
		<div class="widget-shadow">
			
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
                     
                            <form method="post" action="users.php">
                                <input type="text" class="user" name="name" value="<?php echo $data['uname']; ?>">
                                <input type="text" class="user" name="email" value="<?php echo $data['uemail']; ?>">
                                <input type="text" class="user" name="phone" value="<?php echo $data['phone']; ?>">
                                <input type="submit" name="update" value="update">
					<div class="forgot-grid">
						<div class="forgot">
							<a href="#">Reset Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>
		</div>
      
	</div>


	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php">Online <b>Scrapp <b> Management</b> <span class="tag">NOTHING IS USELESS IN THE WORLD</span> </a></h4>
					<p>© 2022 Online Scrapp Management. All rights reserved | Design by <a href="https://github.com/dddhanushnkr" target="_blank">Dhanush Navuda K R and Likith L S</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="products.php">New</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="checkout.php">Wishlist</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our Company </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required="">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>

</body>
</html>



