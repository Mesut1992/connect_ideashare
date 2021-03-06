<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

$user_id = $_SESSION["user_id"];

$error = false;

$posted = false;
$liked = false;

if(isset($_GET["idea"]) && isset($_POST["comment"])) {
	$idea_id = $_GET["idea"];
	$comment = $_POST["comment"];
	
	$prep_stmt = "INSERT INTO comments (members_id, idea_id, comment) VALUES (?, ?, ?);";
	
	$stmt = $mysqli->prepare($prep_stmt);
	
	$stmt->bind_param('iis', $user_id, $idea_id, $comment);
	
	$stmt->execute();
	
	$stmt->close();
	
	$posted = true;
}

if(isset($_GET["idea"]) && isset($_GET["like"]) && $_GET["like"] == 1) {
	$idea_id = $_GET["idea"];
	
	$prep_stmt = "INSERT INTO likes (members_id, idea_id) VALUES (?, ?);";
	
	$stmt = $mysqli->prepare($prep_stmt);
	
	$stmt->bind_param('ii', $user_id, $idea_id);
	
	$stmt->execute();
	
	$stmt->close();
	
	if($mysqli->error)
		$error->$mysqli->error;
	
	$liked = true;
}

if (isset($_GET["idea"])) {
	$idea_id = $_GET["idea"];
	
    $prep_stmt = "SELECT id, title, abstract, description, category, 
    user_id, username, email, idea_creation_date, COUNT(likes.idea_id) AS likes_count FROM ideas, members, likes
    WHERE members.id = ideas.user_id AND likes.idea_id = ideas.ideas_id AND ideas_id = ?";
    $stmt = $mysqli->prepare($prep_stmt);
    $stmt->bind_param('i', $idea_id);
    $stmt->execute();
    $stmt->bind_result($user_id, $title, $abstract, $description, $category, $uid, $uname, $email, $creation_date, $likes_count);
    $picture = "pics/example/photo-original (2).jpg";
    $stmt->fetch();
    
    $stmt->close();
    
    // fetch comments
    $prep_stmt = "SELECT comment, update_date, members.id, surname, lastname 
    		FROM comments, members WHERE comments.members_id = members.id AND comments.idea_id = ?;";
    $stmt = $mysqli->prepare($prep_stmt);
    $stmt->bind_param('i', $idea_id);
    $stmt->execute();

    $stmt->bind_result($ccmt, $cupddt, $cmid, $csname, $clname);
    
    $comments = array();
    $update_dates = array();
    $members_id = array();
    $surnames = array();
    $lastnames = array();
    
    while($stmt->fetch()) {
    	array_push($comments, $ccmt);
    	array_push($update_dates, $cupddt);
    	array_push($members_id, $cmid);
    	array_push($surnames, $csname);
    	array_push($lastnames, $clname);
    }
    
    $stmt->close();
}
else{
    header('Location: discover.php');
}
 ?>