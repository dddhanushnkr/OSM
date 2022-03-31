<?php

include "sess.php";
if(isset($_SESSION['gid'])){ 
 include 'dbconnect.php';
 $id=$_SESSION['id'];
    $qer="select uname,uemail,phone from users where uid='$id'";	
$qes=mysqli_query($con,$qer);
    $data= mysqli_fetch_assoc($qes); 
    
          $res= 'SELECT max(pid) as max FROM products';
          $qe=mysqli_query($con,$res);
          $last= mysqli_fetch_assoc($qe);
          $last=$last['max']+1;
          
 }
else  header('location:index.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Online Scrapp Management | Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/example-styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo-styles.css">

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/simpleCart.min.js"></script>
<script type="text/javascript">
    function load(){
        document.getElementById('state').style.display="block";
        document.getElementById('error').innerHTML="y r out";
    }
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
                       
                        
		});
                
                 $(function(){
                        $('#color').multiSelect();
                        $('#size').multiSelect();
                        });
</script>

<link rel="stylesheet" type="text/css" href="css/example-styles.css">
<link rel="stylesheet" type="text/css" href="css/demo-styles.css">

<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>

<link href="css/animate.min.css" rel="stylesheet"> 

<script type="text/javascript" src="js/jquery.multi-select.js"></script>

</head>
<body>
<?php include 'manu.php';?>

             
	<div class="login-page">
	 <div class="login-page-bottom">
          	</div>
		<div class="widget-shadow">
			<div class="alert alert-danger" role="alert" id="state" style="display:none">
					<strong id="error"></strong> 
				</div>
                    	<div class="alert alert-success" role="alert" id="state1" style="display:none">
					<strong id="success"></strong> 
				</div>
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
                     
                            <form method="post" action="" enctype="multipart/form-data">
                               Name: <input type="text" name="name" value="" placeholder="Name">
                               Price: <input type="text" name="price"  placeholder="Price" >
                               Quantity: <input type="number" min="1" name="qunt" value="1"><br><br>
							   Lang: &nbsp; &nbsp; &nbsp;<select id="color" name="lang[]" multiple>
                                 <option value="3">English</option>
                                    <option value="4">Other</option>
                                    <option value="1">Local</option>
                                     <option value="2">Hindi</option>
                                          
                               </select><br><br>
                               
                                <table><tr><td>Image:&nbsp;&nbsp; &nbsp;</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr></table><br>
                                    
                                Description:<br><textarea name="disc" rows="4" cols="52"></textarea>
                                    <input type="submit" name="new" value="Add">
					
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



<?php
echo "<script>document.getElementById(\"state\").style.display=\"none\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML=\" \";</script>";
?>
<?php
if(isset($_POST['new'])){
extract($_POST);
$target_dir = "images/";
$filename=$_FILES["fileToUpload"]["name"];
$tel=explode(".",$filename);
$extension=end($tel);
$newfilename=$last.".".$extension;

$target_file = $target_dir .$newfilename;

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML=\" File is not an image.\";</script>";
        
        $uploadOk = 0;
    }
if ($_FILES["fileToUpload"]["size"] > 2000000) {
        echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\"Sorry, your file is too large.\";</script>";
    
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
            echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\";</script>";
    
    $uploadOk = 0;
}
if ($uploadOk == 0) {
            echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, your file was not uploaded.\";</script>";
    
} else {
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
     $str="insert into products (name,price,description,lang,qunt,img,uid) values ('$name','$price','$disc','$lang[0]','$qunt','$newfilename','$id')";
  $qer=mysqli_query($con,$str);
  if($qer){
      
      for($i=0;$i<count($lang);$i++){
          $str="insert into color (pid,scid) values ('$last','$lang[$i]')";
          mysqli_query($con, $str);
      }
         
      
      
       echo "<script>document.getElementById(\"state1\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"success\").innerHTML+=\" product added successfuly.\";</script>";
      
  }else{
echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, there was an error uploading your file.\";</script>";
      
  }
     
        
        
        
        
 
 
        
    } else {
echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, there was an error uploading your file.\";</script>";
        
    }
}
}
?>
