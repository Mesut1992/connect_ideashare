<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
 
$error_msg = "";

if (isset($_POST['description'], $_POST['title'], $_POST['abstract'], $_POST['category'])) {
    // Sanitize and validate the data passed in
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $abstract = filter_input(INPUT_POST, 'abstract', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $userid = $_SESSION['user_id'];
 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO ideas (title, abstract, description, category, user_id) VALUES (?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssd', $title, $abstract, $description, $category, $userid);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                echo "failed to register!";
                //header('Location: ../error.php?err=Registration failure: INSERT');
            }
            else{
                header('Location: ./discover.php');
            }
        }
}