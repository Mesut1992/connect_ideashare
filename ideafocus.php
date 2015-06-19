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

		 	<div style="height:1280px;" class="logo-slide block"> 
		 			<a href="index.php"><div id="fixed-header-bar" class="logo block">
		 				<img src="pics/logo/logo_connect_transparent.png"/>
		 			</div></a>
			 			<div id="empty-box-190px">
			 			</div>
			 		<div class="float-right-container">
						 <img src="pics/example/photo-original (2).jpg" class="full-img"/>
						 
						 <div id="info-left-box" class="block-content">
			 				<h3>Category: </h3><p><?php echo $category?></p>
			 				<br>
			 				<h3>Created by:</h3><a href="profile.php?user=<?php echo $user_id ?>"><p><?php echo $uname ?> (<?php echo $email ?>)</a></p>
			 				<br>
			 				<h3>Creation Date: </h3><p><?php echo $creation_date?></p>
			 				<br>
			 				<hr>
			 				<p id="likes">
			 					<a href="ideafocus.php?idea=<?php echo $idea_id ?>&like=1"><i class="fa fa-thumbs-o-up"></i> this idea! </a>
			 					(<?php echo $likes_count.($likes_count == 1 ? " Like" : " Likes") ?>)
			 					</p>
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
						   
						    <td><a href="login.php">&nbspPROFILE</a></td>
						    <td><i class="fa fa-minus fa-1g"></i></td>
						    
						    <td><a href="logout.php">&nbspLOG OUT &nbsp</a></td>
						  </tr>
						</table>
		 			</div>
		 			<div class="preview-under-nav-links block" id="explenationbox-discoverpage">
		 				<div class="block-content white-color">
		 					<h1><?php echo $title ?></h1>
		 					<h3>Abstract: </h3> <p><?php echo $abstract?></p>
		 					<br>
			 				<h3>Description: </h3><p><?php echo $description ?></p>
		 				</div>
		 			</div>
		 		</div>
		 	
  			</div>
	  			<div class="box-960height block" >
	  			<div class="left-side4 block ">
	 				<div id="comment-section">
	 					<?php 
	 						for($i = 0; $i < count($comments); $i++) {
	 							echo '
						<div class="comment">
	 						<hr>
	 						<table>
	 							<tr><td class="comment-text">'.$comments[$i].'</td></tr>
	 							<tr><td class="comment-info"><a href="profile.php?user='.$members_id[$i].'">'.
	 								$surnames[$i].' '.$lastnames[$i].'</a> on '.$update_dates[$i].
	 								'</td></tr>
	 							<tr><td><hr></td></tr>
	 						</table>
	 					</div>	
								';
	 						}
	 						
	 						if(count($comments) == 0) {
	 							echo '
						<h3>No comments yet. So hurry up and submit the first one!</p>
								';
	 						}
	 					?>
	 					
	 				</div>
	 			
	 			<div id="explenationbox-discoverpage" class="preview-under-nav-links block">
	 				<div id="comment-submit-section" class="block-content">
	 					<form action="ideafocus.php?idea=<?php echo $idea_id ?>" method="post">
	 						<table>
	 							<tr>
		 							<td>
		 								<textarea name="comment" placeholder="Type your comment here!"></textarea>
		 							</td>
	 							</tr>
	 							<tr>
		 							<td>
		 								<input type="submit">
		 							</td>
	 							</tr>
	 						</table>
	 					</form>
	 				</div>
	 			</div></div>
  			</div>

	 	</div><!--Still in Blockgroup!-->
	</div>
 </div>

</body>
</html>
