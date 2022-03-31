<?php 
include 'sess.php';
if(isset($_GET['productid'])){
    $id= addslashes(base64_decode($_GET['productid']));
 include "dbconnect.php";
$qer="select * from products where pid='$id'";	
$qes=mysqli_query($con,$qer); 
if(mysqli_num_rows($qes)>0){
$str=mysqli_fetch_assoc($qes);

$qer="select * from products limit 4";	
$qes=mysqli_query($con,$qer);
$list=array();
while($row= mysqli_fetch_assoc($qes)){
    $list[]=$row;
}

function callme($scid){
    include 'dbconnect.php';
    $qer="select pid from size where sid=$scid";	
$qes=mysqli_query($con,$qer);
    $data= mysqli_fetch_assoc($qes);
    return $data['pid'];
}

$qer="select scid from size where pid=$id";	
$qes=mysqli_query($con,$qer);
$ar=array();

function callme2($scid){
    include 'dbconnect.php';
    $qer="select pid from color where cid=$scid";	
$qes=mysqli_query($con,$qer);
    $data= mysqli_fetch_assoc($qes);
    return $data['pid'];
}

$qer="select scid from lang where pid=$id";	
$qes=mysqli_query($con,$qer);
$ar2=array();
while($row= mysqli_fetch_assoc($qes)){
    $ar2[]=callme2($row['scid']);
}

}else header('location:index.php');


  }else header('location:index.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Online Scrapp Management | Single</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/example-styles.css">

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.multi-select.js"></script>
<script defer src="js/jquery.flexslider.js"></script>

<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
    $('#pro').on('change', function() {
                         $.post(  
                  "users.php", 
                  { action: "logout" }, 
                  function(data) { 
                      location.reload(true);
                  } 
               );
    
                          
                          
  //alert( this.value );
});
 $(function(){
             $('#color').multiSelect();
             $('#size').multiSelect();
                        });
  
});
function load(){
 count=document.getElementById('fileupload');  
 
    if(count.files.length==3){
       return true;
   }else{
       alert('plase select 3 images');
       return false;
   }
}


</script>
<script src="js/imagezoom.js"></script>
<script src="js/simpleCart.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>

<link href="css/animate.min.css" rel="stylesheet"> 
</head>
<body>
	<div class="header">
		<div class="top-header navbar navbar-default">
			<?php if(!isset($_SESSION['id']))   include 'head/alert.php'; ?>
		</div>
		<div class="header-two navbar navbar-default">
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 91000 00000</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">onlinescrapp@management.com</a></li>				
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Online <b>Scrapp</b><span class="tag">Management</span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						 <?php if(isset($_SESSION['id'])) include 'head/select.php'; ?>
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="checkout.php">
								<span class="simpleCart_total"> Rs 0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default">
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php include 'manu.php';?>

<div id="error"></div>
<div id="state"></div>
	<div class="single">
		<div class="container">
			<div class="single-info">		
				<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">	
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/s1.jpg">
								<div class="thumb-image"> <img src="images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/s2.jpg">
								 <div class="thumb-image"> <img src="images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/s3.jpg">
							   <div class="thumb-image"> <img src="images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li> 
						</ul>
					</div>
				</div>
				<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
                                    <form method="post" action="" enctype="multipart/form-data" onsubmit="return load()">
					<h3><input type="text" name="name" size="37" value="<?php echo $str['name'];?>"></h3>
                                        <div class="single-rating">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5" checked>
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
						<p><?php echo $str['rate'];?> out of 5</p>
						<a href="#">Add Your Review</a>
					</div>
                                        <table><tr><td><font color="orange" size="4">Price (&#8377) :  </font></td>
                                                <td><h6 class="item_price">&nbsp;<input type="text" name="price" value="<?php echo $str['price'];?>"></h6></td></tr></table>
				
					<br>
					
					<div class="clearfix"> </div><br>
					<div class="quantity">
					<font color="orange" size="4">Qty :  </font>	<input min="1" type="number" name="qnt" value="<?php echo $str['qunt'];?>" class="item_quantity">
					</div>
                                         <table><tr><td valign="top"><br><font color="orange" size="4">Description :  </font></td>
                                                  <td valign="top"><p>&nbsp;<textarea  cols="37" rows="3" name="description"><?php echo $str['description'];?></textarea> </p></td></tr></table>
					<table><tr><td><font color="orange" size="4">Images :  </font></td><td><input id="fileupload" class="image" type="file" name="image[]" accept="image/*" multiple></td></tr></table><br>
                                       
					
                                            <input type="submit" name="update" value="Update">	
					</form>
                                    
				</div>
			   <div class="clearfix"> </div>
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
						<input type="text" placeholder="Enter Your Email" required>
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
<?php
if(isset($_POST['update'])){
extract($_POST);

$str="update products set name='$name',price='$price',description='$description',colors='$colors[0]',qunt='$qnt' where pid='$id'";

$qer=mysqli_query($con,$str);

  if($qer){
      echo 'success<br>';
      $str1="DELETE FROM lang WHERE pid=$id";
            
      if(mysqli_query($con, $str1) && mysqli_query($con, $str2)){
           for($i=0;$i<count($lang);$i++){
          $str="insert into color (pid,scid) values ('$id','$lang[$i]')";
          mysqli_query($con, $str);
      }
      
      echo "successfully updated";
      }else "something went wrong";
      
     
  }else echo "failed";
     
}
?>
