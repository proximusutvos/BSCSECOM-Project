<!DOCTYPE HTML>
<html>
<head>
		<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
<title>BSCS-3 Shop</title>
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
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
</head>
<body>
<!--start-home-->
<!-- header_top -->
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
<!-- header -->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.php"><h1>BSCS-3 <img src="images/logo.png" width="80px" height="80px" style="border-radius: 100%" /><span> Shop</span></h1> </a>
			  			  <center><p style="font-size: 11px;font-color:gray;word-spacing: 10px;letter-spacing: 3px;text-shadow: gray 1px 1px">Your Online Peenoise Shop</p></center>
		  </div> <div class="header_right">
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
			<li><a class="color1" href="index.php">Home</a></li>
			<li style="float:right;"><a class="color1" href="cart.php">Cart</a></li>
			<li style="float:right;"><a class="color1" href="about.php">About</a></li>
			<li class="active grid" style="float:right;"><a class="color1" href="feedbackshow.php">Feedbacks</a></li>
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
<!--products-->
	<div class="products">
		<div class="container">
			<div class="products-grids">
			<div class="col-md-4 products-grid-right">
					<div class="w_sidebar">
						<div class="w_nav1">
							<h4><a href="index.php">All</a></h4>
							<ul>
								<li><a href="shoes.php">Shoes</a></li>
								<li><a href="tshirt.php">Tshirt</a></li>
								<li><a href="watches.php">Watches</a></li>
							</ul>	
						</div>
						</div>
					</div>
					<div class="col-md-7 single-text">
					<div class="details-left-info simpleCart_shelfItem">
						<?php						
						echo "<h1> Comments</h1><br>";
						include 'connection.php';						
						if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
						}
						$result = mysqli_query($conn,"SELECT * FROM feedbacktbl");
						echo "<table>";
						while($row = mysqli_fetch_array($result))
								  {
								  echo "<tr><td>" . $row['fullname'] . "<br>" . $row['feedback'] . "<br><br>";
								  }
						echo "</table>";
						mysqli_close($conn);
						?>
					<div class="clearfix"> </div>
					<div class="single-but item_add">
					<a href="feedback.php?"><h1>Make a Comment....</h1></a>				
				</div>
					<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //products -->
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
<p>&copy; 2018 All Rights Reserved </p>		</div>
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