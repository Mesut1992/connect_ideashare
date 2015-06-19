<?php
include_once __DIR__.'/includes/login_check.php';
include_once '/includes/profile.inc.php';
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
		 	<div style="height: 960px" class="logo-slide block" id="fixed-logo-slide"> 
	 			<a href="index.php"><div id="fixed-header-bar" class="logo block">
	 				<img src="pics/logo/logo_connect_transparent.png"/>
	 			</div></a>
		 			<div id="empty-box-190px">
		 				
		 			</div>
		 		<div class="float-right-container">
			 		<div id="" class="left-side1 block">
			 			<div class="block-content">	
			 				<h3>Hi <?php echo $sessuser ?>! :)</h3>
			 				<hr/>
			 				<img src="pics/example/photo-original.jpg" alt="Profile Picture" class="profile-picture move-down"/>
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
						   
						    <td><a href="start-share.php">&nbspSTART&nbsp</a></td> 
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td><a href="about-us.php">&nbspABOUT US&nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td class="active"><a href="profile.php">&nbspPROFILE</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						    
						    <td><a href="logout.php">&nbspLOG OUT &nbsp</a></td>
						  </tr>
						</table>
		 			</div>
		 			<div class="left-side4 block grey-background" id="">
		 				<div class="block-content white-color">
		 					<?php 
		 						if($updated)
		 							echo '
								<div class="msg-success">
			 						<p>You successfully updated your profile information!</p>
			 					</div>
									';
		 						else 
		 							echo '
								<h3>You can change your data right here</h3>
									';
		 					?>
		 					<?php echo ($disabled ? "" : '
		 					<form action="profile.php" method="get">
		 					') ?>
		 						<table class="move-down">
		 							<tr>
			 							<td>
		 									<label for="firstname">First Name:</label>
			 							</td>
			 							<td>
				 							<input type="text" name="firstname" value="<?php echo $fname ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
		 									<label for="lastname">Last Name:</label>
			 							</td>
			 							<td>
				 							<input type="text" name="lastname" value="<?php echo $lname ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
		 									<label for="email">E-Mail:</label>
			 							</td>
			 							<td>
				 							<input type="email" name="email" value="<?php echo $email ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
		 									<label for="faculty">Faculty:</label>
			 							</td>
			 							<td>
				 							<input type="text" name="faculty" value="<?php echo $fac ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
		 									<label for="location">Location:</label>
			 							</td>
			 							<td>
				 							<input type="text" name="location" value="<?php echo $loc ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
			 							</td>
		 							</tr>
		 							<tr>
			 							<td>
		 									<label for="webpage">Webpage:</label>
			 							</td>
			 							<td>
				 							<input type="url" name="webpage" value="<?php echo $webp ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
		 									<label for="linkedin">LinkedIn-Profile:</label>
			 							</td>
			 							<td>
				 							<input type="url" name="linkedin" value="<?php echo $lin ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
		 									<label for="facebook">Facebook-Profile:</label>
			 							</td>
			 							<td>
				 							<input type="url" name="facebook" value="<?php echo $fb ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
		 									<label for="twitter">Twitter-Profile:</label>
			 							</td>
			 							<td>
				 							<input type="url" name="twitter" value="<?php echo $twit ?>" <?php echo ($disabled ? "disabled" : "") ?>></input>
				 						</td>
		 							</tr>
		 							<tr>
			 							<td>
			 							</td>
		 							</tr>
		 							<tr>
		 								<td>
		 								</td>
			 							<td>
			 								 <?php
			 								 	echo ($disabled ? '' : '
			 								 	<input type="submit" value="Change my Profile Information!"></input>		
			 								 			'); 
			 								 
			 								 ?> 
			 							</td>
		 							</tr>
		 						</table>
		 					<?php echo ($disabled ? "" : '
		 					</form>
		 					') ?>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
	 	</div>
	</div>
 </div>

</body>
</html>
