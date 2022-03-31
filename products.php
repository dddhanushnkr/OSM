<?php 
include 'sess.php';
include "dbconnect.php";
$qer="select * from products";	
$qes=mysqli_query($con,$qer);
$list=array();
while($row= mysqli_fetch_assoc($qes)){
    $list[]=$row;
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Online Scrapp Management | Products </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<script src="js/simpleCart.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>

<link href="css/animate.min.css" rel="stylesheet"> 

<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
		});
</script>

</head>
<body>
	<div class="header">
		<div class="top-header navbar navbar-default">
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<h2>Welcome to OSM <a href="register.php">Register </a> Or <a href="signin.php">Sign In </a></h2>
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
					<ul>
						<li><a href="#"> </a></li>
						<li><a href="#" class="pin"> </a></li>
						<li><a href="#" class="in"> </a></li>
						<li><a href="#" class="be"> </a></li>
						<li><a href="#" class="you"> </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
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
					<h1><a href="index.php">Online <b>Scrapp <b>Management</b><span class="tag">NOTHING IS USELESS IN THE WORLD</span> </a></h1>
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
		<?php include 'manu.php';?>
	
	</div>

	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>

	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-model-sec">
			
				 <?php  foreach ($list as &$v) : ?>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="single.php?productid=<?=  base64_encode($v['pid']) ?>"><img src="images/<?=  $v['img'] ?>" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="single.php?productid=<?=  base64_encode($v['pid']) ?>">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.php?productid=<?=  base64_encode($v['pid']) ?>"> </a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>
						<div class="ofr">
							<p class="pric1"><del>Rs. 16.00 Per Kg</del></p>
							<p><span class="item_price"><?=  $v['price'] ?></span></p>
						</div>
					</div>
				</div>
				
                            <?php  endforeach;  ?>
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
				<div class="slider-left">
						<h4>Filter By Price</h4>            
						<div id="slider-range"></div>							
						<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						<!---->
						<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "Rs" + ui.values[ 0 ] + " - Rs" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "Rs" + $( "#slider-range" ).slider( "values", 0 ) + " - Rs" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  
						</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
						<!---->
					</div>
					<div class="sidebar-row">
						<h4>NewsPaper </h4>
						<ul class="faq">
							<li class="item1"><a href="#">By Quantity<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">2 Kg</a></li>										
									<li class="subitem1"><a href="#">5 Kg</a></li>										
									<li class="subitem1"><a href="#">10 Kg</a></li>										
								</ul>
							</li>
							<li class="item2"><a href="#">By Language<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Local</a></li>										
									<li class="subitem1"><a href="#">Hindi</a></li>
									<li class="subitem1"><a href="#">English</a></li>	
									<li class="subitem1"><a href="#">International</a></li>	

								</ul>
							</li>
						</ul>
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
					</div>
					<div class="sidebar-row">
						<h4>Language</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Local</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Hindi</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>English</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>International</label>
						</div>
					</div>			 
				</div>
				<div class="gallery-grid ">
					<h6>YOU MAY ALSO WANT TO SELL</h6>
					<a href="single.php"><img src="images/b1.png" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.php">Magazines</a></h5>
						<p><span class="item_price">Rs 18.00 Per Kg</span></p>
						<h4 class="quan">Quantity: <a href="#"> 2 Kg</a> - <a href="#">5 Kg</a> - <a href="#">10 Kg</a> - <a href="#">More than 10 Kg</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
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