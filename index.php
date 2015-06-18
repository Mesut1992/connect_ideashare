<?php
include_once __DIR__.'/includes/login_check.php';
?><!--$_SERVER['DOCUMENT_ROOT']-->

<!DOCTYPE html>
<html>
<head>
	<title>CONNECT</title>
	<!--Responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="ISO-8859-1">
	<!--JavaScript files-->
	<script src="js/scripts.js"></script>
	<script src="js/jquery-2.1.3.js"></script>

	<link rel="shortcut icon" href="pics/logo/Favicon/favicon.ico">
	<!--Stylesheets-->
		<link rel="stylesheet" type="text/css" href="css/grid.css" />
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.css" />
		<!-- Font -->
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,600' rel='stylesheet' type='text/css'>

</head>  

<body>
 <div id="container">

 	<!-- Header -->
	<div id="header">	
	 	<div class="block-group">
		 	<div class="logo-slide block">
		 		<div class= "block-group">
		 			<a href="index.php">
		 			<div class="logo block">
		 				<img src="pics/logo/logo_connect_transparent.png"/>
		 			</div>
		 			</a>
			 		<div class="left-side1 block">
			 			<div class="block-content">	
			 					<h2>Welcome <?php echo $_SESSION['username'] ?> !</h2><br>
			 					<h4>New Here? Let me tell you what connect is!</h4><br>

				 				<h4>IDEAS+CONNECT=</h4>
				 				<div class="colored-header" style:"text-align:center;"><i class="fa fa-heart"></i>BFFs<i class="fa fa-heart"></i></div><br>
				 				<h4>This is the perfect place to share ideas. The place for your Innovation! Collaborate, Connect and Carrier.</h4><br>
				 				<p>Ever wanted to share your idea over the campus? HERE YOU GO! Thank us later, aligator.</p>
				 				<br><br><br>
								<a href="#" style="color:black"><i class="fa fa-connectdevelop fa-1x"></i>&nbspLearn to use the app!</a>
				 				<br><br>
				 				<a href="#" style="color:black"><i class="fa fa-eye fa-1x"></i>&nbsp Discover Ideas!</a>
				 				<br>
				 		</div>
				 	</div>
		 		</div>
		 	</div>
		 	<div class="navigation block">
		 		<div class="content block">
		 			<div class="navigation-links block">
			 			<table class="navigation-links-table">
						  <tr>
						    <td><a href="discover.php">&nbspDISCOVER &nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="start.php">&nbspSTART&nbsp</a></td> 
						    <td><i class="fa fa-minus fa-1g"></i></td>						   						   
						   
						    <td><a href="about-us.php">&nbspABOUT US&nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="profile.php">&nbspPROFILE <i class="fa fa-caret-down">&nbsp</i></a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>			

						    <td><a href="logout.php">&nbspLOG OUT</a></td>						   				  

						    </td>
						  </tr>
						</table>
		 			</div>
		 			<div class="preview-under-nav-links block">
		 				<iframe width="640" height="320" src="https://www.youtube.com/embed/w2jFzJTw9VY?rel=0&amp;controls=0&amp;showinfo=0&start=0&end=58&autoplay=1" frameborder="0" allowfullscreen></iframe>
		 			</div>
		 		</div>
		 	</div>
		 	<!--2nd row-->
		 	<div class="block-group">
		 		<div class="right-side1 suqare block">
		 			<div class="block-content">
		 				<h4>BE DIFFERENT</h4>
		 				<h4>TEAMWORK</h4>
		 				<h4>WATCH THE VIDEO</h4>
		 				<h4>SHARE IDEAS</h4>
		 				<h4>CHANGE THE WORLD</h4>
		 				<h4>START ACTING</h4>
		 				<h4>CONNECT WITH PEOPLE</h4>
		 				<h4>GET MOTIVATED</h4>
		 				<h4>CREATIVITY</h4>
		 				<h4>SUCCESS</h4>
		 			</div>
		 		</div>
		 		<div class="right-side2 block">
		 			<div class="block-content" style="color:white">
		 				<h2>WHO ARE WE?</h2><br><br>
		 				<h4>We are students from the DHBW like you!</h4>
		 				<br>
		 				<a href="#" ><div class="white-color"><i class="fa fa-trophy fa-1g"></i>&nbsp Meet us!</div></a>
		 			</div>
		 		</div>
		 	</div>
	 		<!--3rd row-->
	 		<div class="block group">
		  		<div class="left-side2 block">
		  			<div class="left-side2-content block">
		  				<div class="block-content" style="color:white;">
		  				<h2>SUCCESS MEANS TO BE DIFFERENT!</h2>
		  				<br>
		  					<h4>
		  						All successful people jumped out of the frame! Your success does not depend on your knowledge, it depends on the CONNECTions you have! 
		  					</h4>	
		  					<br><br><br><br>
		  					<a href="#"><i class="fa fa-trophy fa-1x"></i>&nbsp Meet us!</a>
		  				</div>
		  			</div>
	  			</div>
	 		</div>
	 		<div class="block group">
		  		<div class="left-side3 block">
		  			<div class="left-side3-content block">
		  				<div class="block-content white-color">
		  				 placeholder 
		  				</div>
		  			</div>
	  			</div>
	  			<div class="left-side4 block">
		  			<div class="left-side4-content block ">
		  				<div class="block-content">
		  					<a href="www.dhbw-stuttgart.de"><img src="pics/logo/dhbw.svg"></a>
		  					<br><br><h2>DHBW Stuttgart</h2>
		  					<p>Diese Seite ist nur für Studenten der DHBW Stuttgart zugänglich.</p>
		  				</div>
		  			</div>
		  			<div class="right-side1 suqare block">
		 				<div class="block-content">
		 					<h2>Feedback? Need Help?</h2>
		 					<br>
		 					Feedback? Please send your feedback via mail to <a href="mailto:service@mesutkuscu.com">service@mesutkuscu.com</a>. We will answer you as fast as we can! 
		 				</div>
		 			</div>
		 			<div class="left-side4-content background-transparent block">
		 				<div class="block-content">
		 				<br><br>
		 					<p id="copyright">&copy; 2015 
		 					<br>Mesut Kuscu <br>
		 					<a href="mailto:mail@mesutkuscu.com">mail@mesutkuscu.com</a> <br>
		 					<br><br>
		 					in behalf of <i>Duale Hochschule Baden-W&uuml;rttemberg</i><br>
		 					<a href="http://www.dhbw.de/" target="_blank">www.dhbw.de</a> <br>
		 					<a href="mailto:bergmann@dhbw.de">bergmann@dhbw.de</a> <br>
							Telefon  0711 / 320 660-0<br>
		 					</p>
		 				</div>
		 			</div>
		 			
	  			</div>
	 		</div>

	 	</div><!--Still in Blockgroup!-->
</div>
</div>

</body>
</html>>
