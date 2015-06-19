<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

$disabled = false;

if(isset($_GET["user"])) {
	$uid = $_GET["user"];
	
	$disabled = true;
}
else {
	$uid = $_SESSION["user_id"];
}

$prep_stmt = "SELECT id, email, surname,
    		lastname, faculty, linkin, location, webpage, facebook, twitter
    		FROM members WHERE id = ?;";

$stmt = $mysqli->prepare($prep_stmt);

$stmt->bind_param('i', $uid);

$stmt->execute();
$stmt->bind_result($uid, $iemail, $ifname, $ilname, $ifac, $ilin, $iloc, $iwebp, $ifb, $itwit);

$updated = false;

if($stmt->fetch()) {
	$fname = $ifname;
	$lname = $ilname;
	$email = $iemail;
	$fac = $ifac;
	$loc = $iloc;
	$webp = $iwebp;
	$lin = $ilin;
	$fb = $ifb;
	$twit = $itwit;
	
	$stmt->free_result();
	
	if((isset($_GET["firstname"]) || isset($_GET["lastname"]) || isset($_GET["email"])
		|| isset($_GET["faculty"]) || isset($_GET["location"]) || isset($_GET["webpage"]) 
		|| isset($_GET["linkedin"]) || isset($_GET["facebook"]) || isset($_GET["twitter"])) && !$disabled) {
		
		if(isset($_GET["firstname"]))
			$fname = $_GET["firstname"];
		
		if(isset($_GET["lastname"]))
			$lname = $_GET["lastname"];
		
		if(isset($_GET["email"]))
			$email = $_GET["email"];
		
		if(isset($_GET["faculty"]))
			$fac = $_GET["faculty"];
		
		if(isset($_GET["location"]))
			$loc = $_GET["location"];
		
		if(isset($_GET["webpage"]))
			$webp = $_GET["webpage"];
		
		if(isset($_GET["linkedin"]))
			$lin = $_GET["linkedin"];
		
		if(isset($_GET["facebook"]))
			$fb = $_GET["facebook"];
		
		if(isset($_GET["twitter"]))
			$twit = $_GET["twitter"];
							
		$prep_upd_stmt = "UPDATE members
    		SET surname = ?, lastname = ?, email = ?, 
				faculty = ?, location = ?, webpage = ?,
				linkin = ?, facebook = ?, twitter = ?
			WHERE id = ?;";
		
		$upd_stmt = $mysqli->prepare($prep_upd_stmt);

		$upd_stmt->bind_param('sssssssssi', $fname, $lname, $email, $fac, $loc, $webp, $lin, $fb, $twit, $uid);
		
		$updated = true;
		
		$_SESSION["username"] = $fname;
		
		$upd_stmt->execute();
	}
}
else {
	echo "Something went terribly wrong... :S";
}

$sessuser = $_SESSION["username"];

?>