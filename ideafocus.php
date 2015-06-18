<?php
include_once __DIR__.'/includes/login_check.php';
include_once '/includes/ideafocus.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>CONNECT</title>
	<!--Responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--JavaScript files-->
	<script src="js/scripts.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
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

		 	<div style="height:960px;" class="logo-slide block"> 
		 			<a href="index.php"><div id="fixed-header-bar" class="logo block">
		 				<img src="pics/logo/logo_connect_transparent.png"/>
		 			</div></a>
			 			<div id="empty-box-190px">
			 				
			 			</div>
			 		<div class="float-right-container">
			 		<div class="block-content">
			 			<h2><?php echo $title ?></h2><br>
			 		</div>
				 		<div id="fixed-settings-bar" class="left-side1 block">
					 	 <img src="pics/example/photo-original (2).jpg" class="full-img"/>
					 	</div>
					 </div>
		 	</div>
		 	<div class="navigation block">
		 		<div class="content block">
		 			<div class="navigation-links block">
			 			<table class="navigation-links-table">
						  <tr>
						    <td class="active"><a href="discover.php">&nbspDISCOVER &nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="start.php">&nbspSTART&nbsp</a></td> 
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="about-us.php">&nbspABOUT US&nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="login.php">&nbspPROFILE <i class="fa fa-caret-down">&nbsp</i></a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						    
						    <td><a href="logout.php">&nbspLOG OUT &nbsp</a></td>

						    </td>
						  </tr>
						</table>
		 			</div>
		 			<div class="preview-under-nav-links block" id="explenationbox-discoverpage">
		 				<div class="block-content white-color">
		 					<h3>Abstract: </h3> <p><?php echo $abstract?></p>
		 					<br>
			 				<h3>Description: </h3><p><?php echo $description ?></p>
			 				<br>
			 				<h3>Category: </h3><p><?php echo $category?></p>
			 				<br>
			 				<h3>Creation Date: </h3><p><?php echo $creation_date?></p>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 	<!--2nd row--> <!-- All ideas are previewd here!-->
	 		<div class="right-side-large-block block">
	 			<!-- HIER KOMMT DIE KOMMENT FUNKTION HIN!!!!-->

	 		<!--3rd row-->
  			<div id="fixed-left-side4" class="left-side4 block">
	  			<div class="right-side1 suqare block">
	  				<div class="block-content">
	  					<h2>User Data</h2><br>
	  					<h3>Name: </h3> <?php echo $uname ?>
	  					<br><br>
	  					<h3>E-Mail: </h3> <?php echo $email ?>
	  					<br><br><h3>More <strong>Information</strong> about the author?!</h3><br>
	  				 	<?php echo '<a href="profile.php?user=' . $user_id . '"> <h3>Click here!!</h3> </a>'; ?>
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
	 	</div><!--Still in Blockgroup!-->
	</div>
 </div>

</body>
</html>
