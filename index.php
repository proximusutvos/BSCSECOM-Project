<!DOCTYPE HTML>
<html>
<head>
	<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
<title>
	BSCS-3 Shop
</title>
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
 <script src="js/scripts.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script id="jsbin-javascript">
(function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);
</script>
</head>
<body>
<style>
input[type="text"],
select{
  float:right;
  background: rgba(255,255,255,0.1);
  background-color: #e8eeef;
  border-radius: 3px;
  font-size: 13px;
  height: auto;
  width: 30%;
  padding: 5px;
  margin: 0;
  margin-bottom: 30px;
  outline: 0;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0, .03) inset;
  /* - border transition around a text field on focus - */
  border: 2px solid;
  border-color: #ccc;
  transition: border-color, .6s;  
}
input[type="text"]:focus,
select:focus {
  border-color: #5fcf80;  
}
</style>
<!--start-home-->
<div class="top_bg" id="home">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="signuplogout.php">Register an Account</a></li>
					<li><a href="#">
						<?php 
						error_reporting(0);
						session_start();
						$username = $_SESSION['username'];
						$id = $_SESSION['id'];
						$_SESSION['id'] = $id;
						if(isset($_SESSION['username']))
							echo '<span>Welcome -- '.$username.' </span>';					
						?></a>
					</li>
					<li><a href="logout.php">Logout</a></li>						
				</ul>
			</div>
			<div class="top_left">
				<span class="top_right"> <a class="header_top" style ="color:white;" href="feedback.php">Feedback .</style></a> | Call us : +63 902921341</span>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.php"><h1>BSCS-3 <img src="images/logo.png" width="80px" height="80px" style="border-radius: 100%" /><span> Shop</span></h1> </a>
			  <center><p style="font-size: 11px;font-color:gray;word-spacing: 10px;letter-spacing: 3px;text-shadow: gray 1px 1px">Your Online Peenoise Shop</p></center>
		  </div>
		  <div class="header_right">
			<div class="cart box_1">
				<div>
				<a  href="cart.php"><img src="images/cart1.png" width="80px" height="80px" /></a></div>
				<div class="clearfix"> </div> 
			</div>				 
		</div>
		<div class="clearfix"></div>	
	    </div>
		<!--start-header-menu-->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.php">Home</a></li>
			<li style="float:right;"><a class="color1" href="cart.php">Cart</a></li>
			<li style="float:right;"><a class="color1" href="about.php">About</a></li>
			<li style="float:right;"><a class="color1" href="feedbackshow.php">Feedbacks</a></li>
				<li><a class="color6" href="shoes.php">SHOES</a></li>			
				<li><a class="color8" href="tshirt.php">T-SHIRT</a></li>
				<li><a class="color9" href="watches.php">WATCHES</a></li>
				<form action="#" method="post">
				</form>
				</li>
			</li>	
		 </ul> 
	</div>
</div>
</div>
 <!--start-content-->
         <!--/start-fashion-->
		<div class="fashion-section">
		 <div class="container"> 
		 	<h3 class="tittle">SUMMER SHOPPING</h3><br>
		 	<center><img src="images/promo1.jpg" width="70%" alt=""/><br><br><br>

	<h3>SHOP FASHION FOR MEN AND WOMEN ONLINE ON YOUR ONLY PEENOISE SHOP</h3><br><br>
<p>
BSCS-3 Shop is the leading name in online shopping for fashion, carrying an ever-expanding line-up of top local and international brands tailored for consumers in the Philippines. Our selection of over 120.000 products covers every aspect of fashion, from shirts to dresses, sneakers to slip-ons, sportswear to watches, and so much more.<br><br>


