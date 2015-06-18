<?php 
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Secure Login: Registration Form</title>
	<meta charset="UTF-8">
	<!--Responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--JavaScript files-->
	<script src="js/scripts.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/forms.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/sha512.js"></script>

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
				 			<?php 
				 				if (!empty($error_msg)) {	
				 					echo $error_msg;
				 				}
				 			?>
				 			<h4>Please note</h4><br>
				 				<p>The data you entered will <strong>only</strong> be viewable from the DHBW intranet. This webpage is not accessable from the internet. It is only accessable for <strong>DHBW students</strong>. Please be aware that all information you provide is saved in an internal database. The data will not be sold to any company. The owner of CONNECT and the database is DHBW.</p>
				 			<br>
				 			<h4>In short: DHBW will not sell your data. Your data is save.</h4><p>And by the way.. who would be interested anyway? </p>
			 				</div>
			 			</div>
		 			</div>
		 	</div>
		 	<div class="navigation block">
		 		<div class="content block">
		 			<div class="navigation-links block">
			 			<table class="navigation-links-table">
						  <tr>
						   
						    <td class="active"><a href="register.php">&nbspREGISTER ME&nbsp</i></a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						    
						    <td><a href="login.php">&nbspLOGIN &nbsp</a></td>

						    </td>
						  </tr>
						</table>
		 			</div>
		 			<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
			 				method="post" name="registration_form">
			 			<div class="preview-under-nav-links block">
			 				<div class="right-side1 square block">
			 					<div class="block-content">
				 				<h2>Personal Information</h2><br>
					 				<table>
					 					<tr>
					 						<td>
					 							Surname
					 						</td>
					 						<td>
					 							<input type="text" name="surname" id="surname" maxlength="8" required placeholder="Enter a valid surname"/>
					 						</td>
					 					</tr>
					 					<tr>
					 						<td>
					 							Lastname
					 						</td>
					 						<td>
					 							<input type="text" name="lastname" id="lastname" maxlength="8" required placeholder="Enter a valid lastname"/>
					 						</td>
					 					</tr>
					 					<tr>
					 						<td>
					 							Faculty
					 						</td>
					 						<td>
					 							<input type="text" name="faculty" id="faculty" maxlength="8" required placeholder="Enter your faculty"/>
					 						</td>
					 					</tr>
					 					<tr>
					 						<td>
					 							LinkIn(CV)
					 						</td>
					 						<td>
					 							<input type="text" name="LinkIn" id="linkIn" maxlength="8" placeholder="Enter your linkIn URL"/>
					 						</td>
					 					</tr>
					 					<tr>
					 						<td>
					 							Location
					 						</td>
					 						<td>
					 							<input type="text" name="location" id="location" maxlength="8" required placeholder="Enter your City"/>
					 						</td>
					 					</tr>
					 				</table>
					 				<p><i class="fa fa-hand-o-down"></i> Do not forget the stuff below! </p>
			 					</div>			

			 				</div>
			 				<div class="right-side1 square block">
				 				<div class="block-content">
					 				<h2>Contact Details</h2><br>
					 				<table>
					 					<tr>
					 						<td>
					 							Username
					 						</td>
					 						<td>
					 							<input type="text" name="username" id="username" maxlength="8" required placeholder="Enter a valid username"/>
					 						</td>
					 					</tr>
					 					<tr>
					 						<td>
					 							E-Mail
					 						</td>
					 						<td>
					 							<input title="valid mail"  type="email" name="email" id="email" maxlength="30" autocomplete="on" required placeholder="Enter a valid email address" pattern="[a-zA-Z]+[@][a-zA-Z]+[.][a-zA-Z]+"/>
					 						</td>
					 					</tr>
					 					<tr>
					 						<td>
					 							Password
					 						</td>
					 						<td>
					 							<input type="password" name="password" id="password" placeholder="password"></input>
					 						</td>
					 					</tr>
					 					<tr>
					 						<td>
					 							Retype Password
					 						</td>
					 						<td>
					 							<input type="password" name="confirmpwd" id="confirmpwd" placeholder="confirm password"></input>
					 						</td>
					 					</tr>
<!-- 					 					<tr>
					 						<td>
					 							Webpage
					 						</td>
					 						<td>
					 							<input type="text" name="webpage" id="webpage" maxlength="8" required placeholder="Enter a webpage URL"/>
					 						</td>
					 					</tr> -->
					 					<tr>
					 						<td>
					 							Facebook
					 						</td>
					 						<td>
					 							<input type="text" name="facebook" id="facebook" maxlength="8" placeholder="Enter a Facebook URL"/>
					 						</td>
					 					</tr>
					 					<!-- <tr>
					 						<td>
					 							 Twitter
					 						</td>
					 						<td>
					 							<input></input>
					 						</td>
					 					</tr> -->
					 				</table>
					 			<input type="submit" value="Register" onclick="regformhash(this.form, 
								this.form.username, this.form.email, this.form.password, this.form.confirmpwd);"></input>
				 				</div>		
			 				</div>
			 			</div>
			 		</div>
			 	</div>
			 	</form>
		 	<!--2nd row-->
	 		<div class="right-side-large-block block">
	 		
		 		
	 			<div class="left-side4-content block">
		 			 <div class="right-side1 square block" style="background: transparent;">
		 			 	<div class="block-content">
		 			 	<h2>Social Media</h2>
		 			 		<p>Please make sure you connect your profile to Facebook! You will be able to share your idea over Facebook!</p><br>
		 			 		<p><strong>You can connect to your facebook profile by signing up and managing the profile settings page!</strong></p>
		 			 	</div>
		 			 </div>
	 			</div>
	 		
	 		<!--3rd row-->
	 		<div class="block-group">
  			<div id="fixed-left-side4" class="left-side4 block">
	  			<div class="right-side1 suqare block">
	  				<div class="block-content">
	  					Tell your friends how cool we are. They will love us and you will be the cool guy. 
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
