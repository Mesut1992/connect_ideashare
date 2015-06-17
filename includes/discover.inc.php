<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

if(isset($_GET["category"]) && isset($_GET["sort"]) && ($_GET["category"] != "All")) {
    $prep_stmt = "SELECT title, abstract, description, category, 
    user_id, username, email FROM ideas, members
    WHERE members.id = ideas.user_id AND category = ?;";
    $stmt = $mysqli->prepare($prep_stmt);
    $stmt->bind_param('s', $_GET["category"]);
}
else {
    $prep_stmt = "SELECT title, abstract, description, category, 
    user_id, username, email FROM ideas, members
    WHERE members.id = ideas.user_id;";
    $stmt = $mysqli->prepare($prep_stmt);
}

$stmt->execute();
$stmt->bind_result($ttitle, $tabstract, $tdescription, $tcategory, 
    $tuid, $tuname, $temail);
//$result = $mysqli->query($stmt);

$user_id = array();
$username = array();
$email = array();
$title = array();
$abstract = array();
$description = array();
$category = array();
$picture = array(); //is not implemented in the database yet

$count = 0;

while($stmt->fetch()) {
    array_push($user_id, $tuid);
    array_push($username, $tuname);
    array_push($email, $temail);
    array_push($title, $ttitle);
    array_push($abstract, $tabstract);
    array_push($description, $tdescription);
    array_push($category, $tcategory);
    array_push($picture, "pics/example/photo-original (2).jpg");

    $count++;
}

if($count == 0)
    echo "Database empty, this message should not be shown, normally!";



//To view all elements in the database, uncomment this
// for ($i=0; $i < count($user_id); $i++) { 
// 	echo "<br>";
// 	echo $user_id[$i];
// 	echo $title[$i];
// 	echo $abstract[$i];
// 	echo $description[$i];
// 	echo $category[$i];
// }

?>