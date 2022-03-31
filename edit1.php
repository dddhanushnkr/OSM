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
while($row= mysqli_fetch_assoc($qes)){
    $ar[]=callme($row['scid']);
}

function callme2($scid){
    include 'dbconnect.php';
    $qer="select pid from color where cid=$scid";	
$qes=mysqli_query($con,$qer);
    $data= mysqli_fetch_assoc($qes);
    return $data['pid'];
}

$qer="select scid from color where pid=$id";	
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
    
                          
                          
});
 
 $(function(){
             $('#color').multiSelect();
             $('#size').multiSelect();
                        });

});
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
					<h1><a href="index.php">Online <b>Scrapp <b>Management </b><span class="tag">NOTHING IS USELESS IN THE WORLD</span> </a></h1>
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

	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single page</li>
			</ol>
		</div>
	</div>

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
					
					<h3><input type="text" name="name" value="<?php echo $str['name'];?>"></h3>
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
					<br><br>
                                          <table><tr><td valign="top"><br><font color="orange" size="4">Description :  </font></td>
                                                  <td valign="top"><p>&nbsp;<textarea  cols="37" rows="4" name="description"><?php echo $str['description'];?></textarea> </p></td></tr></table>
					
                                        
					
					<ul class="size">
						<h4>Size</h4>
                                                Color: &nbsp; &nbsp; &nbsp;<select id="color" name="colors[]" multiple>
                                 <option value="3">Red</option>
                                    <option value="4">Blue</option>
                                    <option value="1">Yellow</option>
                                     <option value="2">Green</option>
                                     <option value="5">black</option>
                                      <option value="6">pink</option>
                                       <option value="7">white</option>
                                        <option value="8">orange</option>
                                         <option value="9">brown</option>
                                          
                               </select><br><br>
					</ul>
					<ul class="color">
						<h4>Color</h4>
                                                 <?php   
                                                     echo "<li>", implode(',', $ar2),"</li>";
                                                  ?>
					</ul>
					<div class="clearfix"> </div>
					<div class="quantity">
						<p class="qty"> Qty :  </p><input min="1" type="number" value="<?php echo $str['qunt'];?>" class="item_quantity">
					</div>
					<div class="btn_form">
						<a href="#" class="add-cart item_add">ADD TO CART</a>	
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<div class="collpse tabs">
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Description
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
							<?php echo $str['description'];?>	
							</div>
						</div>
					</div>
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".6s">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								   additional information
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<?php echo $str['description'];?>
							</div>
						</div>
					</div>
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".7s">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									reviews (5)
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<?php echo $str['description'];?>
							</div>
						</div>
					</div>
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".8s">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									help
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								<?php echo $str['description'];?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="related-products">
				<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
					<h3 class="title">Related<span> Products</span></h3>
					
				</div>
				<div class="related-products-info">
                                    
                                     <?php  foreach ($list as &$v) : ?>
					<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
						<div class="new-top">
							<a href="single.php"><img src="images/<?= $v['img']?>" class="img-responsive" alt=""/></a>
							<div class="new-text">
								<ul>
									<li><a class="item_add" href=""> Add to cart</a></li>
									<li><a href="single.php">Quick View </a></li>
									<li><a href="products.php">Show Details </a></li>
								</ul>
							</div>
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="single.php"><?= $v['name']?></a></h5>
							<div class="rating">
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span>☆</span>
							</div>	
							<div class="ofr">
								<p class="pric1"><del>Rs 13.00 Per Kg</del></p>
								<p><span class="item_price"><?= $v['price']?></span></p>
							</div>
						</div>
					</div>
					 <?php  endforeach;  ?>
					<div class="clearfix"> </div>
				</div>
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