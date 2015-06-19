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
    		lastname, faculty, linkin, location, webpage, facebook, twitter, pic
    		FROM members WHERE id = ?;";

$stmt = $mysqli->prepare($prep_stmt);

$stmt->bind_param('i', $uid);

$stmt->execute();
$stmt->bind_result($uid, $iemail, $ifname, $ilname, $ifac, $ilin, $iloc, $iwebp, $ifb, $itwit, $ipic);

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
	$pic = $ipic;

	$stmt->close();
	
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



$error_msg = "";
$error_msg_final = "";
$uploadOk = 1;
$updated = false;
$error = false;

if(isset($_GET["updated"])){
    $updated = $_GET["updated"];
}
if(isset($_GET["error"])){
    $error = $_GET["error"];
}
if(isset($_GET["errmsg"])){
    $error_msg = $_GET["errmsg"];
}

if (isset($_POST['submit'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);    
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $error_msg ="File is not an image.";
        $uploadOk = 0;
    }

    // File already exists
    if (file_exists($target_file)) {
    $error_msg = "Sorry, file already exists.";
    $uploadOk = 0;
    }
     // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    $error_msg ="Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $error_msg ="Sorry, please upload a picture! Only JPG, JPEG, PNG and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
         header('Location: start-share.php?error=true&errmsg='.$error_msg);
    } 
    else {
            //target_file is the path to the pic
           $target_file = $target_dir . "Pic_" . $_SESSION["uploadedpictures"] . "User_" . $_SESSION["user_id"] . '.' . $imageFileType ;
         if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
            {
                $success_msg = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $_SESSION["uploadedpictures"] = $_SESSION["uploadedpictures"] + 1;
                //increase number of pics count of user in database
                if ($insert_stmt = $mysqli->prepare("UPDATE members SET uploadedPics= ?, pic=? WHERE id =?;")) {
                    $insert_stmt->bind_param('sss', $_SESSION["uploadedpictures"],$target_file, $_SESSION["user_id"]);
                    // Execute the prepared query
                    $insert_stmt->execute();
                    header('Location: profile.php');
           
                }
            }
         else {
            $error_msg_final = "Sorry, there was an error uploading your file.";
            $uploadOk = false;
        	}
    	}
    }
?>