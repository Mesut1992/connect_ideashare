<?php 
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
 
if (! $error) {
    $error = 'Oops! An unknown error happened.';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<!--Responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--JavaScript files-->
	<script src="js/scripts.js"></script>
	<script src="js/jquery-2.1.3.js"></script>

	<!--Delete this source!! Only for developing-->
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap-3.3.4/dist/css/bootstrap.css"/> -->

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

		 	<div id="fixed-logo-slide" class="logo-slide block"> 
		 			<a href="index.html"><div id="fixed-header-bar" class="logo block">
		 				<img src="pics/logo/logo_connect_transparent.png"/>
		 			</div></a>
			 		<div id="empty-box-190px"></div><!-- Do not delete this! -->
			 		<div class="float-right-container">
				 		<div id="fixed-settings-bar" class="left-side1 block">
				 			<div class="block-content">	
				 			<p>Ah, there are much better places like this page...</p>
			 				</div>
			 			</div>
		 			</div>
		 	</div>
		 	<div class="navigation block">
		 		<div class="content block">
		 			<div class="navigation-links block">
			 			<table class="navigation-links-table">
						  <tr>
						    <td><a href="discover.html">&nbspDISCOVER &nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="start.html">&nbspSTART&nbsp</a></td> 
						    <td><i class="fa fa-minus fa-1g"></i></td>
						    
						    <td><a href="about-us.html">&nbspABOUT US&nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td class="active"><a href="login.html">&nbspLOGIN <i class="fa fa-caret-down">&nbsp</i></a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						    
						    <td><a href="register.html">&nbspNEW USER &nbsp</a></td>

						    </td>
						  </tr>
						</table>
		 			</div>
		 			<div class="preview-under-nav-links block">
		 				<div class="right-side1 square block">
		 					<div class="block-content">
				 				<h2>An error occured!</h2><br>
				 				<p>We are sorry for that!</p><br>
				 				<p class="error">
				 					<?php
				 						echo $error;
				 					?>
				 				</p>
		 					</div>			
		 				</div>
		 				<div class="right-side1 square block">
			 				<div class="block-content">
			 				</div>		
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 	<!--2nd row-->
	 		<div class="block-group">
  			<div id="fixed-left-side4" class="left-side4 block">
	  			<div class="right-side1 suqare block">
	  				<div class="block-content">

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
