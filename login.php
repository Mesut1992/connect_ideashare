<?php 
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	include_once 'includes/process_login.php';

	$reg_success = false;
	
	if(login_check($mysqli) == true){
		$logged = 'in';
		header('Location: index.php');

	}else{
		$logged = 'out';
	}
	
	if(isset($_GET["register"]) && ($register_status = $_GET["register"]) == "success") {
		$reg_success = true;
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
	<script src="js/forms.js"></script>
	<script src="js/sha512.js"></script>
	<script src="js/scripts.js"></script>

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
		 			<a href="index.php"><div id="fixed-header-bar" class="logo block">
		 				<img src="pics/logo/logo_connect_transparent.png"/>
		 			</div></a>
			 		<div id="empty-box-190px"></div><!-- Do not delete this! -->
			 		<div class="float-right-container">
				 		<div id="fixed-settings-bar" class="left-side1 block">
				 			<div class="block-content">	
				 			<h2>Welcome!</h2>
				 			<p>CONNECT can only be used if you are logged in!
							<br><br>
				 			<h4>Reasons to register</h4><br>
				 				<p><i class="fa fa-hand-o-right fa-1g"></i>&nbsp;You will have access </p>
				 				<p><i class="fa fa-hand-o-right fa-1g"></i>&nbsp;You need to memorize another password </p>
				 					<p>BTW, we have no "<i>password recovery</i>" option..</p>
				 				<p><i class="fa fa-hand-o-right fa-1g"></i>&nbsp;You will be happy</p>
				 				<p><i class="fa fa-hand-o-right fa-1g"></i>&nbsp;You will get spam mails from us</p>
				 				<p><i class="fa fa-hand-o-right fa-1g"></i>&nbsp;We will read your password and try to hack other accounts of yours</p>
			 				</div>
			 			</div>
		 			</div>
		 	</div>
		 	<div class="navigation block">
		 		<div class="content block">
		 			<div class="navigation-links block">
			 			<table class="navigation-links-table">
						  <tr>
						    <td><a href="register.php">&nbspREGISTER ME&nbsp</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						   
						    <td class="active"><a href="login.php">&nbspLOGIN</a></td>						   

						    </td>
						  </tr>
						</table>
		 			</div>
		 			<div class="preview-under-nav-links block">
		 				<div class="right-side1 square block">
		 					<div class="block-content">
		 					<?php 
		 					
		 						if($reg_success) {
		 							echo '
								<div class="msg-success">
			 						<p>You are now registered!<br>
									Login with your mail and passwort below</p>
			 					</div>
			 					<br>
									';
		 						}
		 					
		 					?>
				 				<h2>LOGIN</h2><br>
			 					<form method="POST" name="login_form">
			 					<table>
			 						<tr>
				 						<td>
				 							Mail 
				 						</td>
				 						<td>
				 							<input type="text" name="email" size="40">
				 						</td>
			 						</tr>

			 						<tr>
				 						<td>
				 							Password 
				 						</td>
				 						<td>
				 							<input type="password" name="password" id="password" size="40">
				 						</td>
			 						</tr>
			 						
			 						<tr>
			 							<td>
			 								<input type="button" value="Login" onclick="formhash(this.form, this.form.password);">
			 							</td>	
			 						</tr>			 								 						
			 					</table>	
								</form>
				 				<?php
				 					if (isset($_GET['error'])) {
				 						echo '<p class="error">Error Logging in!</p>';
				 					}
				 				?>			
		 					</div>			
		 				</div>
		 				<div class="right-side1 square block">
			 				<div class="block-content">
			 								 				<h2>Not a member yet?</h2><br>
		 					<!-- 	<?php 
				 					if ($logged == 'in') {
				 						//This will never be shown! If logged in -> redirect to index.php 	
				 						echo '<p>You are currently logged ' . $logged . 'as ' . htmlentities($_SESSION['username']) . '.</p>';
				 						echo '<p>Do you want to change the user? <a href="includes/logout.php">Log out</a>.</p>';
				 					} else {
				 						echo '<p>Currently logged ' . $logged . '!' . '</p>';
				 						echo "<br>";
				 						echo "<p>If you don't have a login, please <a href='register.php'>register here.</a></p><br>";
				 						echo "<p>You need to be registered to access the site!</p>";				 						
				 					}
		 						?> -->
		 							<p><a href='register.php'><i class="fa fa-floppy-o fa-2x"></i> Register here</a></p><br>
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
