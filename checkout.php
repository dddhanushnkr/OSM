
<!DOCTYPE html>
<html>
<head>
<title>Online Scrapp Management | Checkout</title>

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

<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.cart-header').fadeOut('slow', function(c){
	  		$('.cart-header').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.cart-header1').fadeOut('slow', function(c){
	  		$('.cart-header1').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.cart-header2').fadeOut('slow', function(c){
	  		$('.cart-header2').remove();
		});
	});	  
});
</script>

</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
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
					<h1><a href="index.php">Online <b>Scrapp <b> Management</b><span class="tag">NOTHING IS USELESS IN THE WORLD </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
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

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="index.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Paper<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">
										<div class="col-sm-4 menu-grids menulist1">
											<h4>Paper & CardBoard</h4>
											<ul class="multi-column-dropdown ">
												<li><a class="list" href="products.php">Colored office paper</a></li>
												<li><a class="list" href="products.php">White office paper</a></li>
												<li><a class="list" href="products.php">Magazines</a></li>
												<li><a class="list" href="products.php">Phone Books</a></li>
												<li><a class="list" href="products.php">Catalogs</a></li>
											</ul>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Corrugated Cardboard</a></li>
												<li><a class="list" href="products.php">Paperboard or Chipboard</a></li>
											</ul>
										</div>																		
										<div class="col-sm-2 menu-grids">
											<h4>NewsPaper</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Local NewsPaper</a></li>
												<li><a class="list" href="products.php">Hindi NewsPaper</a></li>
												<li><a class="list" href="products.php">English NewsPaper</a></li>
												<li><a class="list" href="products.php">Other International NewsPaper</a></li>
											</ul>
										</div>
										
											<ul class="multi-column-dropdown">

										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Glass<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column2">
									<div class="row">
										<div class="col-sm-3 menu-grids">
											<h4>Glaass and Accesories</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Windows</a></li>
												<li><a class="list" href="products.php">Drinking Glass</a></li>
												<li><a class="list" href="products.php">Broken Glass</a></li>
												<li><a class="list" href="products.php">Pyrex</a></li>
												<li><a class="list" href="products.php">Ceramics</a></li>
											</ul>
										</div>																		
										<div class="col-sm-3 menu-grids">
											<h4>Color</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Multi Colored</a></li>
												<li><a class="list" href="products.php">Single Colored</a></li>
											</ul>
										</div>
									
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Metals and Electronics<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column menu-two multi-column3">
									<div class="row">
										<div class="col-sm-2 menu-grids">
											<h4>Metals</h4>
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.php">Aluminum</a></h6></li>
												<li><a class="list" href="products.php">Brass and Bronze</a></li>
												<li><a class="list" href="products.php">Cast Iron</a></li>
												<li><a class="list" href="products.php">Copper</a></li>
												<li><a class="list" href="products.php">Steel</a></li>
												<li><a class="list" href="products.php">Tin</a></li>
											</ul>
										</div>
										<div class="col-sm-2 menu-grids">
											<h4>Electronics</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Computers and Mobile Device</a></li>
												<li><a class="list" href="products.php">Networking Equipments</a></li>
												<li><a class="list" href="products.php">E Bikes and E Scooters Parts</a></li>
												<li><a class="list" href="products.php">Displays</a></li>
												<li><a class="list" href="products.php">Batteries</a></li>
												<li><a class="list" href="products.php">Printers</a></li>
											</ul>
										</div>
							
										<div class="clearfix"> </div>
									</div>	
								</ul>
							</li>				
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Textile and Plastics<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column4">
									<div class="row">																	
										<div class="col-sm-2 menu-grids">
											<h4>Textile</h4>
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.php">Post Consumer</a></h6></li>
												<li><a class="list" href="products.php">Pre Consumer</a></li>
											</ul>
										</div>
										<div class="col-sm-2 menu-grids">
											<h4>Plastics</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">PET</a></li>
												<li><a class="list" href="products.php">HDPE</a></li>
												<li><a class="list" href="products.php">PVC</a></li>
												<li><a class="list" href="products.php">LDPE</a></li>
												<li><a class="list" href="products.php">PP</a></li>
											</ul>
										</div>
									
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
						</ul> 
						<div class="clearfix"> </div>
						<header class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul>
						</header>
					</div>

				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Check Out page</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--cart-items-->
	<div class="cart-items">
		<div class="container">
			<h3 class="wow fadeInUp animated" data-wow-delay=".5s">My Shopping Cart(3)</h3>
			<div class="cart-header wow fadeInUp animated" data-wow-delay=".5s">
				<div class="alert-close"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<a href="single.php"><img src="images/g3.jpg" class="img-responsive" alt=""></a>
					</div>
					<div class="cart-item-info">
						<h4><a href="single.php">Nothing is useless in the world</a><span>Pickup time :</span></h4>
						<ul class="qty">
							<li><p>Min. quantity value :2Kg</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
						<div class="delivery">
							<p>Service Charges : Rs 10.00</p>
							<span>Delivered will be taken in 1-1:30 hours</span>
							<div class="clearfix"></div>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="cart-header1 wow fadeInUp animated" data-wow-delay=".7s">
				<div class="alert-close1"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<a href="single.php"><img src="images/g4.jpg" class="img-responsive" alt=""></a>
					</div>
					<div class="cart-item-info">
						<h4><a href="single.php">Nothing is useless in the world</a><span>Pickup time :</span></h4>
						<ul class="qty">
							<li><p>Min. quantity value :2Kg</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
						<div class="delivery">
							<p>Service Charges : Rs 10.00</p>
							<span>Delivered will be taken in 1-1:30 hours</span>
							<div class="clearfix"></div>
						</div>	
					</div>
				   <div class="clearfix"></div>
				</div>
			</div>
			<div class="cart-header2 wow fadeInUp animated" data-wow-delay=".9s">
				<div class="alert-close2"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<a href="single.php"><img src="images/g9.jpg" class="img-responsive" alt=""></a>
					</div>
					<div class="cart-item-info">
						<h4><a href="single.php">Nothing is useless in the world</a><span>Pickup time :</span></h4>
						<ul class="qty">
							<li><p>Min. quantity value :2Kg</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
						<div class="delivery">
							<p>Service Charges : Rs 10.00</p>
							<span>Delivered will be taken in 1-1:30 hours</span>
							<div class="clearfix"></div>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>		
		</div>
	</div>
	<!--//cart-items-->	
	<!--footer-->
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