<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

$user_id = $_SESSION["user_id"];

$posted = false;

if(isset($_GET["idea"]) && isset($_POST["comment"])) {
	$idea_id = $_GET["idea"];
	$comment = $_POST["comment"];
	
	$prep_stmt = "INSERT INTO comments (members_id, idea_id, comment) VALUES (?, ?, ?);";
	
	$stmt = $mysqli->prepare($prep_stmt);
	
	$stmt->bind_param('iis', $user_id, $idea_id, $comment);
	
	$stmt->execute();
	
	$stmt->free_result();
}

if (isset($_GET["idea"])) {
    $prep_stmt = "SELECT id, title, abstract, description, category, 
    user_id, username, email, idea_creation_date FROM ideas, members
    WHERE members.id = ideas.user_id AND ideas_id = ?;";
    $stmt = $mysqli->prepare($prep_stmt);
    $stmt->bind_param('s', $_GET["idea"]);
    $stmt->execute();
    $stmt->bind_result($user_id, $title, $abstract, $description, $category, $uid, $uname, $email, $creation_date);
    $picture = "pics/example/photo-original (2).jpg";
    $stmt->fetch();
}
else{
    header('Location: discover.php');
}
 ?>