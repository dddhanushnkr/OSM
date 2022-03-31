<?php include 'sess.php'; ?>
<?php
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
<title>Online Scrapp Management</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/simpleCart.min.js"></script>

<link href="css/animate.min.css" rel="stylesheet"> 
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
                      
                      $('#pro').on('change', function() {
                          if(this.value=='logout'){
                         $.post("users.php", 
                  { action: "logout" }, 
                  function(data) { 
                      location.reload(true);
                      
                  } 
               );}else if(this.value=='account'){
       window.location.href ="account.php";
       
               }else if(this.value=='add'){
       window.location.href ="addnew.php";
               }else if(this.value=='all'){
       window.location.href ="uproducts.php";
               }
    
});
                    
		});
                

</script>

</head>
<body>

	<div class="header">
<?php if(!isset($_SESSION['id']))   include 'head/alert.php'; ?>
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
                                      <?php if(isset($_SESSION['id']))
                                       if($_SESSION['gid']==1)include 'head/select.php';
                                      elseif($_SESSION['gid']==2)include 'head/select2.php';    
                                       else echo $_SESSION['gid'];
                                           ?>
                                          
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

	<div class="banner">
		<div class="container">
			<div class="banner-text">			
				<div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">			
					<h2>Yugadi Special Offer</h2>
					<h3>Coming Soon </h3>
					<h4>New categories</h4>
					<div class="count main-row">
						<ul id="example">
							<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
							<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
							<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
						</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '02/04/2022 09:59:59',
									offset: -8,
									day: 'Day',
									days: 'Days'
								}, function () {
									alert('Done!');
								});
							</script>
					</div>

				</div>
				<div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">			
					<section class="slider grid">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<h4>+30%</h4>
									<img src="images/b1.png" alt="">
								</li>
								<li>
									<h4>+25%</h4>
									<img src="images/b2.png" alt="">
								</li>
								<li>
									<h4>+32%</h4>
									<img src="images/b3.png" alt="">
								</li>
							</ul>
						</div>
					</section>
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "pagination",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>			

	<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Available <span>Categories</span></h3>
				
			</div>
			<div class="new-info">
                            
                          <?php  foreach ($list as &$v) : ?>

				<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="single.php?productid=<?=  base64_encode($v['pid']); ?>"><img src="images/<?=  $v['img'] ?>" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href=""> Add to cart</a></li>
								<li><a href="single.php?productid=<?=  base64_encode($v['pid']) ?>">Quick View </a></li>
								<li><a href="products.php?productid=<?=  base64_encode($v['pid']); ?>">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.php?productid=<?=  base64_encode($v['pid']); ?>"><?=  $v['name'] ?> </a></h5>
						<div class="rating">
							
						</div>	
						<div class="ofr">
							<p class="pric1"><del>Rs.8 per Kg</del></p>
							<p><span class="item_price"><?= $v['price']?></span></p>
						</div>
					</div>
				</div>
                          <?php  endforeach;  ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>		

	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
		 		<h3 class="title">Popular<span> Sales</span></h3>
				<p>These are some of the top categories that are sold more by customers </p>
			</div>
			<div class="gallery-info">
                          <?php    foreach ($list as &$v) : ?>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.php?productid=<?=  $v['pid'] ?>"><img src="images/<?= $v['img']?>" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.php?productid=<?=  $v['pid'] ?>"> </a><?= $v['name']?></h5>
						<p><span class="item_price"><?= $v['price']?></span></p>
						<h4 class="quan">Quantity: <a href="#">2Kg</a> - <a href="#">5Kg</a> - <a href="#">10Kg</a> - <a href="#">More than 10Kg</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
                             <?php  endforeach;  ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="trend wow zoomIn animated" data-wow-delay=".5s">
		<div class="container">
			<div class="trend-info">
				<section class="slider grid">
					<div class="flexslider trend-slider">
						<ul class="slides">
							<li>
								<div class="col-md-5 trend-left">
									<img src="images/t1.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Extra 20% More</h5>
									<p>Metals are valuable materials that can be recycled again and again without degrading their properties. Scrap metal has value, which motivates people to collect it for sale to recycling operations.In addition to a financial incentive, there is also an environmental imperative. The recycling of metals enables us to preserve natural resources while requiring less energy to process than the manufacture of new products using virgin raw materials.</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="col-md-5 trend-left">
									<img src="images/t2.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Extra 20% OFF</h5>
									<p>Textile wastage is a great threat for any textile industry and the environment as well. When fibre bales are processed through the blow room section in a spinning mill a huge amount of cotton wastage produces. So it is an economic threat. In a dyeing factory tons of fabric dyed and tons of wastewater is produced which is a great threat to the environment.</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="col-md-5 trend-left">
									<img src="images/t3.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Extra 20% OFF</h5>
									<p>Plastic is a polymeric material—that is, a material whose molecules are very large, often resembling long chains made up of a seemingly endless series of interconnected links. Natural polymers such as rubber and silk exist in abundance, but nature’s “plastics” have not been implicated in environmental pollution, because they do not persist in the environment.</p>
								</div>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php">Online <b>Scrapp <b> Management</b> <span class="tag">NOTHING IS USELESS IN THE WORLD</span> </a></h4>
					<p>© 2022 Online Scrapp Management. All rights reserved | Design by <a href="https://github.com/dddhanushnkr" target="_blank">Dhanush Navuda K R, Abhishek M N and Yashas V</a></p>
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
