<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once "includes/login_check.php";
include_once "includes/start-share.inc.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Start Share</title>
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

		 	<div id="fixed-logo-slide"class="logo-slide block" style="position: relative;"> 
		 			<a href="index.php"><div id="fixed-header-bar" class="logo block">
		 				<img src="pics/logo/logo_connect_transparent.png"/>
		 			</div></a>
			 		<div id="empty-box-190px"></div><!-- Do not delete this! -->
			 		<div class="float-right-container">
				 		<div id="fixed-settings-bar" class="left-side1 block">
				 			<div class="block-content">	
				 			<h4>Tips and Tricks</h4><br>
				 				<p>There are no tips and tricks here. Yet. We know, that sucks!<br><i class="fa fa-cogs"></i> We're working hard on fixing this.</p>
				 			<br>
				 			<h4>In short: DHBW will not sell your data.<br>Your data is pretty save.</h4><p>Anyways... who would be interested? </p>
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
						   
						    <td class="active"><a href="start-share.php">&nbspSTART&nbsp</a></td> 
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="about-us.php">&nbspABOUT US&nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="profile.php">&nbspPROFILE</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						    
						    <td><a href="logout.php">&nbspLOG OUT &nbsp</a></td>
						  </tr>
						</table>
		 			</div>
		 			<div class="preview-under-nav-links block">
		 					<div class="block-content white-color">
			 				<h2>Information</h2><br>
				 			<p>Share your ideas on this page! If you already have a facebook-site for your idea, don't forget to link it.<br><a href="start.php"><i class="fa fa-hand-o-right"></i>&nbsp;New here? Read the introduction!</a></p>
				 			<br><br>
				 			<?php 
		 						if($updated)
		 							echo '
								<div class="msg-success">
			 						<p>Your idea and the photo were uploaded successfully!</p>
			 					</div>
									';
		 						else{
		 							if ($error) {
		 								echo '<div class="msg-fail">
			 						<p>' . $error_msg .  '</p></div><br><div class="msg-fail"><p>' .  $error_msg_final. '</p>
			 					</div>';
		 							}
		 						}
		 					?>

		 				</div>		 	
		 			</div>
		 		</div>
		 	</div>
		 	<a href=""></a>
		 	<!--2nd row-->
	 		<div class="right-side-large-block block">
	 			
		 			 <div class="block-content white-color">
		 			 	<h2>Project Content</h2>		 			 
		 			 	<br>
		 			 	<!--Form to upload an idea-->
		 			 	<!-- Enter here the URL in action, to which the user should go to if the idea is uploaded successfully-->
		 			 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
			 				method="post" name="ideas_form" enctype="multipart/form-data">
		 			 	<table>
			 			 	<tr>				 						
		 						<td>Category</td>
					   			 <td>						    		
							        <select name="category">
							                <option value="Art" selected>Art</option>
							                <option value="Design">Design</option>
							                <option value="Film n Video">Film n Video</option>
							                <option value="Games">Games</option>
							                <option value="Music">Music</option>
							                <option value="Photography">Photography</option>
							                <option value="Technology">Technology</option>
							        </select>									
								</td>
		 					</tr>
		 					<tr>
		 						<td>
		 							Title
		 						</td>
		 						<td>
		 							<textarea type="text" name="title" id="title" maxlength="255" required placeholder="Title"></textarea>
		 						</td>
		 					</tr>	
		 					<tr>
		 						<td>
		 							Abstract
		 						</td>
		 						<td>
		 							<textarea type="text" name="abstract" id="abstract" maxlength="255" required placeholder="Abstract"></textarea>
		 						</td>
		 					</tr>	
		 			 		<tr>
		 			 			<td>
		 			 				Upload a picture<br>Format: 160px * 160px
		 			 			</td>
		 			 			<td>
		 			 				Select image to upload:
								    <input type="file" name="fileToUpload" id="fileToUpload">						
		 			 			</td>
		 			 		</tr>			 			 	
		 			 		<tr>
		 			 			<td>
		 			 				Description
		 			 			</td>
		 			 			<td>
		 			 				<textarea type="text" name="description" id="description" maxlength="255" required placeholder="Description"></textarea>
		 			 			</td>
		 			 		</tr>
		 			 		<tr>
		 			 			<td>
		 			 				<i class="fa fa-bullhorn fa-5x"></i> YEAH! 
		 			 			</td>
		 			 			<td>
		 			 				<input type="submit" value="Share Idea!"></input>
		 			 			</td>
		 			 		</tr>
		 			 	<!-- 	<tr>
		 			 			<td>
		 			 				Current status of project
		 			 			</td>
		 			 			<td>
		 			 				<textarea placeholder="type here"></textarea>
		 			 			</td>
		 			 		</tr> -->
		 			 	</table>	
	 			 	</form>	 			 					 				
	 			 </div>
	 			
	 			<!-- <div class="left-side4-content block" style="border-style: dotted solid; background-color: transparent;">
		 			 <div class="block-content">
		 			 	<h4>Social media is a key part of CONNECT!</h4>
		 			 	
		 			 </div>
	 			</div>
	 			<div class="left-side4-content block" style="border-style: dotted solid; background-color: transparent;">
	 				<h2> COMMENT SECTION </h2>
	 			</div>
	 			<div class="left-side4-content block" style="border-style: dotted solid; background-color: transparent;">
					<h2> COMMENT SECTION </h2>
	 			</div> -->
	 			<div class="block-content"><br><br>
	 			
	 			</div>
	 		</form>
	 		</div>
	 		</div>
	 		<!--3rd row-->
	 	</div><!--Still in Blockgroup!-->
	</div>
 </div>

</body>
</html>>
