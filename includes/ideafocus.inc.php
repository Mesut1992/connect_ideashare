<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

// echo $_GET["idea"];
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