Start your style journey by owning a well-rounded range of basics and essentials. Think t-shirts and denim jeans, summer shorts and sunglasses, and other everyday necessities. Find new inspiration through our fashion-focused edits, ranging from spotlight-stealing evening wear and party-ready dresses, to florals and other on-trend prints, to athleisure and off-duty wear. Stay sharp in suits and blazers made for the office and beyond. Don’t forget to match your outfit with the right shoes, be they classic flats, high heels, boots, or leather shoes. Prep yourself for all seasons by shopping from a complete range of outerwear, from lightweight jackets to cozy sweaters to heavy-duty coats. Our fashion collections are complemented by all kinds of accessories; think bags, watches, and sports lifestyle gear, as well as the best in beauty and grooming.<br><br>


With the widest selection of fashion you can possibly find, and outstanding services like lightning-quick delivery, free shipping over P995, a host of payment methods like cash on delivery, and free returns, BSCS-3 Shop is the very definition of online shopping today!</p><br><br>


		 	<h3 class="tittle">SHOP LIKE YOUR HYPEBEAST IDOL XANDER FORD</h3><br>
		 			 	<center><img src="images/model.jpg" width="70%" alt=""/><br><br><br>



		     <br><h3 class="tittle">Shoes</h3>
		   <div class="fashion-info">
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f1.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
							<p class="cart"><a href="shoes.php">Shop</a></p>				
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f2.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
								<p class="cart"><a href="shoes.php">Shop</a></p>				
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f3.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
							<p class="cart"><a href="shoes.php">Shop</a></p>							
						</figcaption>			
					</figure>		
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
		<div class="collection-section">
		 <div class="container"> 
		     <h3 class="tittle fea">T-SHIRTS</h3>

		   <div class="fashion-info">
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f4.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
							<p class="cart"><a href="tshirt.php">Shop</a></p>				
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f5.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
								<p class="cart"><a href="tshirt.php">Shop</a></p>				
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f6.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
							<p class="cart"><a href="tshirt.php">Shop</a></p>							
						</figcaption>			
					</figure>		
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
     	<div class="collection-section">
		 <div class="container"> 
		     <h3 class="tittle fea">WATCHES</h3>
		   <div class="fashion-info">
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f7.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
							<p class="cart"><a href="watches.php">Shop</a></p>				
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f8.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
								<p class="cart"><a href="watches.php">Shop</a></p>				
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f9.jpg" alt=""/>
						<figcaption>
							<h4>BSCS-3 Shop</h4>
							<p class="cart"><a href="watches.php">Shop</a></p>							
						</figcaption>			
					</figure>		
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
		  <!--start-bottom-->
		   <!--start-image-cursuals-->
                  <div class="scroll-slider">
                  	<div class="container"> 											 
							<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c8.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c5.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c6.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c7.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c8.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c5.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c6.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c7.png" alt=""/></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div> 
							<div class="clearfix"> </div>      
						  <!--start-image-->
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
								<!--//end-->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 5,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 2
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 3
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
						<!---->
				  </div>				
			</div>
 <!--//end-bottom-->
		<!--start-footer-->
	     <div class="footer">
		   <div class="container">
			<div class="footer-top">
				<div class="col-md-2 footer-left">
					<h3><a href="about.php">About Us</a></h3>
					<ul>
						<li><a href="feedbackshow.php">Feedback from Users</a></li>
						<li><a href="#">Contact Us</a></li>		
						<li><a href="#">.</a></li>		 
					</ul>
				</div>
				
				<div class="clearfix"> </div>
			</div>				
		</div>
	</div>
	<ul class="socials">
				    <li><a class="soc1" href="#"></a></li>
				    <li><a class="soc2" href="#"></a></li>
				    <li><a class="soc3" href="#"></a></li>
				</ul>
	 <!--/start-copyright-->
	 <div class="copy">
		<div class="container">
			<p>&copy; 2018 All Rights Reserved </p>
		</div>
	</div>
	 <!--//end-copyright-->
	<!--end-footer-->
 <!--//end-content-->
    	<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/									
										$().UItoTop({ easingType: 'easeOutQuart' });										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>