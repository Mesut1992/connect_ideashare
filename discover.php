<?php
include_once __DIR__.'/includes/login_check.php';
include_once '/includes/discover.inc.php';
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

		 	<div style="height:2400px;" class="logo-slide block"> 
		 			<a href="index.php"><div id="fixed-header-bar" class="logo block">
		 				<img src="pics/logo/logo_connect_transparent.png"/>
		 			</div></a>
			 			<div id="empty-box-190px">
			 				
			 			</div>
			 		<div class="float-right-container">
				 		<div id="fixed-settings-bar" class="left-side1 block">
				 			<div class="block-content">	
				 			<h2>Discover Options</h2>
				 			<br>
				 			<form action="discover.php" method="get">
					 			<table>
								  <tr>
								    <td>Category</td>
								    <td>
								        <select name="category">
							        		<?php $getcat = (isset($_GET["category"]) ? $_GET["category"] : "All"); ?>
							        		<option value="All" 
							        			<?php if ($getcat == "All") echo 'selected="selected"';?>
							        		>All</option>
							                <option value="Art" 
							        			<?php if ($getcat == "Art") echo 'selected="selected"';?>
							        		>Art</option>
							        		<option value="Design" 
							        			<?php if ($getcat == "Design") echo 'selected="selected"';?>
							        		>Design</option>
							        		<option value="Film n Video" 
							        			<?php if ($getcat == "Film n Video") echo 'selected="selected"';?>
							        		>Film n Video</option>
							        		<option value="Games" 
							        			<?php if ($getcat == "Games") echo 'selected="selected"';?>
							        		>Games</option>
							        		<option value="Music" 
							        			<?php if ($getcat == "Music") echo 'selected="selected"';?>
							        		>Music</option>
							        		<option value="Photography" 
							        			<?php if ($getcat == "Photography") echo 'selected="selected"';?>
							        		>Photography</option>
							        		<option value="Technology" 
							        			<?php if ($getcat == "Technology") echo 'selected="selected"';?>
							        		>Technology</option>
								        </select>
									</td> 
								  </tr>
								  <tr>
								    <td>Sort by</td>
								    <td>
								        <select name="sort">
							        		<option value="None" selected="selected">None</option>
							                <option value="Popularity">Popularity</option>
							                <option value="Newest">Newest</option>
							                <option value="Concluded">Concluded</option>
								        </select>
									</td> 
								  </tr>
								  <tr>
								  	<td>
								  		Search
								  	</td>
								  	<td>
								  		<input name="Search"></input>
								  	</td>
								  </tr>
								  <tr>							  	
								  	<td><input type="submit" value="Filter!"></input></td>
								  </tr>
								</table>
							</form>
							<br>
							<table>
							  <tr>
							  <hr>
							  	<br>
							  	<p>Find your next CONNECTion!</p>
							  </tr>
							  <tr>	
							  </tr>
							</table>
					 		</div>
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
		 					<h2>How it works</h2>
		 					<br>
			 				<p>On the left side you can filter the ideas you want to see.<br>
			 				Then scroll down to see your result. Don't worry, the filter bar will scroll down with you, if you need to make any changes!<br> Please notice that your result may end in several pages. You can view these also in the options bar on the left! <br>

			 				</p>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 	<!--2nd row--> <!-- All ideas are previewd here!-->
	 		<div class="right-side-large-block block">
	 			<?php 
	 			$i = 0;
		 		$i= count($user_id);
		 		
		 		for ($b=0; $b < $i; $b++) { 
		 			echo '<div class="left-side4-content block background-transparent">
		 			<div class="right-side1 square block" id="preview-pic">
		 					<img src="' . $picture[$b] . '" style="width: 100%; height: 100%;">

		 			</div>
		 			<div class="right-side1 square block background-transparent" id="preview-desc">

		 				<div class="block-content">';
	 				echo '<h4>'.$title[$b].'</h4>
	 					<h5>'.$abstract[$b].'</h5> 
	 					<br>
	 					<p>'.$description[$b].'</p> 
	 					<h5>Created By:  <strong>'.$username[$b] .'</strong></h5><h5>'. $email[$b]. '</h5>
	 					';
			 		echo '</div>
			 			</div>
		 			</div>';
		 			 }
	 			?>
	 		<!--3rd row-->
  			<div id="fixed-left-side4" class="left-side4 block">
	  			<div class="right-side1 suqare block">
	  				<div class="block-content">
	  					<h4>If you want to see more press on the pages on the left! </h4>
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
